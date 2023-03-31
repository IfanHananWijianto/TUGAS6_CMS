@extends('layout')
@section('konten')

<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Produk</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="{{ url('/product/index')}}" method="POST"  enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control " id="exampleInputEmail1" name="nama" placeholder="nama produk">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" placeholder="deskripsi produk">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="harga">
                        </div>
                        <select class="form-select " aria-label="Default select example" name="id_kategori">
                                <option selected>Pilih Kategori Produk</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                    <div class="invalid-feedback">
                                        Pilih salah satu kategori
                                    </div>
                                    <div class="mt-3"><img src="" id="output" width="100"></div>
                                    <div class="mb-3 mt-4">
                                        <label for="image" class="form-label">Image</label>
                                            <input class="form-control" type="file" name="image" id="formFile" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <br>
                                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
