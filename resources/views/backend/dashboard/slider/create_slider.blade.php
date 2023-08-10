@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Create New Slider </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/slider" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="judul_slide" type="text" class="form-control @error('judul_slide') is-invalid @enderror" id="title" >
                    
                    @error('judul_slide')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    
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

                <div class="mb-3">
                    <label for="image" class="form-label">Slider Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
            
    @endsection