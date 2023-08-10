@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Standar Pelayanan </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/sp" method="POST" enctype="multipart/form-data">
                @csrf 
                
                <div class="mb-3">
                    <label for="izin_id" class="form-label">Pilih Jenis Izin</label>
                    <select name="izin_id" id="izin" class="form-control" id="namaizin">
                        
                        {{-- <option value="">jenis izin</option> --}}
                        @foreach ($seluruhizin as $izin)
                            <option value="{{ $izin->id }}">{{ $izin->namaizin }}</option>    
                        @endforeach
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori Izin</label>
                    <input name="category_id" id="category" type="text" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                    
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                    
                </div>

                <div class="mb-3">
                    <label for="persyaratan" class="form-label">Persyaratan Izin</label>
                    @error('persyaratan')
                        <p class="text-danger">
                            {{ $message }}
                        </p>    
                    @enderror
                    <input id="persyaratan" type="hidden" name="persyaratan" value="{{ old('persyaratan') }}">
                    <trix-editor input="persyaratan"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File Standar Pelayanan</label>
                    <input class="form-control @error('file') is-invalid @enderror" type="file" id="namafile" name="file">
                    
                    @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>    
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
    
        
    @endsection

    @push('scripts')
    <script>
        let izin = document.getElementById('izin')
        let input_category = document.getElementById('category')
        izin.addEventListener('change', async (e) => {
            const response = await fetch(`/api/get-category/${e.target.value}`);
            const category = await response.json();            
            input_category.value = await category.namakategori
        })
    </script>
    @endpush
    