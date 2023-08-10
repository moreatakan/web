@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Create New Posts </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                @csrf                
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Post</label>
                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ old('judul') }}" required autofocus>
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input name="slug" type="text" class="form-control" id="slug" value="{{ old('slug') }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    @error('body')
                        <p class="text-danger">
                            {{ $message }}
                        </p>    
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                </div>


                

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
    
        <script>
            const judul = document.querySelector('#judul');
            const slug = document.querySelector('#slug');


            judul.addEventListener('change', function(){
                fetch('/dashboard/posts/slug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });

            document.addEventListener('trix-file-accept',function(e){
                e.preventDefault();
            })
        </script>

        
    @endsection
    