@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4 d-flex justify-content-between">
            <h3> Jenis Izin dan Non Izin </h3>
            <a href="/dashboard/izin/create" class="btn btn-primary">Buat Jenis Izin Baru</a>

        </div>
        
        @if (session()->has('success'))
            <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
        <div class="table-responsive col-lg-10">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Ijin</th>
                        <th scope="col">Action</th>
                    </tr>
            </thead>

                <tbody>
                
                    @foreach ($izins as $izin)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>    
                            <td>{{ $izin->namaizin }}</td>
                            <td>
                                <a href="/dashboard/posts/{{ $izin->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                <a href="/dashboard/posts/{{ $izin->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                
                                <form action="/dashboard/izin/{{ $izin->slug }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                            {{-- <form action="/dashboard/slider/{{ $izin->id }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure')">Hapus</button>
                            </form>     --}}
                            
                        </tr>
                            
                    @endforeach 
                    
                </tbody>
            </table>
        </div>


        {{ $izins->links('pagination::bootstrap-5') }}
    @endsection