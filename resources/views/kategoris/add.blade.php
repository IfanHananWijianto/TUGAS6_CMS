@extends('layout')
@section('konten')

<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add Kategori</h2>

                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('/kategoris/index')}}" method="POST">
                            @csrf
                            <div class="mb-3 mt-4">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" class="form-control " id="exampleInputEmail1" name="nama" placeholder="-">
                            </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
