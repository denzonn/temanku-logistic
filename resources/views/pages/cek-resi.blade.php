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
        <form action="{{ route('cek-resi.check') }}" method="POST">
            @csrf
            <div class="row align-items-center justify-content-center text-center py-5">
                <div class="input-container">
                    <div class="flex">
                        <input type="text" name="resi" placeholder="Masukkan Nomor Resi" value="{{ old('resi') }}">
                        <button type="submit">Cek</button>
                    </div>
                </div>
            </div>
        </form>
        @if (isset($product))
            @if ($product)
                <div class="row align-items-center justify-content-center text-center pt-2 pb-5">
                    <div class="col-lg-6">
                        <h2>Detail Pengiriman</h2>
                        <p><strong>Nama:</strong> {{ $product->name }}</p>
                        <p><strong>Nomor Resi:</strong> {{ $product->resi }}</p>
                        <p><strong>Status:</strong> {{ $product->status }}</p>
                        <p><img src="{{ asset('storage/' . $product->photo) }}" alt="Photo" width="200"></p>
                    </div>
                </div>
            @endif
        @else
            <div class="row align-items-center justify-content-center text-center pt-2 pb-5">
                <div class="col-lg-6">
                    <h2>Nomor resi tidak ditemukan</h2>
                </div>
            </div>
        @endif
    </div>
@endsection
