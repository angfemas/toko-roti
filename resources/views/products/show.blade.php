@extends('layouts.app')

@section('content')
<div class="container fade">
    <h2 class="text-center mb-4">Detail Produk</h2>
    <div class="card shadow-sm">
        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="Produk">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".fade").classList.add("show");
});
</script>

<style>
.fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
}

.fade.show {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endsection