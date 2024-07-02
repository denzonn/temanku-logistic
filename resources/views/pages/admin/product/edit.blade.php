@extends('layouts.app')

@section('title')
    Edit Product
@endsection

@section('content')
    <div class="mb-4">
        <div class="flex flex-row gap-4 text-[#707EAE]">
            <a href="/admin/dashboard">Dashboard</a>
            <div>/</div>
            <a href="/admin/product">Product</a>
            <div>/</div>
            <div>Edit</div>
        </div>
        <div class=" font-semibold text-primary text-4xl">Edit Product</div>
    </div>
    <div class="bg-white p-8 rounded-md text-gray-500">
        <div>
            <form action="{{ route('product.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="">Resi</label>
                        <input type="text" placeholder="Enter Resi...." name="resi"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" value="{{ $data->resi }}" required />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter Name...." name="name"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" value="{{ $data->name }}" required />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Status</label>
                        <select name="status" id="" class="w-full border px-4 py-2 rounded-md bg-transparent">
                            <option value="Pengemasan" {{ $data->status === 'Pengemasan' ? 'selected' : '' }}>Pengemasan</option>
                            <option value="Dalam Pengiriman" {{ $data->status === 'Dalam Pengiriman' ? 'selected' : '' }}>Dalam Pengiriman</option>
                            <option value="Telah Sampai" {{ $data->status === 'Telah Sampai' ? 'selected' : '' }}>Telah Sampai</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mt-6 flex flex-col gap-2">
                        <label for="">Product Photo</label>
                        <input type="file" name="photo"
                            class="w-full border px-4 py-2 rounded-md bg-transparent" onchange="previewImages(event)" accept=".jpg, .jpeg, .png" />
                    </div>
                    <div class="mt-6 flex flex-col gap-2">
                        <label>Photo Review</label>
                        <div id="photo-preview" class="flex flex-wrap gap-2">
                            @if ($data->photo)
                                <img src="{{ asset('storage/' . $data->photo) }}" alt="Product Photo" class="w-1/2 object-cover rounded-md">
                            @else
                                <span id="no-photo-text" class="text-red-500">No Photo</span>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full rounded-md bg-primary mt-8 text-white py-2 text-lg">Update Product</button>
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
                if (noPhotoText) {
                    noPhotoText.classList.add('hidden');
                }
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
                if (noPhotoText) {
                    noPhotoText.classList.remove('hidden');
                }
            }
        }
    </script>
@endpush
