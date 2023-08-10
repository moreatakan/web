@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Edit Slider </h3>

        </div>
        <div class="col-md-8">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/dashboard/slider/{{ $data->id }}" method="POST">
                @csrf
                @method ('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="judul_slide" type="text" class="form-control" id="title" value="{{ $data->judul_slide }}" >
                </div>
                {{-- <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" name="link" id="description">
                </div> --}}
                {{-- <div class="mb-3">
                    <label for="description" class="form-label">Gambar Slide</label>
                    <input type="file" class="form-control" name="gambar_slide" id="description">
                </div> --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        
            
    @endsection