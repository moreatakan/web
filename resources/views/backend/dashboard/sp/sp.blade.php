@extends('backend/dashboard/layouts/main')

    @section('content')
        @include('backend/dashboard/layouts/welcome_admin')
        <div class="mb-4">
            <h3> Standar Pelayanan </h3>
        </div>
        <div class="mb-4"><a href="/dashboard/sp/create" class="btn btn-primary">Buar Standar Pelayanan Baru</a>
        </div>
        
        @if (session()->has('success'))
            <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Ijin</th>
                        <th scope="col">Persyaratan</th>
                        <th scope="col" class="text-center">Download File</th>
                        <th scope="col">Action</th>
                    </tr>
            </thead>

                <tbody>
                
                    @foreach ($seluruhsp as $sp)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>    
                            <td>{{ $sp->izin->namaizin }}</td>
                            <td>{{ $sp->persyaratan }}</td>
                            <td align="center">
                                <a href="{{ asset('storage/'.$sp->file) }}"><i class="bi bi-file-earmark-text"></i></a>
                            </td>
                            <td>
                                
                                <a href="" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                
                                <form action="/dashboard/sp/{{ $sp->id }}" method="POST" class="d-inline">
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


        {{ $seluruhsp->links('pagination::bootstrap-5') }}
    @endsection