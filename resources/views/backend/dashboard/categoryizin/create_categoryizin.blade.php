@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Buat Kategori Izin Baru </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/categoryizin" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="namakategori" class="form-label">Kategori Izin</label>
                    <input name="namakategori" type="text" class="form-control @error('namakategori') is-invalid @enderror" id="namakategori" required>
                    
                    @error('namakategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" >
                    
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
        <script>
            const namakategori = document.querySelector('#namakategori');
            const slug = document.querySelector('#slug');


            namakategori.addEventListener('change', function(){
                fetch('/dashboard/categoryizin/slug?namakategori=' + namakategori.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script>
            
    @endsection