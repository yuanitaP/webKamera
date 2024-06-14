@extends('main')
@section('title', 'Form Ubah Password')
@section('artikel')
    <div class="card-header"></div>
    <div class="card-body">
        @if (session('info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('info') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/updateUser" method="post">
            @csrf
            <div class="form-group">
                <label> Password baru</label>
                <input type="password" name="password_baru" class="form-control" required>
            </div>
            <div class="form-group">
                <label> Konfirmasi Password baru</label>
                <input type="password" name="konfirmasi_password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Update</button>
            </div>
        </form>
    </div>
@endsection
