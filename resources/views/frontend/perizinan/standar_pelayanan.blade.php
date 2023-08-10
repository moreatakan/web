
@extends('frontend/layouts/main')
    
@section('content')
    
<div class="space-medium mt20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="row">

                    {{-- <div class="container1">
                        @foreach ($seluruhkategori as $kategori)
                            <button style="width: 100%"  type="button" class="tombol">{{ $kategori->namakategori }}
                            </button>
                                <div class="container2">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Layanan</th>
                                        <th scope="col">Persyaratan</th>
                                        <th scope="col">SP</th>
                                        <th scope="col">Forumulir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>SP</td>
                                        <td>Formulir</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                        @endforeach
                    </div> --}}
                
                    
                </div>
            </div>


            @include('frontend.layouts.partials.sidebar')


        </div>
    </div>
</div>
    

    <script>

        let container1 = document.querySelector('.container1');
        let isCliked = true;

        container1.addEventListener('click',function(e){
            if(isCliked){
                e.target.nextElementSibling.style.display = 'block';
                isCliked = false;
            }else{
                e.target.nextElementSibling.style.display = 'none';
                isCliked = true;
            }
            

            
        });

    </script>
@endsection



