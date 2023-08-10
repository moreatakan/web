
@extends('frontend/layouts/main')
    
@section('content')
    
<div class="space-medium mt20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="row">

                    @foreach ($seluruhizin as $izin)
                        <div class="col-md-3">
                            <div class="container-overlay mb-3 p-0 text-wrap">
                                <span class="badge text-bg-secondary mt-1">{{ $loop->iteration }}</span>  
                                    <div class="konten-overlay">
                                        <p>{{ $izin->namaizin }}</p>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>


            @include('frontend.layouts.partials.sidebar')


        </div>
    </div>
</div>
    
@endsection



