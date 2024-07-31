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
                        <input type="text" name="resi" placeholder="Masukkan Nomor Resi" value="{{ old('resi') }}"
                            required>
                        <button type="submit">Cek</button>
                    </div>
                </div>
            </div>
        </form>
        @if (request()->isMethod('post'))
            @if (isset($product))
                @if ($product)
                    <div class="row align-items-start justify-content-center text-center pt-2 pb-5 ">
                        <h2>Detail Pengiriman</h2>
                        <div class="col-lg-12 d-lg-block d-none mb-3 mt-lg-4">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p><strong>Nama</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Nomor Resi</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Status</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Rute Pengiriman</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Jumlah</strong></p>
                                </div>
                                <div class="col-lg-2">
                                    <p><strong>Keterangan</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p>{{ $product->name }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->resi }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->status }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->asal_pengiriman }} - {{ $product->tujuan_pengiriman }}</p>
                                </div>
                                <div class="col-lg-2">
                                    <p>{{ $product->jumlah }}</p>
                                </div>
                                <div class="col-lg-2">
                                    {!! $product->keterangan !!}
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{ asset('storage/' . $product->photo) }}" alt="Photo" width="200">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-lg-none d-block mb-3 mt-lg-4">
                            <div class="col-lg-6 col-md-12 mb-3">
                                <p><strong>Nama:</strong> {{ $product->name }}</p>
                                <p><strong>Nomor Resi:</strong> {{ $product->resi }}</p>
                                <p><strong>Status:</strong> {{ $product->status }}</p>
                                <p><strong>Asal Pengiriman:</strong> {{ $product->asal_pengiriman }}</p>
                                <p><strong>Jumlah:</strong> {{ $product->jumlah }}</p>
                                <p><strong>Tujuan Pengiriman:</strong> {{ $product->tujuan_pengiriman }}</p>
                                <p><strong>Keterangan:</strong> {!! $product->keterangan !!}</p>
                                <p><img src="{{ asset('storage/' . $product->photo) }}" alt="Photo" width="200"></p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row align-items-center justify-content-center text-center pt-2 pb-5">
                        <div class="col-lg-6">
                            <h2>Nomor resi tidak ditemukan</h2>
                        </div>
                    </div>
                @endif
            @endif
        @endif
    </div>
@endsection
