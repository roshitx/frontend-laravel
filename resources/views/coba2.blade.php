@extends('layouts.master')

@section('content')
    <div class="mt-5">
        <h1 class="text-warning">Halaman Kedua</h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAEHhqMIbjhzMXUDovPR9i9utDBcMRACBpxg&s" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOGSLLsC1LwvtwWxvUO25SdOqw7hYJcXJrPw&s" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://png.pngtree.com/background/20230525/original/pngtree-painting-of-a-mountain-scene-showing-a-lake-and-mountains-picture-image_2735610.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
@endsection
