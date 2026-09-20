@extends('layouts.app')

<!-- Đổ dữ liệu vào phần nội dung chính -->
@section('content')
<div class="container mt-4">
    <h2 class="text-center">Nội Thất Nổi Bật</h2>
    <div class="row">
        <!-- Vòng lặp lấy dữ liệu từ Controller -->
        @foreach($san_pham as $sp)
        <div class="col-md-3">
            <div class="card mb-3">
                <img src="{{ asset('storage/' . $sp->hinh_anh) }}" class="card-img-top">
                <div class="card-body">
                    <h5>{{ $sp->ten_san_pham }}</h5>
                    <p class="text-danger">{{ number_format($sp->gia_ban) }} VNĐ</p>
                    <a href="/san-pham/{{ $sp->id }}" class="btn btn-primary">Mua ngay</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection