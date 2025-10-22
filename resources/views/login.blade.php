@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <div class="card mx-auto" style="width: 400px;">
        <div class="card-body">
            <h4 class="mb-3">Login</h4>
            <form action="{{ route('doLogin') }}" method="GET">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="btn w-100" style="background-color:#ff6fa5;color:white;">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
