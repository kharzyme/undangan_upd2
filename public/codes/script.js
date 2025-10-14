document.addEventListener('contextmenu', event => event.preventDefault());
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('open-button').addEventListener('click', function() {
    const cover = document.getElementById('cover');
    const main = document.getElementById('main'); 

    audio.play();
    console.log(audio);
            
    cover.classList.add('transform', '-translate-y-full'); 
    main.classList.remove('overflow-hidden');
            
    setTimeout(function() {
        cover.style.display = 'none';
        animasi();
    }, 2000);
});

function animasi() {
    const judul1 = document.getElementById('judul1');
    const judul2 = document.getElementById('judul2');
    const judul3 = document.getElementById('judul3');

    const delay = 500;

    judul1.classList.toggle('opacity-100')
    judul1.classList.add('animate__animated', 'animate__fadeInDown', 'animate__slow')

    setTimeout(() => {
        judul2.classList.toggle('opacity-100')
        judul2.classList.add('animate__animated', 'animate__zoomIn', 'animate__slow')
    }, 1 * delay); 

    setTimeout(() => {
        judul3.classList.toggle('opacity-100')
        judul3.classList.add('animate__animated', 'animate__fadeInUp', 'animate__slow')
    }, 2 * delay);  
}

// CARAOUSEL OPACITY
const imageLayers1 = document.querySelectorAll('#slideshow-container > div');
    
if (imageLayers1.length >= 2) {
    let currentIndex1 = 0;
    const duration1 = 4000;

    function switchImage1() {
        imageLayers1[currentIndex1].classList.remove('opacity-100');
        imageLayers1[currentIndex1].classList.add('opacity-0');

        currentIndex1 = (currentIndex1 + 1) % imageLayers1.length;

            imageLayers1[currentIndex1].classList.remove('opacity-0');
            imageLayers1[currentIndex1].classList.add('opacity-100');
        }
    setInterval(switchImage1, duration1);
    }

const imageLayers2 = document.querySelectorAll('#slideshow-container2 > div');
    
if (imageLayers2.length >= 2) {
    let currentIndex2 = 0;
    const duration2 = 4000; 

    function switchImage2() {
        imageLayers2[currentIndex2].classList.remove('opacity-100');
        imageLayers2[currentIndex2].classList.add('opacity-0');

        currentIndex2 = (currentIndex2 + 1) % imageLayers2.length;

        imageLayers2[currentIndex2].classList.remove('opacity-0');
        imageLayers2[currentIndex2].classList.add('opacity-100');
        }
    setInterval(switchImage2, duration2);
    }

// COUNTDOWN
    var countDownDate = new Date("Sep 24, 2029 10:00:00").getTime();

    var x = setInterval(function() {

    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    days = (days < 10) ? "0" + days : days;
    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
    clearInterval(x);

    document.getElementById("days").innerHTML = "00";
    document.getElementById("hours").innerHTML = "00";
    document.getElementById("minutes").innerHTML = "00";
    document.getElementById("seconds").innerHTML = "00";

    document.querySelector('.countdown-container').innerHTML = "KADALUARSA!";
  }
}, 1000);

// REKENING
const tombol = document.getElementById('pemicu');
const tersembunyi = document.getElementById('tersembunyi'); // Ganti 'kerangka' menjadi 'tersembunyi'

tombol.addEventListener('click', function() {
    // Toggle class 'buka' pada elemen yang disembunyikan
    const cekHasil = tersembunyi.classList.contains('buka'); 

    if (cekHasil) {
        tersembunyi.classList.remove('buka');
        tombol.textContent = 'Lihat Rekening';
    } else {
        tersembunyi.classList.add('buka');
        tombol.textContent = 'Tutup';
    }
});

// TOMBOL SALIN REKENING 1
document.getElementById('copyButton').addEventListener('click', function() {
    const buttonText = document.getElementById('buttonText');
    const rekening = this.getAttribute('data-rekening');
    
    navigator.clipboard.writeText(rekening).then(() => {
        buttonText.textContent = 'Tersalin!';  

        setTimeout(() => {
            buttonText.textContent = 'Copy Nomor Rekening';
        }, 2000);
    });
});

// TOMBOL SALIN REKENING 2
document.getElementById('copyButton2').addEventListener('click', function() {
    const buttonText2 = document.getElementById('buttonText2');
    const rekening2 = this.getAttribute('data-rekening2');
    
    navigator.clipboard.writeText(rekening2).then(() => {
        buttonText2.textContent = 'Tersalin!';  

        setTimeout(() => {
            buttonText2.textContent = 'Copy Nomor Rekening';
        }, 2000);
    });
});

// TOMBOL SALIN ALAMAT
document.getElementById('copyButton3').addEventListener('click', function() {
    const buttonText3 = document.getElementById('buttonText3');
    const alamat = this.getAttribute('alamat');
    
    navigator.clipboard.writeText(alamat).then(() => {
        buttonText3.textContent = 'Tersalin!';  

        setTimeout(() => {
            buttonText3.textContent = 'Copy Alamat';
        }, 2000);
    });
});
});