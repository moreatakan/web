
@extends('frontend/layouts/main')
    
    @section('content')
    
    
    <div class=" space-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                    
                    @foreach ($posts as $p)
                        <article class="mb-5 border-bottom pb-4">

                            <h2><a href="/home/{{ $p->slug }}" class="text-decoration-none">{{ $p->judul }}</a></h2>
                        
                            <p>By. <a href="" class="text-decoration-none">Rahmat Hidayah</a></p>
                            <a href="/home/{{ $p->slug }}"></a>
                            {{ $p->excerpt }}
                        
                        </article>
                    @endforeach
                    </div>
                </div>
            
            {{-- Bagian Sidebar --}}
            
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    
                        <h3 class="widget-title text-center">Kepala Dinas</h3>
                    
                </div>
            </div>

            {{-- Akhir Sidebar --}}

            </div>
        </div>
    </div>
    @endsection



