<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class KehadiranController extends Controller
{
    private function getSupabaseHeaders()
    {
        return [
            'apikey' => env('SUPABASE_ANON_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_ANON_KEY'),
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Ambil semua data ucapan (untuk load awal)
     */
    public function index()
    {
        try {
            $response = Http::withHeaders($this->getSupabaseHeaders())
                ->withoutVerifying()
                ->get(env('SUPABASE_URL') . '/rest/v1/kehadiranupd2?select=*&order=created_at.desc');

            if ($response->successful()) {
                return response()->json($response->json());
            }

            Log::error('Supabase Index gagal. Status: ' . $response->status());
            return response()->json([], 500);

        } catch (\Exception $e) {
            Log::error('Koneksi Gagal ke Supabase (Index): ' . $e->getMessage());
            return response()->json([], 500);
        }
    }

    /**
     * Simpan data kehadiran baru
     */
    public function store(Request $request)
    {
        try {
            // Validasi
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|max:100',
                'kehadiran' => 'required|in:Hadir,Tidak Hadir',
                'ucapan' => 'nullable|string|max:500',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'messages' => $validator->errors()], 422);
            }

            $data = $validator->validated();
            $data['konfirmasi_kehadiran'] = $data['kehadiran'];
            unset($data['kehadiran']);

            // Kirim ke Supabase dengan header "Prefer"
            $response = Http::withHeaders(array_merge($this->getSupabaseHeaders(), [
                'Prefer' => 'return=representation',
            ]))
                ->withoutVerifying()
                ->post(env('SUPABASE_URL') . '/rest/v1/kehadiranupd2', $data);

            if ($response->successful()) {
                $responseData = $response->json() ?? [];

                return response()->json([
                    'success' => true,
                    'data' => $responseData[0] ?? $data,
                    'message' => 'Konfirmasi kehadiran berhasil dikirim.',
                ]);
            }

            Log::error('Supabase Error Non-200. Status: ' . $response->status() . ' Body: ' . $response->body());
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan ke Supabase. Status: ' . $response->status(),
            ], $response->status());

        } catch (\Exception $e) {
            Log::error('FATAL ERROR di KehadiranController (store): ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan server internal.',
            ], 500);
        }
    }

    /**
     * Hitung total Hadir & Tidak Hadir
     */
    private function getCounts()
    {
        try {
            $response = Http::withHeaders($this->getSupabaseHeaders())
                ->withoutVerifying()
                ->get(env('SUPABASE_URL') . '/rest/v1/kehadiranupd2?select=konfirmasi_kehadiran');

            if ($response->successful()) {
                $data = $response->json();
                $hadir = 0;
                $tidakHadir = 0;

                foreach ($data as $item) {
                    if (isset($item['konfirmasi_kehadiran'])) {
                        if ($item['konfirmasi_kehadiran'] === 'Hadir') $hadir++;
                        elseif ($item['konfirmasi_kehadiran'] === 'Tidak Hadir') $tidakHadir++;
                    }
                }

                return ['hadir' => $hadir, 'tidak_hadir' => $tidakHadir];
            }

            Log::error('Supabase Counts gagal. Status: ' . $response->status());
            return ['hadir' => 0, 'tidak_hadir' => 0];

        } catch (\Exception $e) {
            Log::error('Koneksi Gagal ke Supabase (Counts): ' . $e->getMessage());
            return ['hadir' => 0, 'tidak_hadir' => 0];
        }
    }

    public function counts()
    {
        return response()->json($this->getCounts());
    }
}
