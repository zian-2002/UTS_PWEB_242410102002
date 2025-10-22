@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow-lg border-0 rounded-4" style="width: 28rem; background-color: #fff5f8;">
        <div class="card-body text-center">
            <h3 class="card-title mb-4 fw-bold text-dark">Profile Pengguna</h3>
            <hr style="border-top: 2px solid #ff6fa5; width: 60%; margin: 10px auto;">
            <div class="text-start px-4 mt-3">
                <p><strong> Nama Pengguna:</strong> {{ $profile['nama'] }}</p>
                <p><strong> Umur:</strong> {{ $profile['umur'] }} tahun</p>
                <p><strong> Status:</strong> {{ $profile['status'] }}</p>
                <p><strong> Akun:</strong> {{ $profile['akun'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
