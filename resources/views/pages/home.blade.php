@extends('layouts.user')

@section('title')
    Temanku Logistik &mdash; Pengiriman Barang & Kendaraan
@endsection

@section('content')
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-3" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <h1 class="active"><a href="index.html" class="text-white">Temanku Logistik</a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">Tentang Kami</a></li>
                                <li class="has-children">
                                    <a href="services.html">Pelayanan</a>
                                    <ul class="dropdown">
                                        <li><a href="industries.html">Cargo Darat</a></li>
                                        <li><a href="industries.html">Cargo Laut</a></li>
                                        <li><a href="industries.html">Cargo Udara</a></li>
                                        <li><a href="industries.html">Gudang</a></li>
                                    </ul>
                                </li>
                                <li><a href="industries.html">Kerjasama</a></li>
                                <li><a href="blog.html">Closing</a></li>
                                <li><a href="contact.html">Kontak Kami</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                class="icon-menu h3"></span></a></div>

                </div>

            </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                    <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Menjadi Solusi
                        Pengiriman Barang & Kendaraan</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center no-gutters align-items-stretch overlap-section">
            <div class="col-md-4">
                <div class="feature-1 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-dollar"></span>
                    </div>
                    <h2 class="my-4 heading">Best Prices</h2>
                    <p>Harga Terjangkau dan Terjamin Murah. Menjadi pilihan pas mitra kami.</p>
                    <h2>Mulai Rp.3.500/Kg</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="free-quote bg-dark h-100">
                    <h2 class="my-4 heading  text-center">Cek Resi Disini:</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="fq_name">No. Resi</label>
                            <input type="text" class="form-control btn-block" id="fq_name" name="fq_name"
                                placeholder="Enter Name">
                            <a href="resitemanku.html"></a>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Cek">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-3 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-phone"></span>
                    </div>
                    <h2 class="my-4 heading">24/7 Support</h2>
                    <p>Layanan maksimal hingga 24 Jam melalui Admin</p>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="mb-0 text-primary">Pelayanan Pengirimian</h2>
                        <p class="color-black-opacity-5"></p>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                            <div>
                                <h3>Via Udara</h3>
                                <p>Pengiriman via udara adalah proses pengangkutan barang atau penumpang melalui jalur
                                    udara menggunakan pesawat terbang.</p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span
                                    class="text-primary flaticon-sea-ship-with-containers"></span></div>
                            <div>
                                <h3>Via Laut</h3>
                                <p>Pengiriman via laut adalah proses pengiriman barang dan kendaraan melalui jalur laut
                                    menggunakan kapal kargo atau kapal kontainer.</p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span>
                            </div>
                            <div>
                                <h3>Via Darat</h3>
                                <p>Pengiriman via darat adalah proses pengangkutan barang atau penumpang melalui jalan
                                    raya atau rel kereta api. </p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="site-section block-13">
            <!-- <div class="container"></div> -->

            <div class="owl-carousel nonloop-block-13">
                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_1.jpg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Gudang</h3>
                            <p class="px-5">Memiliki fasilitas gudang yang digunakan untuk menyimpan sebelum
                                dikirimkan ke tujuan akhir.</p>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_2.jpg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Airport</h3>
                            <p class="px-5">Bandara untuk ekspedisi atau kargo adalah fasilitas yang didedikasikan
                                untuk menangani pengiriman barang.</p>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_3.jpg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Transportasi/Armada</h3>
                            <p class="px-5">Mobil pickup adalah salah satu kendaraan yang kami gunakan dalam
                                melakukan pengantaran barang ekspedisi.</p>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Kapal</h3>
                            <p class="px-5">Kapal adalah sumber utama dalam pengiriman barang dan kendaraan konsumen
                                sampai ketujuan.</p>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_5.jpg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Kontainer</h3>
                            <p class="px-5">Kontainer yang digunakan TANTO </p>
                        </div>
                    </a>
                </div>


            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Pelayanan</h2>
                        <p class="color-black-opacity-5">Temanku Logistik</p>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                            <div>
                                <h3>Air Air Freight</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span
                                    class="text-primary flaticon-sea-ship-with-containers"></span></div>
                            <div>
                                <h3>Ocean Freight</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span>
                            </div>
                            <div>
                                <h3>Ground Shipping</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
                            <div>
                                <h3>Warehousing</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
                            <div>
                                <h3>Storage</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
                            <div>
                                <h3>Delivery Van</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay inner-page-cover"
            style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                        <a href="https://vimeo.com/channels/staffpicks/93951774"
                            class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
                        <h2 class="text-white font-weight-light mb-5 h1">View Our Services By Watching This Short Video
                        </h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom">
            <div class="container">

                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Testimonials</h2>
                    </div>
                </div>

                <div class="slide-one-item home-slider owl-carousel">
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="{{ asset('images/person_3.jpg') }}" alt="Image" class="img-fluid mb-3">
                                <p>John Smith</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                    reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                    illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="{{ asset('images/person_2.jpg') }}" alt="Image" class="img-fluid mb-3">
                                <p>Christine Aguilar</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                    reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                    illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="{{ asset('images/person_4.jpg') }}" alt="Image" class="img-fluid mb-3">
                                <p>Robert Spears</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                    reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                    illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="{{ asset('images/person_5.jpg') }}" alt="Image" class="img-fluid mb-3">
                                <p>Bruce Rogers</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                    reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                    illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;
                                </p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Our Blog</h2>
                        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
                    </div>
                </div>
                <div class="row mb-3 align-items-stretch">
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="{{ asset('images/blog_1.jpg') }}" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
                            <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18,
                                2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="{{ asset('images/blog_2.jpg') }}" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
                            <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18,
                                2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-top">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="mb-5 text-black">Try Our Services</h2>
                        <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Get
                                Started</a></p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Features</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent"
                                    placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button"
                                        id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <a class='blantershow-chat' href='javascript:void' title='Show Chat'><i
                                class='fab fa-whatsapp'></i>How can I help you?</a>
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
@endsection
