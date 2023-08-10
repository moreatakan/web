
@extends('frontend/layouts/main')
    
@section('content')
    
    <div class="space-medium mt20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-0">
                    <div class="container">
                        <div class="row">
                            
                                
                                
                                    @if ($posts->count())
                        
                                    <div class="card mb-3">
                                        <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->image }}">
                                        
                                        <div class="card-body text-center">
                                            <a href="/home/{{ $posts[0]->slug }}">
                                                <h3 class="card-title">{{ $posts[0]->judul }}</h3>
                                            </a>
                                            
                                            <p>
                                                <small class="text-muted">
                                                By: <a href="" class="text-decoration-none text-primary">Rahmat Hidayah</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
                                            </p>                                

                                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                                            <a href="/home/detailpost/{{ $posts[0]->slug }}" class="btn btn-dark p-1">Read more</a>
                                        </div>
                                    </div>
                                    @else

                                    <p class="text-center fs-4">No post found</p>

                                    @endif

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="card-group">
                                                
                                                @foreach ($posts->skip(1) as $p)
                                                <div class=" col-md-4 mb-3">
                                                    <div class="card">
                                                        <img src="https://source.unsplash.com/640x426/random" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $p->judul }}</h5>
                                                            <p>
                                                                <small class="text-muted">
                                                                By: <a href="" class="text-decoration-none text-primary">{{ $p->user->name }}</a></small>
                                                            </p>
                                                            <p class="card-text">{{ $p->excerpt }}</p>
                                                            <a href="/home/detailpost/{{ $p->slug }}" class="btn btn-dark p-1">Read More</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted">{{ $p->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>

                                

                            
                        </div>
                    </div>
                </div>


                @include('frontend.layouts.partials.sidebar')

            </div>
        </div>
    </div>
    
@endsection



