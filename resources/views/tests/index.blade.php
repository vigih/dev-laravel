@extends('layouts.blank')

@section('title', 'Halaman Tests')

@section('content')
<div class="tests-container">
    <x-button>Simpan</x-button>
    <x-button variant="danger">Hapus</x-button>
    <x-button variant="success">Simpan</x-button>
    <x-button variant="outline" class="relative ripple-effect">Simpan</x-button>
</div>

<div class="flex w-full items-center">
    <span class="material-icons-outlined">account_circle</span>
    <span class="material-icons-outlined">map</span>
</div>

<div class="block">
    <p class="poppins-normal">Lorem Ipsum</p>
    <p class="poppins-medium">Lorem Ipsum</p>
    <p class="poppins-bold">Lorem Ipsum</p>
</div>

<div class="block mt-4">
    <x-textfield name="email" label="Alamat Email" type="email" icon="email" color="secondary" />
    <x-textfield name="location_on" label="Location" icon="location_on" color="secondary" />
</div>

<div class="flex items-center mt-4">
    <x-checkbox-outline name="agree" label="Saya setuju" color="success" :checked="true" />
    <x-checkbox-outline name="dropoff" label="Dropoff" color="secondary" />
    <x-checkbox-outline name="Layanan" label="Layanan" color="info" />
    <x-checkbox-outline name="lepas" label="Lepas Kunci" color="primary" />
</div>

<div class="flex items-center mt-4">
    <x-checkbox-switch name="option-tamu" label="Customer Tamu" color="primary" />
    <x-checkbox-switch name="all-data" label="Semua Data" color="secondary" />
    <x-checkbox-switch name="gender" label="Gender" color="info" />
</div>

<div class="radio-inline">
    <x-radio name="iditem_mobil" value="3" label="Mobil Dalam" :checked="true" toggle="collapse" target="#mobil--dalam" />
    <x-radio name="iditem_mobil" value="4" label="Mobil Luar" toggle="collapse" target="#mobil--luar" />
    <x-radio name="iditem_mobil" value="5" label="Mobil Rekanan" toggle="collapse" target="#mobil--rekanan" />
</div>

@push('scripts')
@vite('resources/js/route/tests/tests.js')
@endpush

@endsection