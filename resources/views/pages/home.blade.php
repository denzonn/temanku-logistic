@extends('layouts.user')

@section('title')
    Temanku Logistik &mdash; Pengiriman Barang & Kendaraan
@endsection

@section('content')
    <div class="hero overlay">
        <img src="images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5">
                <div class="col-lg-6 text-center text-lg-start pe-lg-5">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Pengiriman Barang dan Kendaraan Mulai Rp.3.500/Kg
                    </h1>
                    <p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Solusi terbaik pengiriman Anda!</p>
                    <div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://wa.me/message/VCWHU6KIILNPF1" class="btn btn-outline-white-reverse me-4">Hubungi
                            Segera</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="img-wrap">
                        <img src="images/gambar1.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="images/gambar4.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="mb-5">
                        <h2 class="text-black h4">Visi & Misi</h2>
                    </div>
                    <div class="d-flex mb-3 service-alt">
                        <div>
                            <span class="bi-wallet-fill me-4"></span>
                        </div>
                        <div>
                            <h3>Visi</h3>
                            <p>Menjadi ekspedisi yang memberikan Solusi dan Kemudahan untuk konsumen</p>
                            <p>Menjadi mitra usaha yang baik dengan pelaku UMKM dengan menghadirkan ekspedisi dengan Harga
                                Terjangkau</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 service-alt">
                        <div>
                            <span class="bi-pie-chart-fill me-4"></span>
                        </div>
                        <div>
                            <h3>Misi</h3>
                            <p>Membuka dan menciptakan lapangan kerja</p>
                            <p>Memberikan manfaat untuk para pekerja dan juga konsumen, dengan layanan yang Prima dan Harga
                                yang Terjangkau</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-bag-check-fill"></span>
                        <div>
                            <h3>Pembayaran Mudah</h3>
                            <p>Pembayaran dapat dilakukan saat pembuatan resi atau setelah barang berangkat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-wallet-fill"></span>
                        <div>
                            <h3>Free Packing</h3>
                            <p>Konsumen tidak dikenakan biaya tambahan untuk pengemasan barang dan kendaraan yang akan
                                dikirim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-pie-chart-fill"></span>
                        <div>
                            <h3>Tracking</h3>
                            <p>Pemantauan tracking barang dan kendaraan melalui website resmi Temanku Logistik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('images/proper_temanku.png') }}" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-lg-5 pe-lg-5">
                    <div class="mb-5">
                        <h2 class="text-black h4">Profil Perusahaan</h2>
                    </div>
                    <div class="d-flex mb-3 service-alt">
                        <div>
                        </div>
                        <div>
                            <p>Temanku Logistik Indonesia merupakan jasa pengiriman barang, kendaraan dan alat berat
                                keseluruh nusantara dengan pelayanan prima yang ditunjang SDM dan unit operasional yang
                                memadai. Serta menjalin beberapa cabang di seluruh Nusantara, dengan layanan via Laut, Darat
                                dan Udara. Siap menjalin kerjasama perusahaan dan vendor dengan tempo tertentu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="section sec-services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                    <h2 class="heading text-primary">Service</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up">

                    <div class="service text-center">
                        <span class="bi-cash-coin"></span>
                        <div>
                            <h3>Harga Terjangkau</h3>
                            <p class="mb-4">Harga terjangkau dan terbaik untuk kebutuhan konsumen.</p>
                            <p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service text-center">
                        <span class="bi-chat-text"></span>
                        <div>
                            <h3>Pelayanan Terbaik</h3>
                            <p class="mb-4">Menjalin pelayanan terbaik untuk konsumen dan komunikasi yang tetap terjalin.
                            </p>
                            <p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service text-center">
                        <span class="bi-gear"></span>
                        <div>
                            <h3>Evaluasi</h3>
                            <p class="mb-4">Menerima masukan atau saran dari konsumen yang menjadi suatu keutamaan kami.
                            </p>
                            <p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service text-center">
                        <span class="bi-layers"></span>
                        <div>
                            <h3>Handling & Door to Door Service</h3>
                            <p class="mb-4">Siap mejalin kerjasama dan pengantaran pengiriman sampai tujuan.</p>
                            <p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section sec-cta overlay" style="background-image: url('images/gambar3.jpg')">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="heading">Mau tanya min?</h2>
                    <p>Tanyakan kebutuhan pengiriman Anda melalui kontak yang tersedia.</p>
                </div>
                <div class="col-lg-5 text-end" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://wa.me/message/VCWHU6KIILNPF1" class="btn btn-outline-white-reverse">Hubungi
                        Segera</a>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-portfolio bg-light pb-5	">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center ">
                    <h2 class="heading text-primary mb-3" data-aos="fade-up" data-aos-delay="0">Pengiriman Kami</h2>
                    <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Kepercayaan dan kepuasan konsumen adalah
                        keberhasilan kami.</p>

                    <div id="post-slider-nav" data-aos="fade-up" data-aos-delay="200">
                        <button class="btn btn-primary py-2" class="prev" data-controls="prev">Back</button>
                        <button class="btn btn-primary py-2" class="next" data-controls="next">Next</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="post-slider-wrap" data-aos="fade-up" data-aos-delay="300">
            <div id="post-slider" class="post-slider">
                <div class="item">
                    <a href="case-study.html" class="card d-block">
                        <img src="{{ asset('images/closing1.png') }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengiriman Barang & Kendaraan</h5>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="case-study.html" class="card">
                        <img src="{{ asset('images/closing2.png') }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengiriman Skincare & Kosmetik</h5>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="case-study.html" class="card">
                        <img src="{{ asset('images/closing3.png') }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Pindahan Rumah/Tugas</h5>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="case-study.html" class="card">
                        <img src="{{ asset('images/closing4.png') }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengiriman Motor</h5>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="case-study.html" class="card">
                        <img src="{{ asset('images/closing5.png') }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Pengiriman Mobil</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonial bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="heading text-primary">Testimoni</h2>
                </div>

            </div>


            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider" id="testimonial-slider">
                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('images/img-4.jpg')">

                            </div>
                            <div class="text">
                                <blockquote>
                                    <p>Memiliki banyak jangkauan dan siap handling kendaraan sampai ketujuan dan spesifik
                                        dalam meemriksa kendaraan.</p>
                                </blockquote>
                                <div class="author">
                                    <strong class="d-block text-black">Haspo Joni</strong>
                                    <span>Pengiriman Mobil Medan-Manado</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('images/img-3.jpg')">

                            </div>
                            <div class="text">
                                <blockquote>
                                    <p>Siap berkomunikasi hingga larut malam dan memberi informasi jelas kepada konsumen.
                                    </p>
                                </blockquote>
                                <div class="author">
                                    <strong class="d-block text-black">Wahyudi</strong>
                                    <span>Pengiriman Barang Makassar-Jakarta</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('images/img-2.jpg')">

                            </div>
                            <div class="text">
                                <blockquote>
                                    <p>Menjaga barang aman dan amanah sampai ke tujuan</p>
                                </blockquote>
                                <div class="author">
                                    <strong class="d-block text-black">Muh Abi</strong>
                                    <span>Pengiriman Motor dan Barang Jakarta-Makassar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
