@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Buat Jenis Izin Baru </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/izin" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="namaizin" class="form-label">Jenis Izin</label>
                    <input name="namaizin" type="text" class="form-control @error('namaizin') is-invalid @enderror" id="namaizin" required>
                    
                    @error('namaizin')
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

                <div class="mb-3">
                    <label for="categoryizin_id" class="form-label">Pilih Kategori Izin</label>
                    <select name="categoryizin_id" class="form-control" id="categoryizin_id">
                        
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->namakategori }}</option>    
                        @endforeach
                        
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
        <script>
            const namaizin = document.querySelector('#namaizin');
            const slug = document.querySelector('#slug');


            namaizin.addEventListener('change', function(){
                fetch('/dashboard/izin/slug?namaizin=' + namaizin.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script>
        
            
    @endsection