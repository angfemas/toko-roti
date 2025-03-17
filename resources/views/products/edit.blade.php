@extends('layouts.app')

@section('content')
<div class="container fade">
    <h2 class="text-center mb-4">Edit Produk</h2>
    <div class="card shadow-sm p-4">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Produk</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".fade").classList.add("show");
});
</script>
@endsection