@extends('layouts.user')

@section('title')
    Resi &mdash; Cek Resi Anda
@endsection

@section('content')
    <div class="hero overlay inner-page">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Masukkan Nomor Resi Anda!</h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Cek nomor resi anda disini!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <form action="#">
            <div class="row">
                <div class="input-container">
                    <input type="text" placeholder="Masukkan teks...">
                    <button type="button">Kirim</button>
                </div>
            </div>
        </form>
    </div>

@endsection
