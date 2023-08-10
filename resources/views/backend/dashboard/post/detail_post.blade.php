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
                <div class="col-lg-8">
                    <h1 class="mb-3">
                        {{ $post->judul }}
                    </h1>

                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i >Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i>Edit</a>
                    
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i>Delete</button>
                    </form>
                    
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" width="700px" height="400px" class="img-fluid mt-3">

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                </div>
            </div>
        </div>
        
    @endsection