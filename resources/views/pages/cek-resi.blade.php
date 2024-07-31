@extends('layouts.user')

@section('title')
    Resi &mdash; Cek Resi Anda
@endsection

@section('content')
<div class="section sec-cta overlay" style="background-image: url('images/gambar3.jpg')">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Masukkan Nomor Resi Anda!</h1>
                <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Cek nomor resi anda disini!</p>
            </div>
        </div>
    </div>
</div>
<div class="container" data-aos="fade-up">
    <form action="#">
    <div class="row align-items-center justify-content-center text-center pt-2">
        <div class="input-container">
            <div class="flex">
            <input type="text" placeholder="Masukkan Nomor Resi" >
            <button type="button">Cek</button>
            </div>
        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
