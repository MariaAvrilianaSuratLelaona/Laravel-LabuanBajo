@extends('layouts.app')

@section('title')
Tambah Category | Admin Labuan Bajo
@endsection

@section('content')
<h3>Input Destinasi</h3>
<div class="form-login">
    <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="categories">Destinasi</label>
    <input class="input" type="text" name="destinasi" id="destinasi" placeholder="Destinasi" value="{{ old('destinasi') }}" />
    @error('destinasi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Price</label>
    <input class="input" type="text" name="price" id="price" placeholder="Price" value="{{ old('price') }}" />
    @error('price')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Description">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
        Simpan
    </button>
    </form>
</div>
@endsection
