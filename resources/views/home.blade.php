@extends('layouts.main')

@section('container')

    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Penelitian - LPPM - Universitas Atma Jaya Yogyakarta</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      </div>
    </div>

    <div class="input-group rounded mb-5 w-25">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="bi bi-search"></i>
        </span>
    </div>

    <div data-aos="fade-up" class="card mb-10 animate__animated animate__fadeIn" style="width: 18rem;">
    <img class="card-img-top" src="https://i.picsum.photos/id/428/536/354.jpg?hmac=39bUBapsMK9rz_caQW-lmClLVRgFZiS23LkHtRFdHXw" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Judul Penelitian</h5>
        <p class="card-text">Deskripsi singkat mengenai penelitian. Lorem ipsum. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
        <a href="/">read more...</a>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="fb.com">www.penelitian.com</a></li>
        <li class="list-group-item">Drs. Doni Dwi Irawa</li>
    </ul>
    </div>

    
        @endsection