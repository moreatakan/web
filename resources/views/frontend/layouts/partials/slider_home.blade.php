<div class="row">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slider as $slider)
            <div class="carousel-item active">
                <div>
                <img style="width: 100%; height:100%; object-fit:cover;" src="{{ asset('storage/' .$slider->image) }}" class="d-block w-100" alt="{{ $slider->image }}">    
                </div>
            </div>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
