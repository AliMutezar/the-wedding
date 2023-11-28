<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ ucwords($title) }}
    </title>
    <meta property="og:description" content="23 Desember 2023">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/img/TS.jpg') }}" type="image/x-icon">
  </head>

  <body class="justify-content-center mx-auto">
    <!-- Slider Photo -->
    <div class="position-relative d-block d-sm-none">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2500">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/LuangVatasis-01803.jpg') }}" class="d-block w-100 photo-berdua" alt="photo-berdua">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="position-absolute top-0 start-50 translate-middle-x w-100">
                        <h1 class="text-white text-center text-white wedding-title">
                            <span>{{ $wedding_title }}</span> 
                            <br> 
                               <span class="mempelai">{{ ucwords($pasangan_title) }}</span>
                            <br> 
                            <span>{{ $date }}</span> 
                        </h1>
                        <div class="text-center text-white invitation">
                            <h6>{{ $to }}</h6>
                            <h4 class="fw-bold" id="tamu1"></h4>
                            <a href="#salam" class="btn btn-light invitation-link w-50 opacity-75" onClick="enabledScroll()">Lihat Undangan</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/LuangVatasis-01617.jpg') }}" class="d-block w-100 photo-berdua" alt="photo-berdua">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="position-absolute top-0 start-50 translate-middle-x w-100">
                        <h1 class="text-white text-center  text-white wedding-title">
                            <span>{{ $wedding_title }}</span>  
                            <br> <span class="mempelai">{{ ucwords($pasangan_title) }}</span> <br> 
                            <span>{{ $date }}</span> 
                        </h1>
                        <div class="text-center text-white invitation">
                            <h6>{{ $to }}</h6>
                            <h4 class="fw-bold" id="tamu2"></h4>
                            <a href="#salam" class="btn btn-light invitation-link w-50 opacity-75" onClick="enabledScroll()">Lihat Undangan</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/LuangVatasis-01850.jpg') }}" class="d-block w-100 photo-berdua" alt="photo-berdua">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="position-absolute top-0 start-50 translate-middle-x w-100">
                        <h1 class="text-white text-center  text-white wedding-title">
                            <span>{{ $wedding_title }}</span>  
                            <br> <span class="mempelai">{{ ucwords($pasangan_title) }}</span> <br> 
                            <span>{{ $date }}</span> 
                        </h1>
                        <div class="text-center text-white invitation">
                            <h6>{{ $to }}</h6>
                            <h4 class="fw-bold" id="tamu3"></h4>
                            <a href="#salam" class="btn btn-light invitation-link w-50 opacity-75" onClick="enabledScroll()">Lihat Undangan</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/LuangVatasis-01608.jpg') }}" class="d-block w-100 photo-berdua" alt="photo-berdua">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="position-absolute top-0 start-50 translate-middle-x w-100">
                        <h1 class="text-white text-center text-white wedding-title">
                            <span>{{ $wedding_title }}</span>  
                            <br> <span class="mempelai">{{ ucwords($pasangan_title) }}</span> <br> 
                            <span>{{ $date }}</span> 
                        </h1>
                        <div class="text-center text-white invitation">
                            <h6>{{ $to }}</h6>
                            <h4 class="fw-bold" id="tamu4"></h4>
                            <a href="#salam" class="btn btn-light invitation-link btn-md w-50 opacity-75" onClick="enabledScroll()">Lihat Undangan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-block d-sm-none" id="salam">
        <div class="row">
            <div class="col-sm-12 p-0">
                <div class="position-relative">
                    <img src="{{ asset('asset/img/Flower Down.png') }}" class="img-fluid w-100" alt="flower">
                    <div class="text-center salam" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-anchor-placement="top-bottom">
                        <p>Assalamu’alaikum <br> Warahmatullahi Wabarakatuh</p>
                    </div>
                    <p class="text-center salam-desc" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500">
                        Dengan segala kerendahan hati dan dengan <br> ucapan syukur atas karunia Allah SWT, <br> kami hendak menyampaikan <br> kabar bahagia  pernikahan kami :
                    </p>
                </div>
            </div>

            <!-- Putra & Putri -->
            <div class="col-sm-12 position-relative">
                <div style="z-index: 1;">
                    <div class="mx-auto text-center w-100 margin-cpw" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200">
                        <img src="{{ asset('asset/img/Sahira Salsabila.png') }}" class="img-fluid photo-mempelai" alt="photo_sahira_salsabila">
                    </div>

                    <p class="text-playfair text-center fs-5 fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">Sahira Salsabila</p>
                    <p class="text-playfair fs-6 text-center putra-putri" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">
                        Putri dari Bapak Suwardi & Ibu Faridah
                    </p>

                    <div class="mx-auto text-center w-100 margin-cpp" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200">
                        <img src="{{ asset('asset/img/Ahmad Ali Mutezar.png') }}" class="img-fluid photo-mempelai" alt="photo_ahmad_ali_mutezar">
                    </div>
                    
                    <p class="text-playfair text-center fs-5 fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">Ahmad Ali Mutezar</p>
                    <p class="text-playfair fs-6 text-center putra-putri" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">
                        Putra dari Alm. Bapak Tolibin & Ibu Fitriah
                    </p>
                </div>
                <img src="{{ asset('asset/img/BG Watersplash.png') }}" class="p-0 start-0 position-absolute img-fluid w-100 bg-watersplash" alt="bg_watersplash">
            </div>

            <!-- Akad & Resepsi -->
            <div class="col-sm-12 text-center position-relative akad">
                <div class="text-playfair">
                    <img src="{{ asset('asset/img/Vector_Ring.png') }}" class="mb-3 img-fluid wedding-ring" alt="wedding_ring" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">
                    <p class="fw-bold font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Akad Nikah</p>
                    <p class="font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Sabtu, <br> 23 Desember 2023 <br> 15:30 - 16:30 WIB</p>
                    <hr class="mx-auto my-2" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">
                    <p class="fw-bold font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Masjid Assahara</p>
                    <p class="font-14" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Komplek Wali Kota Jakarta Barat <br> Jl. Kembangan Raya, Kec Kembangan</p>
                    <a type="button" href="https://maps.app.goo.gl/ht8UFkr3VfzKgU3HA" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300" class="btn btn-lg w-75 btn-map opacity-75 fw-bold">Open Map</a>
                </div>
                <div class="text-playfair resepsi">
                    <img src="{{ asset('asset/img/glass.png') }}" data-aos="fade-up" data-aos-duration="1500"class="mb-3 img-fluid wedding-glass" alt="wedding_ring" data-aos-offset="300">
                    <p class="fw-bold font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Resepsi</p>
                    <p class="font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Sabtu, <br> 23 Desember 2023 <br> 19:00 - 21:00 WIB</p>
                    <hr class="mx-auto my-2" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">
                    <p class="fw-bold font-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Aula Gedung</p>
                    <p class="font-14"  data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Komplek Wali Kota Jakarta Barat <br> Jl. Kembangan Raya, Kec Kembangan</p>
                    <a type="button" href="https://maps.app.goo.gl/ht8UFkr3VfzKgU3HA"  data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300" class="btn btn-lg w-75 btn-map opacity-75 fw-bold">Open Map</a>
                </div>
            </div>

            <!-- countdown and Surah -->
            <div class="col-sm-12 text-center position-relative mt-5 p-0">
                <h1 class="text-playfair fw-bold count-down" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">Countdown to Our <br> Wedding Day</h1>
                <div id="waktu-mundur" style="z-index: 1;" data-aos="fade-down" data-aos-duration="1500" data-aos-offset="300" class="fs-3 text-playfair p-5 d-flex d-flex justify-content-around">
                    <div class="countdown-item">
                        <span id="hari"></span><br>Hari
                    </div>
                    <div class="countdown-item mr-3">
                        <span id="jam"></span><br>Jam
                    </div>
                    <div class="countdown-item mr-3">
                        <span id="menit"></span><br>Menit
                    </div>
                    <div class="countdown-item mr-3">
                        <span id="detik"></span><br>Detik
                    </div>
                </div>
                <div class="position-relative">
                    <img src="{{ asset('asset/img/Flower Up.png') }}" class="img-fluid w-100 flower-up" alt="flower" style="z-index: -2;">
                </div>
                <div class="surah">
                    <img src="{{ asset('asset/img/ar-rum 21.png') }}" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500" class="img-fluid mb-3" alt="surah_ar_rum_ayat_21">
                    <p class="text-playfair-italic font-14" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">“ Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir ”</p>
                    <p class="ayat fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">(QS Ar - Rum : 21)</p>
                </div>
                <img src="{{ asset('asset/img/removebg-flower 3.png') }}" data-aos="fade-down" data-aos-offset="200" data-aos-delay="500" data-aos-duration="2000" class="img-fluid small-flower-1" alt="small_flower">
                <div class="surah">
                    <img src="{{ asset('asset/img/HR Al Baihaqi dalam Syuabul Iman.png') }}" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500" class="img-fluid w-100 mb-3" alt="hr_baihaqi">
                    <p class="text-playfair-italic font-14" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">“ jika seseorang menikah, maka ia telah menyempurnakan separuh agamanya. Karenanya, bertakwalah pada Allah pada separuh yang lainnya. “</p>
                    <p class="hadits fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="200" data-aos-delay="500">(HR. Al Baihaqi dalam Syu’abul Iman.  Dishahihkan oleh <br> Syaikh Al Albani dalam As Silsilah Ash Shahihah no. 625)</p>
                </div>
            </div>

            <!-- Love Story & Wedding Gift -->
            <div class="col-sm-12 p-0 position-relative">
                <div style="z-index: 1;">
                    <img src="{{ asset('asset/img/Flower Down.png') }}" class="img-fluid w-100" alt="flower">
                    <div class="position-absolute start-50 translate-middle-x text-center w-100" style="z-index: 1;">
                        <h1 class="love-title" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Love Story</h1>
                        <div>
                            <h3 class="position-absolute mx-auto w-100 together-title fw-semibold text-playfair-black" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Awal Pertemuan</h3>
                            <img src="{{ asset('asset/img/awal pertemuan.png') }}" class="img-fluid w-100" alt="photo kita smp" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="300">
                            <p class="text-playfair-black position-absolute mx-auto w-100 together-description font-16" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Dipertemukan di <br> masa putih biru</p>
                        </div>

                        <div>
                            <h3 class="text-playfair-black together-title-2 fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">10 Tahun Bersama</h3>
                            <img src="{{ asset('asset/img/Mask group Sepeda.png') }}" class="img-fluid img-together my-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500" data-aos-offset="300" alt="photo bareng naik sepeda">
                            <p class="text-playfair-black position-absolute mx-auto w-100 font-16" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">Telah dilewati</p>
                        </div>

                        <div class>
                            <h3 class="text-playfair-black together-title-3 fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="300">Tetap Bersama</h3>
                            <img src="{{ asset('asset/img/Mask group wisuda.png') }}" class="img-fluid img-together my-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="300" alt="photo bareng wisuda">
                            <p class="text-playfair-black position-absolute mx-auto w-100 font-16" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Hingga dewasa<br> mudah dijalani</p>
                        </div>

                        <div class>
                            <h3 class="text-playfair-black together-title-4 fw-bold mb-3" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Untuk meraih mimpi</h3>
                            <img src="{{ asset('asset/img/Mask group nikah.png') }}" class="img-fluid img-together" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="300" alt="photo bareng wisuda">
                            <p class="text-playfair-black position-absolute mx-auto w-100 font-16" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300">Menjaga jodoh sendiri</p>
                        </div>

                        <img src="{{ asset('asset/img/removebg-flower 2.png') }}" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="300" class="img-fluid small-flower-2" alt="small_flower">
                        <div class="surah">
                            <h1 class="title-carrate-32 fw-bold mb-4" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">Do'a untuk <br> Kedua Mempelai</h1>
                            <img src="{{ asset('asset/img/HR Abu Daud.png') }}" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350" class="img-fluid w-100 mb-3" alt="hr_baihaqi">
                            <p class="text-playfair-italic font-14" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">“ Semoga Allah memberkahimu ketika bahagia dan ketika susah dan mengumpulkan kalian berdua dalam kebaikan. “</p>
                            <p class="ayat fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">(HR. Abu Daud, no. 2130; Tirmidzi, no. 1091)</p>
                        </div>
                        <img src="{{ asset('asset/img/removebg-flower 5.png') }}" data-aos="fade-down" data-aos-duration="3000" data-aos-offset="350" class="img-fluid small-flower-3" alt="small_flower">
                        <div class="mt-5">
                            <h1 class="title-carrate-32 fw-bold" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">Wedding Gift</h1>
                            <p class="text-playfair-black font-14" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">
                                Restu dan kedatangan kamu <br> di hari pernikahan, sudah cukup bagi kami 
                            </p>
                            <p class="text-playfair-black font-14" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="350">
                                Namun jika memberi adalah ungkapan <br> tanda kasih, kamu dapat memberi kado <br> secara cashless
                            </p>
                            
                            <div class="col-12 mt-3">
                                <button class="btn-gift btn-lg btn w-75 p-0 m-0">
                                    <p class="d-inline font-14 text-playfair">Rekening BCA a.n Ahmad Ali Mutezar</p>
                                    <p class="nomor-rek-tezar text-playfair fw-bold">2290315126</p>
                                    <p class="mt-2 salin-rekening-tezar font-14 text-playfair">Salin nomor rekening</p>
                                </button>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn-gift btn-lg btn w-75 p0 m-0">
                                    <p class="d-inline font-14 text-playfair">Rekening BJB a.n Sahira Salsabila</p>
                                    <p class="nomor-rek-sahira text-playfair fw-bold">0124886236100</p>
                                    <p class="mt-2 salin-rekening-sahira font-14 text-playfair">Salin nomor rekening</p>
                                </button>
                            </div>

                            <img src="{{ asset('asset/img/Flower Up.png') }}" class="img-fluid w-100 position-absolute start-50 translate-middle-x flower-up-gift" alt="flower">
                        </div>
                        <div class="closing text-playfair">
                            <p data-aos="fade-down" data-aos-duration="1500" class="font-14">Atas kehadiran dan doa restu <br> Bapak/Ibu/Saudara/i kami ucapkan terima kasih</p>
                            <p data-aos="fade-down" data-aos-duration="1500" class="mt-5 font-14">Kami yang Berbahagia</p>
                            <p data-aos="fade-down" data-aos-duration="1500" class="mempelai">Tezar & Sahira</p>
                            <img src="{{ asset('asset/img/Mask group circle.png') }}" data-aos="fade-down" data-aos-duration="1500" class="img-fluid img-closing" alt="photo_ahmad_ali_mutezar">
                            
                            <h1 class="title-carrate mt-4" data-aos="fade-down" data-aos-duration="2000">Wassalamu’alaikum <br> Warahmatullahi Wabarakatuh</h1>
                            <img src="{{ asset('asset/img/removebg-flower 3.png') }}" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="-200" class="my-3 img-fluid small-flower-4" alt="small_flower">
                            <p data-aos="fade-down" class="font-14" data-aos-duration="2000" data-aos-offset="-200">
                                undangan ini dibuat oleh<br>
                                @ali.mutezar & @sahirasbl<br>
                            </p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('asset/img/BG Watersplash 2.png') }}" class="p-0 start-0 position-absolute img-fluid w-100 bg-watersplash-2" alt="bg_watersplash_2">
            </div>
            
            <div class="audio-icon-wrapper" style="display: none;">
                <audio id="song" loop>
                    <source src="{{ asset('asset/audio/OmarEsa.mp3') }}" type="audio/mp3">
                </audio>
                <!-- <i class="bi bi-pause-circle"></i> -->
            </div>
        </div>
    </div>

    <div class="vh-100 d-flex align-items-center">
        <h1 class="d-none d-md-block d-lg-block d-xl-block d-xxl-none">This invitation wedding is only available on mobile devices</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ url('asset/js/maps.js') }}"></script>
    <script src="{{ url('asset/js/countdown.js') }}"></script>   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <!-- Audio -->
    <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        let isPlaying = false;
        const song = document.querySelector('#song');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function () {
                window.scrollTo(scrollTop, scrollLeft);
            }
            rootElement.style.scrollBehavior = 'auto';
        }

        function enabledScroll() {
            window.onscroll = function () {}
            rootElement.style.scrollBehavior = 'smooth';
            playAudio();
        }

        disableScroll();

        function playAudio() {
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function () {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bi-pause-circle')
                audioIcon.classList.add('bi-play-circle')
            } else {
                song.play();
                audioIcon.classList.add('bi-pause-circle')
                audioIcon.classList.remove('bi-play-circle')
            }

            isPlaying = !isPlaying;
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const nama = urlParams.get('to') || '';
            const pronoun = urlParams.get('p') || '';

            for (let i = 1; i <= 4; i++) {
                const tamuUndangan = document.querySelector(`#tamu${i}`);
                if (tamuUndangan) {
                    tamuUndangan.innerText = `${pronoun} ${nama}`;
                }
            }
        });
    </script>

    <script>
        AOS.init();
    </script>


    {{-- Copied Nomor Rekening --}}
    <script>
        const salinButtonSahira = document.querySelector('.salin-rekening-sahira');
        const nomorRekeningSahira = document.querySelector('.nomor-rek-sahira');

        salinButtonSahira.addEventListener('click', function() {
            event.preventDefault();
            const input = document.createElement('input');
            input.value = nomorRekeningSahira.innerText;

            // tambahkan elemen input ke document
            document.body.appendChild(input);
            input.select();
            input.setSelectionRange(0, 99999);

            // salin teks ke clipboard
            document.execCommand("copy");
            document.body.removeChild(input);

            Swal.fire({
                icon: 'success',
                title: 'Salin Nomor Rekening',
                text: 'Rekening' + ' ' + nomorRekeningSahira.innerText + ' ' + 'a.n Sahira Salsabila Berhasil Disalin',
            });
        });
    </script>

    <script>
        const salinButtonTezar = document.querySelector('.salin-rekening-tezar');
        const nomorRekeningTezar = document.querySelector('.nomor-rek-tezar');

        salinButtonTezar.addEventListener('click', function() {
            event.preventDefault();
            const input = document.createElement('input');
            input.value = nomorRekeningTezar.innerText;

            // tambahkan elemen input ke document
            document.body.appendChild(input);
            input.select();
            input.setSelectionRange(0, 99999);

            // salin teks ke clipboard
            document.execCommand("copy");
            document.body.removeChild(input);

            Swal.fire({
                icon: 'success',
                title: 'Salin Nomor Rekening',
                text: 'Rekening' + ' ' + nomorRekeningTezar.innerText + ' ' + 'a.n Ahmad Ali Mutezar Berhasil Disalin',
            });
        });
    </script>
  </body>
</html>