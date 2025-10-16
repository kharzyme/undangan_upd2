@extends('layouts.kerangka')

@section('content')
{{-- BACKGROUND --}}
    <div class="w-full h-screen bg-[url(../../public/images/utama.png)] bg-cover bg-center pt-[80px] text-white">
        <p id="judul1" class=" font-Jost text-[20px] text-center opacity-0">The Wedding of</p>
        <p id="judul2" class=" font-Rivage md:text-[60px] text-[50px] text-center mt-[-10px] opacity-0">Fulanah & Fulan</p>
        <p id="judul3" class="font-Jost text-[20px] mt-[-10px] text-center mb-[500px] opacity-0">Senin, 24 September 2029</p>
    </div>
    {{-- KONTEN 2 --}}
    <div class="w-full h-[200px] pt-[90px] mt-[-70px] px-[20px] bg-[url(../../public/images/ombak2.png)] bg-cover bg-center">
        <p class="font-Jost text-black text-[30px] text-center">OUR</p>
        <p class="font-Rivage text-[40px] text-cream text-center mt-[-35px]">wedding</p>
        <p class=" font-Jost text-[15px] text-center mt-[20px]"data-aos="zoom-in" data-aos-duration="2000">Dengan Memanjatkan puji dan syukur kehadirat Allah Subhanahu Wa Ta'ala atas segala rahmat, hidayah, dan karunia-Nya yang tak terhingga. Serta dengan memohon taufik, berkah, dan ridho-Nya agar senantiasa melimpahi setiap langkah kami, insyaaAllah, kami akan menyelenggarakan acara pernikahan putra/putri kami:</p>
    </div>
    <div class="w-full h-[900px] mt-[10px] md:pt-[150px] pt-[175px] bg-white overflow-hidden">
        <div class="w-full h-auto flex flex-wrap">
            <div id="slideshow-container" class="w-[50%] h-[280px] rounded-tr-[40px] rounded-br-[40px] overflow-hidden relative shadow-xl/25" data-aos="fade-right" data-aos-duration="2000">
                <div class="w-full h-full bg-[url(../../public/images/wanita1.png)] bg-cover bg-center opacity-100 transition duration-1000 absolute inset-0"></div>
                <div class="w-full h-full bg-[url(../../public/images/wanita2.png)] bg-cover bg-center opacity-0 transition duration-1000 absolute inset-0"></div>
            </div>
            <div class="w-[50%] h-[280px] pt-[40px] px-[30px]">
                <p class="font-Rivage text-[40px] text-cream text-center" data-aos="fade-up" data-aos-duration="2000">Fulanah</p>
                <hr class="w-[30%] mx-auto" data-aos="fade-up" data-aos-duration="2000">
                <p class="font-Jost text-[15px] text-center mt-[18px] mb-[18px]" data-aos="fade-up" data-aos-duration="2000">Putri Kedua dari Bapak Fulan & Ibu Fulanah</p>
                <hr class="w-[30%] mx-auto" data-aos="fade-up" data-aos-duration="2000">
                <div data-aos="fade-up" data-aos-duration="2000"><a href="#" onclick="return false;" class="font-Jost text-[15px]"><div class="w-[120px] h-[25px] mt-[18px] mx-auto rounded-[5px] bg-cream hover:bg-wheat flex items-center justify-center shadow-xl/20"><i class="fab fa-instagram mr-1"></i>@Fulanah</div></a></div>
            </div>
        </div>
        <div class="w-full h-auto mt-[30px] flex flex-row-reverse">
            <div id="slideshow-container2" class="w-[50%] h-[280px] rounded-tl-[40px] rounded-bl-[40px] overflow-hidden relative shadow-xl/25" data-aos="fade-left" data-aos-duration="2000">
                <div class="w-full h-full bg-[url(../../public/images/pria1.png)] bg-cover bg-center opacity-100 transition duration-1000 absolute inset-0"></div>
                <div class="w-full h-full bg-[url(../../public/images/pria2.png)] bg-cover bg-center opacity-0 transition duration-1000 absolute inset-0"></div>
            </div>
            <div class="w-[50%] h-[280px] pt-[40px] px-[30px]">
                <p class="font-Rivage text-[40px] text-cream text-center" data-aos="fade-up" data-aos-duration="2000">Fulan</p>
                <hr class="w-[30%] mx-auto" data-aos="fade-up" data-aos-duration="2000">
                <p class="font-Jost text-[15px] text-center mt-[18px] mb-[18px]" data-aos="fade-up" data-aos-duration="2000">Putra Pertama dari Bapak Fulan & Ibu Fulanah</p>
                <hr class="w-[30%] mx-auto" data-aos="fade-up" data-aos-duration="2000">
                <div data-aos="fade-up" data-aos-duration="2000"><a href="#" onclick="return false;" class="font-Jost text-[15px]"><div class="w-[120px] h-[25px] mt-[18px] mx-auto rounded-[5px] bg-cream hover:bg-wheat flex items-center justify-center shadow-xl/20"><i class="fab fa-instagram mr-1"></i>@Fulan</div></a></div> 
            </div>
        </div>
    </div>
    {{-- KONTEN 2 --}}
    <div class="w-full h-[200px] mt-[-60px] pt-[60px] bg-[url(../../public/images/ombak3.png)] bg-cover bg-center"></div>
        <div class="w-full h-[1500px] bg-cream mt-[-140px]">
            <p class="font-Jost text-center text-[30px]" data-aos="fade-up" data-aos-duration="2000">Save</p>
            <p class="font-Rivage text-center text-[40px] mt-[-20px] mb-[30px]" data-aos="fade-up" data-aos-duration="2000">The Date</p>
            <div class="w-auto h-auto mx-auto flex flex-wrap justify-center pt-[10px] pb-[50px] overflow-hidden font-Jost" data-aos="zoom-in" data-aos-duration="2000">
                <div class="unit inline-block text-center py-[5px] px-[15px] rounded-[10px] mr-[10px] bg-white shadow-xl/10">
                    <div id="days" class="number text-[25px]">00</div>
                    <div class="label text-[15px]">Hari</div>
                </div>
                <div class="unit inline-block text-center py-[5px] px-[14px] rounded-[10px] mr-[10px] bg-white shadow-xl/10">
                    <div id="hours" class="number text-[25px]">00</div>
                    <div class="label text-[15px]">Jam</div>
                </div>
                <div class="unit inline-block text-center py-[5px] px-[10px] rounded-[10px] mr-[10px] bg-white shadow-xl/10">
                    <div id="minutes" class="number text-[25px]">00</div>
                    <div class="label text-[15px]">Menit</div>
                </div>
                <div class="unit inline-block text-center py-[5px] px-[13px] rounded-[10px] bg-white shadow-xl/10">
                    <div id="seconds" class="number  text-[25px]">00</div>
                    <div class="label text-[15px]">Detik</div>
                </div>
            </div>
            <div class="w-full text-center mt-[-30px]" data-aos="fade-up" data-aos-duration="2000">
                <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=The+Wedding+of+Fulan+and+Fulanah&dates=20290924T030000Z/20290924T080000Z&details=Resepsi+dilaksanakan+pada+Senin%2C+24+September+2029.+Waktu%3A+10.00-16.30+WITA.+Lokasi%3A+Kediaman+Mempelai+Wanita.+Lihat+undangan+untuk+informasi+lengkap.&location=Kediaman+Mempelai+Wanita&sf=true&output=xml" target="_blank" class="inline-flex items-center justify-center bg-white hover:bg-gray-200 text-black font-Jost text-[13px] py-2 px-6 rounded-lg shadow-xl/10">
                {{-- Ikon Google (G+) --}}
                <i class="fab fa-google-plus-g text-[13px] mr-2 text-black"></i>
                <span class="text-[15px]">Save to Calendar</span>
                </a>
            </div>
            <div class="w-10/12 h-[240px] mt-[50px] rounded-tl-full rounded-tr-full mx-auto bg-[url(../../public/images/round.png)] bg-cover bg-center shadow-rata" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-10/12 h-[450px] rounded-[20px] px-[20px] pt-[20px] mt-[-20px] mx-auto bg-white text-center shadow-rata" data-aos="zoom-in" data-aos-duration="2000">
                <p class="font-Rivage text-cream text-center text-[40px]" data-aos="fade-up" data-aos-duration="2000">Akad Nikah</p>
                <hr class="w-8/12 mx-auto mb-[40px]" data-aos="fade-right" data-aos-duration="2000">
                <p class="text-[22px] text-cream font-Jost font-bold" data-aos="fade-left" data-aos-duration="2000">Selasa</p>
                <p class="text-[22px] text-cream font-Jost font-bold mt-[-10px] mb-[35px]" data-aos="fade-right" data-aos-duration="2000">18 September 2029</p>
                <p class="text-[15px] font-Jost mb-[15px]" data-aos="fade-left" data-aos-duration="2000"><i class="fas fa-clock mr-2"></i>09.00-10.00 WITA</p>
                <p class="text-[15px] font-Jost mb-[20px]" data-aos="fade-right" data-aos-duration="2000"><i class="fas fa-map-pin text-[18px] text-black mr-2"></i>Aula Masjid Agung Nurul Falah</p>
                <p class="text-[15px] font-Jost" data-aos="zoom-in" data-aos-duration="2000">Tanah Grogot, Kec. Tanah Grogot, Kabupaten Paser, Kalimantan Timur</p>
                <div class="w-full text-center mt-[30px] border-white" data-aos="fade-up" data-aos-duration="2000">
                    <a href="https://maps.app.goo.gl/u4fBxKx4NAHKbuFe6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-cream hover:bg-wheat text-black font-Jost text-[13px] py-2 px-6 rounded-lg shadow-xl/10">
                    <i class="fas fa-location-dot text-[13px] mr-2 text-black"></i>
                    <span>Lihat Maps</span>
                    </a>
                </div>
            </div>
            <div class="w-10/12 h-[450px] rounded-[20px] px-[20px] pt-[20px] mt-[20px] mx-auto bg-white text-center shadow-rata" data-aos="zoom-in" data-aos-duration="2000">
                <p class="font-Rivage text-cream text-center text-[40px]" data-aos="fade-up" data-aos-duration="2000">Resepsi</p>
                <hr class="w-8/12 mx-auto mb-[40px]" data-aos="fade-right" data-aos-duration="2000">
                <p class="text-[22px] text-cream font-Jost font-bold" data-aos="fade-left" data-aos-duration="2000">Senin</p>
                <p class="text-[22px] text-cream font-Jost font-bold mt-[-10px] mb-[35px]" data-aos="fade-right" data-aos-duration="2000">24 September 2029</p>
                <p class="text-[15px] font-Jost mb-[15px]" data-aos="fade-left" data-aos-duration="2000"><i class="fas fa-clock mr-2"></i>10.00-16.30 WITA</p>
                <p class="text-[15px] font-Jost mb-[20px]" data-aos="fade-right" data-aos-duration="2000"><i class="fas fa-map-pin text-[18px] text-black mr-2"></i>Kediaman Mempelai Wanita</p>
                <p class="text-[15px] font-Jost" data-aos="zoom-in" data-aos-duration="2000">Tanah Grogot, Kec. Tanah Grogot, Kabupaten Paser, Kalimantan Timur</p>
                <div class="w-full text-center mt-[30px] border-white" data-aos="fade-up" data-aos-duration="2000">
                    <a href="#" onclick="return false;" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-cream hover:bg-wheat text-black font-Jost text-[13px] py-2 px-6 rounded-lg shadow-xl/10">
                    <i class="fas fa-location-dot text-[13px] mr-2 text-black"></i>
                    <span>Lihat Maps</span>
                    </a>
                </div>
            </div>
        </div>
    {{-- KONTEN 3 SAMPAI 6 --}}
    <div class="w-full max-h-[3800px] bg-white pt-[50px] pb-[150px] overflow-hidden">
        {{-- konten 3 --}}
        <p class="font-Jost text-center text-[15px] mx-[25px]" data-aos="zoom-in" data-aos-duration="2000">"Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tentram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir".</p><br>
        <p class="font-Jost text-center text-[15px] mb-[60px]" data-aos="zoom-in" data-aos-duration="2000">~ QS. Ar-Rum : 21 ~</p>
        {{-- konten 4 --}}
        <p class="font-Jost text-center text-[30px] text-black" data-aos="fade-up" data-aos-duration="2000">PREWEDDING</p>
        <p class="font-Rivage text-center text-[40px] text-cream mt-[-34px] mb-[20px]" data-aos="fade-up" data-aos-duration="2000">gallery</p>
        <div class="w-full h-auto  flex flex-wrap justify-evenly">
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-1.png)] bg-cover bg-center" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-2.png)] bg-cover bg-center" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-3.png)] bg-cover bg-center mt-[3px]" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-4.png)] bg-cover bg-center mt-[3px]" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-5.png)] bg-cover bg-center mt-[3px]" data-aos="fade-up" data-aos-duration="2000"></div>
            <div class="w-[49%] h-[270px] bg-[url(../../public/images/foto-6.png)] bg-cover bg-center mt-[3px]" data-aos="fade-up" data-aos-duration="2000"></div>
        </div>
        <p class="font-Jost text-center text-[15px] mt-[40px] mx-[25px]" data-aos="zoom-in" data-aos-duration="2000">"I love You. I am who I am because of you. You are every reason, every hope, and every dream I've ever had, and no matter what happens to us in the future, everyday we are together is the greatest day of my life. I will always be yours."</p>
        {{-- konten 5 --}}
        <p class="font-Jost text-center text-[30px] text-black mt-[90px]" data-aos="fade-up" data-aos-duration="2000">OUR LOVE</p>
        <p class="font-Rivage text-center text-[50px] text-cream mt-[-45px] mb-[20px]" data-aos="fade-up" data-aos-duration="2000">story</p>
        <div class="w-10/12 h-[280px] mb-[20px] shadow-xl/25 mx-auto bg-cream rounded-[30px] flex flex-wrap overflow-hidden" data-aos="fade-right" data-aos-duration="2000">
            <div class="w-[10%] h-[full] bg-white flex items-center justify-center">
                <p class="font-Jost text-[20px] transform -rotate-90 ">Ta'aruf</p>
            </div>
            <div class="w-[90%] h-[full] bg-[url(../../public/images/story.png)] bg-cover bg-center"></div>
        </div>
        <div class="w-10/12 h-[280px] mb-[20px] shadow-xl/25 mx-auto bg-cream rounded-[30px] flex flex-row-reverse overflow-hidden" data-aos="fade-left" data-aos-duration="2000">
            <div class="w-[10%] h-[full] bg-white flex items-center justify-center">
                <p class="font-Jost text-[20px] transform rotate-90">Khitbah</p>
            </div>
            <div class="w-[90%] h-[full] bg-[url(../../public/images/story.png)] bg-cover bg-center"></div>
        </div>
        <div class="w-10/12 h-[280px] shadow-xl/25 mx-auto bg-cream rounded-[30px] flex flex-wrap overflow-hidden" data-aos="fade-right" data-aos-duration="2000">
            <div class="w-[10%] h-[full] bg-white flex items-center justify-center">
                <p class="font-Jost text-[20px] transform -rotate-90">Menikah</p>
            </div>
            <div class="w-[90%] h-[full] bg-[url(../../public/images/story.png)] bg-cover bg-center"></div>
        </div>
        {{-- konten 6 --}}
        <div class="w-10/12 border-2 border-cream mx-auto mt-[70px] rounded-bl-[80px] rounded-br-[80px] rounded-tl-[20px] rounded-tr-[20px] shadow-xl/25" data-aos="fade-up" data-aos-duration="2000">
            <div id="kerangka" class="konten-atas text-center w-full h-auto pt-[20px] px-[20px]">
                <p class="font-Jost text-black text-[30px]" data-aos="fade-up" data-aos-duration="2000">Wedding</p>
                <p class="font-Rivage text-cream text-[40px] mt-[-30px]" data-aos="fade-up" data-aos-duration="2000">Gift</p>
                <p class="font-Jost text-black text-[15px]" data-aos="zoom-in" data-aos-duration="2000">Kehadiran serta doa restu Bapak/Ibu/Saudara/i dalam momen bahagia kami adalah hadiah yang paling berharga. Apabila Bapak/Ibu/Saudara/i berkeinginan untuk memberikan tanda kasih lain, kami akan menerimanya dengan penuh syukur sebagai pelengkap kebahagiaan kami.</p>
                <div class="w-full text-center mt-[20px]">
                    <button id="pemicu" class="inline-flex items-center justify-center bg-cream hover:bg-wheat text-black font-Jost text-[13px] py-2 px-6 rounded-lg shadow-xl/10">Lihat Rekening</button>
                </div>
            </div>
            {{-- konten tersembunyi --}}
            <div id="tersembunyi" class="w-full max-h-[0px] pr-[20px] pl-[20px] overflow-hidden transition-all duration-1500 ease-in-out">
                <div class="w-full h-[200px] border-b-[1px] pl-[20px] pr-[20px]">
                    <div class="w-[90px] h-[30px] mr-[0px] ml-auto bg-[url(../../public/images/Logo_DANA.png)] bg-center bg-cover mt-[20px]"></div>
                    <p class="text-left font-Jost text-[11px]">Nomor rekening</p>
                    <p class="text-left font-Jost text-[16px]">12342893754</p>
                    <br>
                    <p class="text-left font-Jost text-[11px]">Atas Nama</p>
                    <p class="text-left font-Jost text-[16px] mb-[13px]">a.n Fulanah</p>
                    <button id="copyButton" data-rekening="12342893754" class="flex items-center justify-center w-full mx-auto px-2 py-1 rounded-full text-[16px] font-Jost bg-cream hover:bg-wheat shadow-xl/10">
                        <span id="buttonText">Copy Nomor Rekening</span> 
                        <i class="fas fa-copy text-[16px] ml-2"></i>
                    </button>
                </div>

                <div class="w-full h-[200px] border-b-[1px] pl-[20px] pr-[20px]">
                    <div class="w-[70px] h-[25px] mr-[0px] ml-auto bg-[url(../../public/images/Logo_BRI.png)] bg-center bg-cover mt-[20px]"></div>
                    <p class="text-left font-Jost text-[11px]">Nomor rekening</p>
                    <p class="text-left font-Jost text-[16px]">62721999473</p>
                    <br>
                    <p class="text-left font-Jost text-[11px]">Atas Nama</p>
                    <p class="text-left font-Jost text-[16px] mb-[13px]">a.n Fulanah</p>
                    <button id="copyButton2" data-rekening2="62721999473" class="flex items-center justify-center w-full mx-auto px-2 py-1 rounded-full text-[16px] font-Jost bg-cream hover:bg-wheat shadow-xl/10">
                        <span id="buttonText2">Copy Nomor Rekening</span> 
                        <i class="fas fa-copy text-[16px] ml-2"></i>
                    </button>
                </div>

                <div class="w-full h-[200px] pl-[20px] pr-[20px]">
                    <p class="text-center"><i class="fas fa-gift text-[40px] mb-[20px] mt-[20px]"></i></p>
                    <p class="text-center font-Jost text-[16px] mb-[10px]">Kirim Kado :</p>
                    <p class="text-center font-Jost text-[16px] mb-[13px]">Kediaman Mempelai Wanita</p>
                    <button id="copyButton3" alamat="Rumah Kediaman Mempelai Wanita" class="flex items-center justify-center w-full mx-auto px-2 py-1 rounded-full text-[16px] font-Jost bg-cream hover:bg-wheat shadow-xl/10">
                        <span id="buttonText3">Copy Alamat</span> 
                        <i class="fas fa-copy text-[16px] ml-2"></i>
                    </button>
                </div>
            </div>
            <div class="konten-bawah w-full h-[30px]"></div>
        </div>
    </div>
    {{-- KONTEN 7 --}}
    <div class="w-full h-[200px] mt-[-60px] pt-[60px] bg-[url(../../public/images/ombak3.png)] bg-cover bg-center"></div>
    <div class="w-full h-auto mt-[-120px] pb-[80px] bg-cream">
        <p class="font-Jost text-[30px] text-center" data-aos="fade-up" data-aos-duration="2000">WEDDING</p>
        <p class="font-Rivage text-[40px] text-center mt-[-35px] text-white" data-aos="fade-up" data-aos-duration="2000">wishes</p>
        <div class="w-11/12 h-auto pb-[20px] bg-white mx-auto rounded-[30px] shadow-xl/25" data-aos="zoom-in" data-aos-duration="2000">
            <form id="form-kehadiran" class="pt-[15px]">
                <div class="w-11/12 mx-auto mt-[30px] flex flex-wrap justify-evenly">
                    <div class="w-[38%] h-[80px] bg-cream shadow-xl/10 rounded-[10px] flex flex-col items-center justify-center">
                        <p id="count-hadir" class="font-Jost text-white text-[30px]">0</p>
                        <p class="font-Jost text-white text-[15px] mt-[-10px]">Hadir</p>
                    </div>
                    <div class="w-[38%] h-[80px] bg-cream shadow-xl/10 rounded-[10px] flex flex-col items-center justify-center">
                        <p id="count-tidak-hadir" class="font-Jost text-white text-[30px]">0</p>
                        <p class="font-Jost text-white text-[15px] mt-[-10px]">Tidak Hadir</p>
                    </div>
                </div>
                <input id="input-nama" name="nama" type="text" class="w-11/12 mx-auto block h-[40px] mt-[20px] font-Jost border-[2px] border-cream rounded-[5px] px-[10px]" placeholder="Nama">
                <textarea id="input-ucapan" name="ucapan"  placeholder="Ucapan" class="w-11/12 h-[90px] mt-[15px] mx-auto block font-Jost border-[2px] border-cream rounded-[5px] px-[10px]"></textarea>
                <select id="select-kehadiran" name="kehadiran"  class="font-Jost block mx-auto h-[40px] w-11/12 mt-[15px] border-[2px] border-cream rounded-[5px] px-[10px]">
                    <option value="" disabled selected>Konfirmasi Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
                <button id="btn-kirim" class="w-[100px] mt-[20px] h-8 bg-cream hover:bg-wheat flex items-center justify-center rounded-full mx-auto shadow-xl/10 font-Jost" type="submit">Kirim</button>
            </form>
            <div id="output-ucapan-baru" class="w-11/12 mx-auto rounded-[5px] pt-3 min-h-[0px] max-h-[300px] mt-[20px] mb-[20px] space-y-3 overflow-y-scroll"></div>
        </div>
        <div class="w-11/12 mx-auto h-[150px] text-white mt-[60px] text-center" data-aos="fade-up" data-aos-duration="2000">
            <p class=" font-Jost text-[20px] mb-[10px]">بَارَكَ اللهُ لَكَ وَبَارَكَ عَلَيْكَ وَجَمَعَ بَيْنَكُمَا فِي خَيْرٍ</p>
            <p class="font-Jost text-[15px] mb-[10px]" data-aos="zoom-in" data-aos-duration="2000">"Semoga Allah memberkahi engkau di waktu lapang maupun di waktu sempit, dan semoga Allah (senantiasa) mengumpulkan kalian berdua dalam kebaikan."</p>
            <p class="font-Jost text-[15px]" data-aos="fade-up" data-aos-duration="2000">(HR.Abu Dawud)</p>
        </div>
    </div>
    {{-- KONTEN 8 --}}
    <div class="w-full h-screen bg-[url(../../public/images/akhir.png)] bg-cover bg-center text-white text-center">
        <div class="w-full h-[45%]"></div>
        <div class="w-11/12 mx-auto h-auto"><p class="font-Jost text-[15px] mb-[5px]">Kami Yang Berbahagia</p></div>
        <div class="w-11/12 mx-auto h-auto mt-[10px]"><p class=" font-Rivage text-[50px] mb-[2px]">Fulanah & Fulan</p></div>
        <hr class="w-[60%] mx-auto mb-[10px]">
        {{-- pembatas 2 --}}
        <div class="w-full h-[17%]"></div>

        <div class="w-full h-auto flex flex-wrap justify-center mt-auto">
            <p><i class="fab fa-whatsapp text-[23px] text-center mr-[5px]"></i></p>
            <p><a href="https://www.instagram.com/raxrary?igsh=Nndhem11dWp2d3B1"><i class="fab fa-instagram text-[23px] text-center"></i></a></p>
        </div>
        
        <p class=" font-Jost text-[15px] mt-[20px]">Made By :</p>
        <p class="font-Jost text-[15px]">Rakha R.</p>

        <p class=" font-Jost text-[15px] mt-[20px]">Music By :</p>
        <p class="font-Jost text-[15px] mb-[30px]">Penjaga Hati - Nadhif Basalamah</p>
    </div>

@endsection

@section('script')
    <script src="{{ asset('codes/script.js') }}"> </script>
<script>
    // FUNGSI UTAMA JAVASCRIPT KEHADIRAN
    
    // Mengambil CSRF token dari meta tag
    function getCsrfToken() {
        const tokenElement = document.querySelector('meta[name="csrf-token"]');
        return tokenElement ? tokenElement.content : '';
    }

    // Fungsi utility untuk menyalin teks (lebih kompatibel di iFrame)
    function copyTextToClipboard(text, buttonTextElement, originalText) {
        // Membuat elemen temporary untuk menyalin
        const tempInput = document.createElement('textarea');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        
        try {
            // Menggunakan execCommand untuk kompatibilitas yang lebih luas
            document.execCommand('copy'); 

            if (buttonTextElement) {
                buttonTextElement.textContent = 'Tersalin!';
                setTimeout(() => {
                    buttonTextElement.textContent = originalText;
                }, 2000);
            }
        } catch (err) {
            console.error('Gagal menyalin:', err);
            // Ganti alert() dengan pesan di console atau UI jika memungkinkan
            console.log('Gagal menyalin. Silakan salin manual: ' + text); 
        } finally {
            document.body.removeChild(tempInput);
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // --- DEKLARASI ELEMEN ---
        const formKehadiran = document.getElementById('form-kehadiran');
        const outputUcapanBaru = document.getElementById('output-ucapan-baru');
        const countHadirElement = document.getElementById('count-hadir');
        const countTidakHadirElement = document.getElementById('count-tidak-hadir');
        const btnKirim = document.getElementById('btn-kirim');
        
        const inputNama = document.getElementById('input-nama'); 
        const inputUcapan = document.getElementById('input-ucapan'); 
        // const selectKehadiran = document.getElementById('select-kehadiran'); // Tidak dipakai langsung di sini, tapi ada di form

        // --- FUNGSI MERENDER UCAPAN KE DOM ---
        // isNew = true (prepend) untuk data baru, isNew = false (append) untuk data load awal
        function renderUcapan(data, isNew = false) {
            const div = document.createElement('div');
            // Tambahkan kelas untuk styling
            div.classList.add('p-3', 'rounded-lg', 'bg-cream/10', 'shadow-sm', 'border', 'border-cream', 'mb-2'); 
            
            // Supabase mengembalikan 'konfirmasi_kehadiran', bukan 'kehadiran'
            const kehadiranText = data.konfirmasi_kehadiran || data.kehadiran || 'Belum Dikonfirmasi';

            div.innerHTML = `
                <p class="font-Jost font-bold">${data.nama} (${kehadiranText})</p>
                <p class="font-Jost text-sm mt-1">${data.ucapan || ''}</p>
            `;
            
            // Hapus pesan "Memuat ucapan..." atau "Belum ada ucapan" jika sedang render data
            if (outputUcapanBaru.innerHTML.includes('Memuat ucapan') || outputUcapanBaru.innerHTML.includes('Belum ada ucapan')) {
                outputUcapanBaru.innerHTML = '';
            }

            if (isNew) {
                // Jika ini data baru dari POST, tambahkan di Paling Atas (prepend)
                outputUcapanBaru.prepend(div); 
            } else {
                // Jika ini data lama dari Load Awal, tambahkan di Paling Bawah (append)
                outputUcapanBaru.appendChild(div);
            }
        }

        // --- FUNGSI LOADING COUNT (Hadir/Tidak Hadir) ---
        async function loadInitialCounts() {
            try {
                const response = await fetch('{{ route("kehadiran.counts") }}?t=' + new Date().getTime());
                if (!response.ok) throw new Error('Response network not ok');
                
                const counts = await response.json();
                
                countHadirElement.textContent = counts.hadir;
                countTidakHadirElement.textContent = counts.tidak_hadir;
            } catch (error) {
                console.error("Gagal mengambil hitungan awal:", error);
                countHadirElement.textContent = '-';
                countTidakHadirElement.textContent = '-';
            }
        }
        
        // --- FUNGSI LOADING SEMUA UCAPAN (SOLUSI MASALAH RELOAD) ---
        async function loadInitialUcapan() {
            outputUcapanBaru.innerHTML = '<p class="text-gray-500 italic font-Jost">Memuat ucapan...</p>';

            try {
                // Memanggil route Laravel untuk mengambil semua data ucapan
                const response = await fetch('{{ route("kehadiran.index") }}?t=' + new Date().getTime());
                if (!response.ok) throw new Error('Response network not ok');

                const dataUcapan = await response.json(); 
                
                // Bersihkan dulu container sebelum mengisi
                outputUcapanBaru.innerHTML = '';

                if (dataUcapan && dataUcapan.length > 0) {
                    // Render setiap ucapan yang didapat dari database
                    // isNew = false agar data di-append ke bawah (urutan lama)
                    dataUcapan.forEach(data => {
                        renderUcapan(data, false); 
                    });
                } else {
                    // Tampilkan pesan jika tidak ada data
                    outputUcapanBaru.innerHTML = '<p class="text-gray-500 italic font-Jost">Belum ada ucapan yang masuk.</p>';
                }
            } catch (error) {
                console.error("Gagal memuat daftar ucapan:", error);
                // Tambahkan pesan error yang lebih jelas di UI jika gagal
                outputUcapanBaru.innerHTML = '<p class="text-red-500 italic font-Jost">Gagal memuat ucapan. (Cek koneksi/log server)</p>';
            }
        }

        // --- PANGGILAN AWAL: SOLUSI AGAR DATA TIDAK HILANG SAAT RELOAD ---
        loadInitialCounts();
        loadInitialUcapan(); 


        // --- FUNGSI MENANGANI SUBMIT FORM ---
        formKehadiran.addEventListener('submit', async function(event) {
            event.preventDefault(); 

            btnKirim.disabled = true;
            btnKirim.textContent = 'Mengirim...';

            const formData = new FormData(formKehadiran);
            const data = Object.fromEntries(formData.entries()); 

            // 1. Kirim Data ke Laravel API
            try {
                const response = await fetch('{{ route("kehadiran.store") }}', { 
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': getCsrfToken(), 
                    },
                    body: JSON.stringify(data), 
                });

                if (!response.ok) {
                    const errorResult = await response.json();
                    // Menggunakan alert() sementara sebelum diubah ke modal kustom
                    alert('Gagal: ' + (errorResult.messages ? Object.values(errorResult.messages)[0][0] : errorResult.message || 'Terjadi kesalahan server.'));
                    return; 
                }
                
                const result = await response.json();

                if (result.success) {
                    
                    // 2. Tampilkan Ucapan Baru di paling atas (PREPEND)
                    renderUcapan(result.data, true);

                    // *** SOLUSI MASALAH COUNTS: Tambahkan jeda 1500ms (1.5 detik) ***
                    // Memberikan waktu Supabase untuk memperbarui hitungannya
                    setTimeout(() => {
                        loadInitialCounts();
                    }, 2500);
 

                    // 3. Reset Input
                    inputNama.value = '';
                    inputUcapan.value = '';
                    // selectKehadiran.value = 'Hadir'; // Reset ke default

                } else {
                    alert('Gagal: ' + (result.messages ? Object.values(result.messages)[0][0] : result.message));
                }

            } catch (error) {
                alert('Terjadi kesalahan koneksi. Pastikan aplikasi berjalan dan koneksi internet stabil.');
                console.error('Error Koneksi:', error);
            } finally {
                btnKirim.disabled = false;
                btnKirim.textContent = 'Kirim';
            }
        });

        // Logika tombol hadiah (copy rekening/alamat)
        const tombolHadiah = document.getElementById('tombol-hadiah');
        const tersembunyi = document.getElementById('tersembunyi');

        if(tombolHadiah) {
            tombolHadiah.addEventListener('click', function() {
                if (tersembunyi.classList.contains('buka')) {
                    tersembunyi.classList.remove('buka');
                    tombolHadiah.textContent = 'Kirim Hadiah';
                } else {
                    tersembunyi.classList.add('buka');
                    tombolHadiah.textContent = 'Tutup';
                }
            });
        }
    });
</script>
@endsection