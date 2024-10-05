@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="mb-4">
        <div class="flex flex-row gap-4 text-[#707EAE]">
            <div>Page</div>
            <div>/</div>
            <div>Dashboard</div>
        </div>
        <div class="font-semibold text-primary text-4xl">Dashboard</div>
    </div>
    <div class="mt-6 text-xl mb-4 font-semibold text-gray-500">
        Status Pengiriman
    </div>
    @foreach ($statusCounts as $status)
        <div class="bg-white p-8 rounded-md text-gray-500 w-fit">
            <div class="text-2xl font-semibold">{{ $status->status }}</div>
            <div class="text-6xl font-semibold">{{ $status->total }} <span class="text-lg font-medium">data</span>
            </div>
        </div>
    @endforeach
@endsection
