@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            <h3> Data Slider </h3>
            <a href="/dashboard/slider/create" class="btn btn-primary">Create New Slider</a>

        </div>
        
        @if (session()->has('success'))
            <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Status</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $no=1; ?>
                @foreach ($slides as $slide)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>    
                        <td>{{ $slide->judul_slide }}</td>
                        <td>{{ $slide->status == 1 ? 'Publish' : 'Draft' }}</td>
                        <td><img style="max-height:200px;" src="{{ asset('storage/' . $slide->image) }}" alt=""></td>
                        <td><a href="/dashboard/slider/{{ $slide->id }}/edit" class="btn btn-warning">Edit</a> 
                        <form action="/dashboard/slider/{{ $slide->id }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure')">Hapus</button>
                        </form>    
                        
                    </tr>
                        
                @endforeach
                
            </tbody>
        </table>
        {{ $slides->links('pagination::bootstrap-5') }}
    @endsection