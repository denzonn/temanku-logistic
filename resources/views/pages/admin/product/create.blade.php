@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
    <div class="mb-4">
        <div class="flex flex-row gap-4 text-[#707EAE]">
            <a href="/admin/dashboard">Dashboard</a>
            <div>/</div>
            <a href="/admin/product">Product</a>
            <div>/</div>
            <div>Create</div>
        </div>
        <div class=" font-semibold text-primary text-4xl">Create Product</div>
    </div>
    <div class="bg-white p-8 rounded-md text-gray-500">
        <div>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="">Resi</label>
                        <input type="text" placeholder="Enter Resi...." name="resi"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" required />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter Name...." name="name"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" required />
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-6">
                    <div class="flex flex-col gap-2">
                        <label for="">Kota Asal Pengiriman</label>
                        <input type="text" placeholder="Enter Kota Asal Pengiriman...." name="asal_pengiriman"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" required />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Kota Tujuan Pengiriman</label>
                        <input type="text" placeholder="Enter Kota Tujuan Pengiriman...." name="tujuan_pengiriman"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" required />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Jumlah Barang</label>
                        <input type="number" placeholder="Enter Jumlah Barang....." name="jumlah"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" required />
                    </div>
                </div>
                <div class="mt-6">
                    <div class="flex flex-col gap-2">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="editor" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mt-6 flex flex-col gap-2">
                        <label for="">Product Photo</label>
                        <input type="file" placeholder="Masukkan Anak ke-" name="photo"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" onchange="previewImages(event)" accept=".jpg, .jpeg, .png" required />
                    </div>
                    <div class="mt-6 flex flex-col gap-2">
                        <label>Photo Review</label>
                        <div id="photo-preview" class="flex flex-wrap gap-2"></div>
                        <span id="no-photo-text" class="text-red-500">No Photo</span>
                    </div>
                </div>

                <button type="submit" class="w-full rounded-md bg-primary mt-8 text-white py-2 text-lg">Create
                    Product</button>
            </form>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        function previewImages(event) {
            const photoPreview = document.getElementById('photo-preview');
            const noPhotoText = document.getElementById('no-photo-text');
            const files = event.target.files;
            photoPreview.innerHTML = '';

            if (files.length > 0) {
                noPhotoText.classList.add('hidden');
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('w-1/2', 'object-cover', 'rounded-md');
                        photoPreview.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            } else {
                noPhotoText.classList.remove('hidden');
            }
        }
    </script>
@endpush
