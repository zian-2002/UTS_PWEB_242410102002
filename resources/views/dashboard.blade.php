@extends('layouts.app')

@section('content')
<div class="text-center">
    <h3>Selamat Datang, {{ $username ?? 'Pengguna' }}</h3>
    <p>Selamat datang di ruang cantikmu.</p>
    <p>Temukan pengalaman baru dalam merawat kulitmu</p>
    <p>Kami menghadirkan rangkaian produk berkualitas untuk membantu kulit tampak segar, lembut, dan bersinar setiap hari.</p>
    <p>Karena merawat diri adalah bentuk terbaik dari rasa syukur dan percaya diri</p>
</div>
@endsection
