@extends('layouts.main')

@section('content')
    {{-- HEADLINE SECTION --}}
    <div class="full-height d-flex justify-content-center align-items-center" style="flex-direction: column">
        <div class="container row justify-content-center align-items-center p-3" style="height:100%;width:100%">
            <div class="col-sm-12 col-lg-6 text-center">
                <img src="/img/DK.png" alt="" style="width: 150px" class="">
                <div class="headline-title-1">
                    Satu-satunya Dawet Premium Tanpa Santan
                </div>
                <div class="headline-subtitle-1">
                    Dawet Kemayu menghadirkan cita rasa tradisional
                    dengan nuansa premium dalam minuman dawet
                    yang dapat dinikmati oleh semua kalangan
                </div>
                <div class="headline-actions mt-4">
                    <a href="https://wa.link/87ivtw" target="_blank" class="btn btn-dark-green shadow">
                        Cobain Dawet Kemayu
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 my-5 my-5">
                {{-- <img src="/img/headline-image-square.jpg" alt="" style="width: 100%;border-radius:2rem"> --}}
                <div id="headlineImages" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/img/headline-image-square.jpg" alt="" style="width: 100%;border-radius:2rem">
                      </div>
                      <div class="carousel-item">
                        <img src="/img/small.jpg" alt="" style="width: 100%;border-radius:2rem">
                      </div>
                      <a class="carousel-control-prev" href="#headlineImages" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#headlineImages" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="container row justify-content-center align-items-center d-xs-none d-lg-flex">     
            <mark> Scroll ke bawah untuk lihat keunggulan produk kami </mark>
        </div>
    </div>
    {{-- Bedanya dawet kemayu dengan dawet lain --}}
    <div class="full-height d-flex justify-content-center align-items-center bg-light-green" style="flex-direction: column">
        <div class="container row justify-content-center align-items-center" style="height:100%;width:100%;padding-top:2rem;padding-bottom-2rem">
            <div class="col-md-6">
                <img src="/img/tripple-bottle.png" alt="" style="width: 100%">
            </div>
            <div class="col-md-6 mt-3 mb-5">
                <div class="headline-title-2">
                    Bedanya Dawet Kemayu dengan dawet biasanya
                </div>
                <ul class="pt-3 benefit-list">
                    <li>
                        <div class="list-title">
                            Dawet Lebih Kenyal
                        </div>
                        <p>
                            Kalau biasanya kenyal-kenyal cuma ada di Boba, sekarang
                            kamu bisa minum dawet dengan sensasi yang sama!
                        </p>
                    </li>
                    <li>
                        <div class="list-title">
                            Tanpa Santan
                        </div>
                        <p>
                            Lebih gurih dan sehat dengan FIBER CREME
                        </p>
                    </li>
                    <li>
                        <div class="list-title">
                            Kaya Serat
                        </div>
                        <p>
                            Jadi bisa banget untuk melancarkan pencernaanmu
                        </p>
                    </li>
                    <li>
                        <div class="list-title">
                            Rendah Lemak dan Gula
                        </div>
                        <p>
                            kaya nutrisi dan aman untuk dikonsumsi siapa saja!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mx-0 bg-light-green" style="width: 100%;margin-top:-4rem">
        <div class="col-sm-12 col-lg-8">
            <div class="card shadow" style="border-radius: 0.75rem;border:none">
                <div class="row justify-content-center align-items-center card-body">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="/img/fc.jpg" alt="" style="width: 50%">
                    </div>
                    <div class="col-md-6" style="padding:2rem">
                        <div class="list-title-2 py-3">
                            Fiber Creme
                        </div>
                        <p>
                            Krimer pertama di Indonesia yang kaya serat sehingga mudah
                            diserap usus besar, bebas gluten dan laktosa sehingga aman
                            untuk penderita diabetes.
                            <br><br>
                            Karena rasanya yang gurih dan enak, Fiber Creme juga cocok
                            digunakan sebagai pengganti santan dan susu. Dengan
                            menggunakan Fiber Creme, Dawet Kemayu bisa tetap
                            memberikan sensasi gurih sekaligus mengurangi risiko
                            kesehatan yang biasanya disebabkan oleh konsumsi santan.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Dawet Kemayu Botol --}}
    <div class="full-height d-flex justify-content-center align-items-center bg-light-green mb-3">
        <div class="container row justify-content-center align-items-center" style="width: 100%">
            <div class="col-md-6 py-3">
                <img src="/img/tripple-bottle.png" alt="" style="width: 100%">
            </div>
            <div class="col-md-6 px-3">
                <div class="headline-title-2 my-3">
                    Dawet Kemayu Bottle Edition
                </div>
                <p>
                    Buat kamu yang banyak aktivitas dan tetep pengen jalanin gaya hidup sehat, Dawet Kemayu Bottle Edition cocok banget buat nemenin kamu sehari-hari! Selain bisa ningkatin mood.
                    <br><br>
                    Dawet Kemayu juga bisa ngisi lagi energi kamu dengan
                    minuman kaya nutrisi ini! Jadi walaupun sibuk, kamu ga asal isi perut!
                </p>
                <table class="table my-3">
                   <tbody>
                       <tr>
                           <td>
                               UKURAN
                           </td>
                           <td>
                               250ml
                           </td>
                       </tr>
                       <tr>
                           <td>
                               BERAT
                           </td>
                           <td>
                               350gr
                           </td>
                       </tr>
                   </tbody>
                </table>
                <a href="https://wa.me/%2B628112659800?text=Halo%20Kak%2C%20saya%20mau%20pesan%20Dawet%20Kemayu%20Botol%20nih.%0A%0ANama%3A%0AAlamat%3A%0AJumlah%3A%0A%0ATerima%20Kasih." class="btn btn-dark-green btn-block" target="_blank">Pesan Sekarang</a>
            </div>  
        </div>
    </div>
    {{-- PRODUCTS --}}
    <div class="full-height d-flex justify-content-center align-items-center" style="flex-direction: column">
        <div class="container row justify-content-center align-items-center">
            <div class="col-sm-12 col-lg-10 text-center my-3">
                <div class="headline-title-1 my-3">
                    Dawet Kemayu Family Pack
                </div>
                <p class="headline-subtitle-1">
                    Pilihan pas buat melengkapi kebersamaan kamu dan keluarga. Bisa juga loh kamu
                    kirimkan ke orang tersayang karena packagingnya yang cantik dan aman dikirim kemana aja.
                    <br><br>
                    Yuk lengkapi acara kumpul keluarga/sahabat kamu dengan
                    Dawet Kemayu Family Pack! Yang isinya banyak, emang lebih puas!
                </p>
            </div>
        </div>
        <div class="container row justify-content-center align-items-center text-center mt-4">
            <div class="col-md-4">
                <div class="headline-title-2 my-4">Mini</div>
                <div class="card shadow dk-card">
                    <div class="card-body">
                        <img src="/img/small.jpg" alt="" style="width:100%;border-radius:0.5rem" class="mb-3">
                        <p>Porsi 3-4 Orang</p>
                        <p style="font-size:1.5rem;color:#5F605F;font-weight:bold">Rp 32.000</p>
                        <a href="https://wa.me/%2B628112659800?text=Halo%20Kak%2C%20saya%20mau%20pesan%20Dawet%20Kemayu%20Family%20Pack%20Mini%2C%20nih!%0A%0ANama%3A%0AAlamat%3A%0AJumlah%3A%0A%0ATerima%20Kasih!" class="btn btn-block btn-dark-green-2" target="_blank">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="headline-title-2 my-4">Reguler</div>
                <div class="card shadow dk-card">
                    <div class="card-body">
                        <img src="/img/medium.jpg" alt="" style="width:100%;border-radius:0.5rem" class="mb-3">
                        <p>Porsi 4-6 Orang</p>
                        <p style="font-size:1.5rem;color:#5F605F;font-weight:bold">Rp 48.000</p>
                        <a href="https://wa.me/%2B628112659800?text=Halo%20Kak%2C%20saya%20mau%20pesan%20Dawet%20Kemayu%20Family%20Pack%20Reguler%2C%20nih!%0A%0ANama%3A%0AAlamat%3A%0AJumlah%3A%0A%0ATerima%20Kasih!" class="btn btn-block btn-dark-green-2" target="_blank">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="headline-title-2 my-4">Extra</div>
                <div class="card shadow dk-card">
                    <div class="card-body">
                        <img src="/img/extra.jpg" alt="" style="width:100%;border-radius:0.5rem" class="mb-3">
                        <p>Porsi 4-6 Orang Extra 400gr Dawet</p>
                        <p style="font-size:1.5rem;color:#5F605F;font-weight:bold">Rp 58.000</p>
                        <a href="https://wa.me/%2B628112659800?text=Halo%20Kak%2C%20saya%20mau%20pesan%20Dawet%20Kemayu%20Family%20Pack%20Extra%20nih!%0A%0ANama%3A%0AAlamat%3A%0AJumlah%3A%0A%0ATerima%20Kasih!" class="btn btn-block btn-dark-green-2" target="_blank">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- IKLAN EDISI SPESIAL EVENT --}}
    <div class="full-height d-flex justify-content-center align-items-center">
        <div class="container row justify-content-center align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="headline-title-1">
                    Dawet Kemayu juga bisa loh kamu
                    pesan untuk acara spesial kamu
                </div>
                <div class="headline-subtitle-1">
                    Jadi, kemasannya didesain spesial sesuai dengan
                    keinginanmu menyesuaikan kebutuhan acara
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 my-3">
                <img src="/img/special-event.jpeg" alt="" style="width: 100%;border-radius:10px">
            </div>
        </div>
    </div>
    {{-- TESTIMONI PELANGGAN --}}
    <div class="d-flex justify-content-center align-items-center">
        <div class="container row justify-content-center align-items-center">
            <div class="col-sm-12 col-lg-12 text-center my-3">
                <div class="headline-title-2">Kata Mereka Soal Dawet Kemayu</div>
            </div>
            <div class="col-sm-12 col-lg-12 d-flex justify-content-center">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 300px">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/testi-1.jpg" alt="First slide" style="width: 100px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/testi-2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/testi-3.jpeg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/testi-4.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
    {{-- LAST CALL TO ACTION --}}
    <div class="d-flex justify-content-center align-items-center py-5">
        <div class="container row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <div class="headline-title-1 my-3">
                    Pesan sekarang dan nikmati sensasi segar sehatnya DAWET TANPA SANTAN!
                </div>
                <a href="https://wa.link/87ivtw" target="_blank" class="btn btn-dark-green">
                    Klik untuk Memesan Dawet Kemayu
                </a>
            </div>
        </div>
    </div>
    {{-- FOOTER --}}
    <div class="footer d-flex justify-content-center align-items-center">
        <div class="container row justify-content-center align-items-center">
            <div class="col-md-3">
                <img src="/img/DK-white.png" alt="" style="width:150px">
            </div>
            <div class="col-md-3">
                <p class="footer-title">
                    Temukan Dawet Kemayu di Media Sosial
                </p>
                <ul class="footer-menu-list">
                    <li>
                        <a href="">Instagram</a>
                    </li>
                    <li>
                        <a href="">Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="footer-title">
                    Layanan Dawet Kemayu Lainnya
                </p>
                <ul class="footer-menu-list">
                    <li>
                        <a href="">Layanan Pelanggan</a>
                    </li>
                    <li>
                        <a href="">Informasi Kemitraan</a>
                    </li>
                    <li>
                        <a href="">Menjadi Reseller</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection