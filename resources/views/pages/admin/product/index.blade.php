@extends('layouts.app')

@section('title')
    Product
@endsection

@section('content')
    <div class="flex flex-row justify-between items-center mb-4">
        <div class="">
            <div class="flex flex-row gap-4 text-[#707EAE]">
                <a href="/admin/dashboard">Dashboard</a>
                <div>/</div>
                <div>Product</div>
            </div>
            <div class=" font-semibold text-primary text-4xl">Product</div>
        </div>
        <div class="w-full flex flex-row justify-end">
            <a href="{{ route('product.create') }}" class="py-2 px-6 rounded-md bg-primary text-white">Add Product</a>
        </div>
    </div>
    <div class="bg-white p-8 rounded-md text-gray-500">
        <div class="pt-4">
            <table id="productTable" class="w-full">
                <thead class="text-left">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">
                            No</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-2/12">
                            Foto</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-3/12">
                            Nama</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-3/12">
                            Resi</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-3/12">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable({
                processing: true,
                ajax: "{{ route('productData') }}",
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'photo',
                        name: 'photo',
                        render: function(data, type, row, meta) {
                            return '<img src="{{ url('storage') }}/' + data +
                                '" alt="Product Image" class="w-full object-cover">';
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'resi',
                        name: 'resi',
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row, meta) {
                            let bgColor = ''; // Default empty color
                            if (data === 'Pengemasan') {
                                bgColor = 'bg-yellow-500'; // Warna kuning untuk pengemasan
                            } else if (data === 'Dalam Pengiriman') {
                                bgColor = 'bg-blue-500'; // Warna biru untuk dalam pengiriman
                            } else if (data === 'Telah Sampai') {
                                bgColor = 'bg-green-500'; // Warna hijau untuk telah sampai
                            }

                            return `<span class="px-3 py-1 rounded-md text-white ${bgColor}">${data}</span>`;
                        }
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            let editUrl = '{{ route('product.edit', ':id') }}';
                            let deleteUrl = '{{ route('product.destroy', ':id') }}';
                            editUrl = editUrl.replace(':id', data);
                            deleteUrl = deleteUrl.replace(':id', data);
                            return '<div class="flex">' +
                                '<a href="' + editUrl +
                                '" class="bg-yellow-500 px-3 text-sm py-1 rounded-md text-white mr-2" data-id="' +
                                data + '">Edit</a>' +
                                '<form action="' + deleteUrl +
                                '" method="POST" class="d-inline delete-form">' +
                                '@csrf' +
                                '@method('DELETE')' +
                                '<button class="bg-red-500 text-white px-3 text-sm py-1 rounded-md delete-button mr-2" type="button">Delete</button>' +
                                '</form>' +
                                '</div>';
                        }
                    },
                ]
            });

            $(document).on('click', '.delete-button', function(e) {
                e.preventDefault();
                let form = $(this).closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Apakah kamu ingin menghapus Product?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        })

        @if (session('toast_success'))
            Swal.fire({
                icon: 'success',
                title: '{{ session('toast_success') }}',
                showConfirmButton: false,
                timer: 2000 // 1 second
            });
        @endif
    </script>
@endpush
