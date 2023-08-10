
@extends('frontend/layouts/main')
    
@section('content')
    
    <div class="space-medium mt20">
        <div class="container">
            <div class="col-md-8">

                <h1 class="mb-3">   
                    {{ $post->judul }}
                </h1>
                <p>
                    <small class="text-muted">
                    By: <a href="" class="text-decoration-none text-primary">{{ $post->user->name }}</a>
                    {{ $post->created_at }}
                </small>
                </p>
                <a href="/" class="btn btn-success">
                    <i class="bibi-arrow-left-short"></i ><< Kembali
                </a>
                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="700px" height="400px" class="img-fluid mt-3">
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
    
@endsection



