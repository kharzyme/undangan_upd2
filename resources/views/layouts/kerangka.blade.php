<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light only">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undangan Fulanah & Fulan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #tersembunyi {
            max-height: 0;
            transition: max-height 0.8s ease-in-out;
        }
        #tersembunyi.buka {
            max-height: 850px;
        }
        /* Animasi bounce */
        @keyframes bounce {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }
        .animate-bounce {
            animation: bounce 1.4s infinite ease-in-out both;
        }

        /* Sembunyikan scroll sementara */
        body.loading {
            overflow: hidden;
        }
    </style>
</head>
<body>
<!-- PRELOADER -->
<div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-[9999]">
    <div class="flex space-x-2">
        <div class="w-3 h-3 bg-cream rounded-full animate-bounce [animation-delay:-0.3s]"></div>
        <div class="w-3 h-3 bg-cream rounded-full animate-bounce [animation-delay:-0.15s]"></div>
        <div class="w-3 h-3 bg-cream rounded-full animate-bounce"></div>
    </div>
</div>
    <audio id="audio" loop>
        <source src="/images/Penjaga_Hati.mp3" type="audio/mpeg">
    </audio>
    <div class="md:w-full h-screen flex flex-wrap">
        <div class="md:block md:w-[70%] hidden h-screen bg-[url(../../public/images/kirilg.png)] bg-cover bg-center fixed">
            <div class="mt-[500px] text-white">
                <p class=" font-Jost text-[20px] text-center">The Wedding of</p>
                <p class=" font-Rivage md:text-[70px] text-[50px] text-center mt-[-10px]">Fulanah & Fulan</p>
                <p class="font-Jost text-[20px] mt-[-20px] text-center">Senin, 24 September 2029</p>
            </div>
        </div>
        <div class="md:w-[30%] md:ml-[70%] w-full h-screen relative">
            @include('partials.cover')
            <div id="main" class="absolute inset-0 z-0  overflow-hidden  "> {{-- --}}
                @yield('content')
            </div>
        </div>
    </div>
    @yield('script')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- PRELOADER --}}
    <script>
    // Saat mulai, tambahkan kelas loading agar tidak bisa di-scroll
    document.body.classList.add('loading');

    // Tunggu sampai SEMUA konten (termasuk gambar) selesai dimuat
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        preloader.style.transition = 'opacity 0.6s ease';
        preloader.style.opacity = '0';

        // Setelah animasi selesai, hapus elemen
        setTimeout(() => {
            preloader.remove();
            document.body.classList.remove('loading');
        }, 600);
    });
</script>
</body>
</html>
