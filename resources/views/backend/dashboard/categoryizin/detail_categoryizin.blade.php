@extends('backend/dashboard/layouts/main')

    @section('content')
        
        @if (session()->has('success'))
            <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
        
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-12">
                    

                    <a href="/dashboard/categoryizin" class="btn btn-success"><i class="bi bi-arrow-left-short"></i >Kembali ke kategori izin</a>
                    <a href="/dashboard/categoryizin/{{ $kategoriizin->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i>Edit</a>
                    
                    <form action="/dashboard/categoryizin/{{ $kategoriizin->slug }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i>Hapus</button>
                    </form>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 fs-3">Nama Kategori :</div>
                        <div class="col-md-6 fs-3">{{ $kategoriizin->namakategori }}</div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 fs-3">Slug Kategori :</div>
                        <div class="col-md-6 fs-3">{{ $kategoriizin->namakategori }}</div>
                    </div>

                </div>
            </div>
        </div>
        
    @endsection