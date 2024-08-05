<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @vite('resources/css/app.css')
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .fakeimg1{
    height: 200px;
    width: 400px
  }

  /* Active button style */
.btn.active {
    background-color: gray;
}

/* Styling untuk card */
.card {
    border-radius: 15px; /* Rounded corners */
    margin: 10px; /* Jarak antar card */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effect */
    position: relative; /* Needed for absolute positioning of rating */
}

/* Hover effect untuk card */
.card:hover {
    transform: scale(1.05); /* Membesar saat hover */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Bayangan saat hover */
}

/* Styling untuk rating dan SVG */
.card-footer {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 10; /* Z-index untuk memastikan di atas gambar */
    background: rgba(255,255,255,0.8); /* Background semi-transparan agar jelas di atas gambar */
    border-radius: 5px; /* Rounded corners untuk background */
    padding: 5px;
}

/* Styling untuk gambar */
.card-img-top {
    border-radius: 15px 15px 0 0; /* Rounded corners untuk bagian atas gambar */
}



  </style>
</head>
<body>

<div class="main-wrapper">
    @include('shared.header')

    <div class="">
        {{-- slide --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           @foreach ($banner as $foto)
           <div class="carousel-inner">
               <div class="carousel-item active">
               <img src="{{ $imageBaseURL }}/original{{ $foto->backdrop_path }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5>{{ $foto->title }}</h5>
                 <p>{{ $foto->overview }}</p>
               </div>
           </div>
           @endforeach
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
        {{-- end slide --}}
    </div>
       <div class="container-xxl mt-5">
        <div class="row">
            <div class="col-sm-6  mt-3 shadow-lg rounded border border-5">
             <h1 class="mb-4">Top Rated Tv Series</h1>
             @foreach ($Tv as $bannerItem )
             @php
             $original_date = $bannerItem->first_air_date;
             $timeStamp     = strtotime($original_date);
             $date          = date("Y" ,$timeStamp);
             $showOverview  = Str::limit($bannerItem->overview, 100);

             $movieID       = $bannerItem->id;
             $movieTitle    = $bannerItem->name;
             $movieRating   = $bannerItem->vote_average;
             $movieImage    = "{$imageBaseURL}/original{$bannerItem->backdrop_path}";
             @endphp
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $movieImage }}" class="img-fluid rounded-start"  alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movieTitle }}</</h5>
                    <p class="card-text">{{ $date }}</p>
                    <p class="card-text">{{ $showOverview }}</p>
                    <p class="card-text"><svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:url(#SVGID_1_);}
                            .st1{fill:url(#SVGID_2_);}
                            .st2{fill:url(#SVGID_3_);}
                            .st3{fill:url(#SVGID_4_);}
                            .st4{fill:url(#SVGID_5_);}
                            .st5{fill:url(#SVGID_6_);}
                            .st6{fill:url(#SVGID_7_);}
                            .st7{fill:url(#SVGID_8_);}
                            .st8{fill:url(#SVGID_9_);}
                            .st9{fill:url(#SVGID_10_);}
                            .st10{fill:url(#SVGID_11_);}
                            .st11{fill:url(#SVGID_12_);}
                            .st12{fill:url(#SVGID_13_);}
                            .st13{fill:url(#SVGID_14_);}
                            .st14{fill:url(#SVGID_15_);}
                            .st15{fill:url(#SVGID_16_);}
                            .st16{fill:url(#SVGID_17_);}
                            .st17{fill:url(#SVGID_18_);}
                            .st18{fill:url(#SVGID_19_);}
                            .st19{fill:url(#SVGID_20_);}
                        </style>
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                            <stop offset="0" style="stop-color:#1245C6"></stop>
                            <stop offset="1" style="stop-color:#9909B7"></stop>
                        </linearGradient>
                        <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                            c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                            c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                            c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                            c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                            c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                            c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                            c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                            c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                            c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                            C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                            c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                        </svg>{{ $movieRating  }}</</p>
                    </div>
                </div>
                </div>
            </div>
               {{-- <h2>{{ $bannerItem->name }}</h2>
               <h5>{{ $date }}</h5>
               <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path }}" alt="" class="fakeimg">
               <p><svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                 <style type="text/css">
                     .st0{fill:url(#SVGID_1_);}
                     .st1{fill:url(#SVGID_2_);}
                     .st2{fill:url(#SVGID_3_);}
                     .st3{fill:url(#SVGID_4_);}
                     .st4{fill:url(#SVGID_5_);}
                     .st5{fill:url(#SVGID_6_);}
                     .st6{fill:url(#SVGID_7_);}
                     .st7{fill:url(#SVGID_8_);}
                     .st8{fill:url(#SVGID_9_);}
                     .st9{fill:url(#SVGID_10_);}
                     .st10{fill:url(#SVGID_11_);}
                     .st11{fill:url(#SVGID_12_);}
                     .st12{fill:url(#SVGID_13_);}
                     .st13{fill:url(#SVGID_14_);}
                     .st14{fill:url(#SVGID_15_);}
                     .st15{fill:url(#SVGID_16_);}
                     .st16{fill:url(#SVGID_17_);}
                     .st17{fill:url(#SVGID_18_);}
                     .st18{fill:url(#SVGID_19_);}
                     .st19{fill:url(#SVGID_20_);}
                 </style>
                 <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                     <stop offset="0" style="stop-color:#1245C6"></stop>
                     <stop offset="1" style="stop-color:#9909B7"></stop>
                 </linearGradient>
                 <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                     c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                     c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                     c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                     c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                     c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                     c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                     c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                     c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                     c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                     C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                     c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                 </svg>{{ $movieRating  }}</p>
               <p>{{ $bannerItem->overview }}</p> --}}
               @endforeach
             </div>
             <div class="col-sm-6 mt-3 shadow-lg rounded border border-5">
                 <h1 class="mb-4">Top Rated Movies</h1>
             @foreach ($loopMovies as $Rated )
             @php
             $original_date = $Rated->release_date;
             $timeStamp     = strtotime($original_date);
             $movieYear     = date("Y" ,$timeStamp);

             $movieID       = $Rated->id;
             $movieTitle    = $Rated->title;
             $movieRating   = $Rated->vote_average;
             $movieImage    = "{$imageBaseURL}/original{$Rated->backdrop_path}";
             $showOverview = Str::limit($Rated->overview, 100);
         @endphp
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $movieImage }}" class="img-fluid rounded-start"  alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movieTitle }}</h5>
                        <p class="card-text">{{ $movieYear }}</p>
                        <p class="card-text">{{ $showOverview }}</p>
                        <p class="card-text"><svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:url(#SVGID_1_);}
                                .st1{fill:url(#SVGID_2_);}
                                .st2{fill:url(#SVGID_3_);}
                                .st3{fill:url(#SVGID_4_);}
                                .st4{fill:url(#SVGID_5_);}
                                .st5{fill:url(#SVGID_6_);}
                                .st6{fill:url(#SVGID_7_);}
                                .st7{fill:url(#SVGID_8_);}
                                .st8{fill:url(#SVGID_9_);}
                                .st9{fill:url(#SVGID_10_);}
                                .st10{fill:url(#SVGID_11_);}
                                .st11{fill:url(#SVGID_12_);}
                                .st12{fill:url(#SVGID_13_);}
                                .st13{fill:url(#SVGID_14_);}
                                .st14{fill:url(#SVGID_15_);}
                                .st15{fill:url(#SVGID_16_);}
                                .st16{fill:url(#SVGID_17_);}
                                .st17{fill:url(#SVGID_18_);}
                                .st18{fill:url(#SVGID_19_);}
                                .st19{fill:url(#SVGID_20_);}
                            </style>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                                <stop offset="0" style="stop-color:#1245C6"></stop>
                                <stop offset="1" style="stop-color:#9909B7"></stop>
                            </linearGradient>
                            <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                                c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                                c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                                c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                                c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                                c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                                c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                                c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                                C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                                c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                            </svg>{{ $movieRating}}</p>
                        </div>
                    </div>
                    </div>
                </div>
               {{-- <h2>{{ $movieTitle }}</h2>
               <h5>{{ $movieYear }}</h5>
                 <img src="{{ $movieImage }}" alt="" class="fakeimg1">
               <p><svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                 <style type="text/css">
                     .st0{fill:url(#SVGID_1_);}
                     .st1{fill:url(#SVGID_2_);}
                     .st2{fill:url(#SVGID_3_);}
                     .st3{fill:url(#SVGID_4_);}
                     .st4{fill:url(#SVGID_5_);}
                     .st5{fill:url(#SVGID_6_);}
                     .st6{fill:url(#SVGID_7_);}
                     .st7{fill:url(#SVGID_8_);}
                     .st8{fill:url(#SVGID_9_);}
                     .st9{fill:url(#SVGID_10_);}
                     .st10{fill:url(#SVGID_11_);}
                     .st11{fill:url(#SVGID_12_);}
                     .st12{fill:url(#SVGID_13_);}
                     .st13{fill:url(#SVGID_14_);}
                     .st14{fill:url(#SVGID_15_);}
                     .st15{fill:url(#SVGID_16_);}
                     .st16{fill:url(#SVGID_17_);}
                     .st17{fill:url(#SVGID_18_);}
                     .st18{fill:url(#SVGID_19_);}
                     .st19{fill:url(#SVGID_20_);}
                 </style>
                 <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                     <stop offset="0" style="stop-color:#1245C6"></stop>
                     <stop offset="1" style="stop-color:#9909B7"></stop>
                 </linearGradient>
                 <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                     c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                     c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                     c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                     c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                     c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                     c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                     c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                     c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                     c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                     C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                     c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                 </svg>{{ $movieRating}}</p>
                 <p>{{ $Rated->overview }}</p> --}}
                 @endforeach
              </div>
         </div>
       </div>

       <div class="container">
        <div class="text-center mt-4">
            <button id="nowPlayingBtn" class="btn btn-primary" onclick="showNowPlaying()">Now Playing Movies</button>
            <button id="upcomingBtn" class="btn btn-primary" onclick="showUpcoming()">Upcoming Movies</button>
        </div>

        <div id="nowPlaying" class="movies-section">
            <h1 class="mt-2 text-center">Now Playing</h1>
            <div class="card-group">
                @foreach ($Np as $Movies)
                <div class="card">
                    @php
                    $original_date = $Movies->release_date;
                    $timeStamp = strtotime($original_date);
                    $movieYear = date("Y", $timeStamp);

                    $movieID = $Movies->id;
                    $movieTitle = $Movies->title;
                    $movieRating = $Movies->vote_average;
                    $movieImage = "{$imageBaseURL}/original{$Movies->backdrop_path}";
                    $showOverview = Str::limit($Movies->overview, 100);
                    @endphp
                    <img src="{{ $movieImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movieTitle }}</h5>
                        <p class="card-text">{{ $movieYear }}</p>
                    </div>
                    <div class="card-footer">
                        <svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:url(#SVGID_1_);}
                                .st1{fill:url(#SVGID_2_);}
                                .st2{fill:url(#SVGID_3_);}
                                .st3{fill:url(#SVGID_4_);}
                                .st4{fill:url(#SVGID_5_);}
                                .st5{fill:url(#SVGID_6_);}
                                .st6{fill:url(#SVGID_7_);}
                                .st7{fill:url(#SVGID_8_);}
                                .st8{fill:url(#SVGID_9_);}
                                .st9{fill:url(#SVGID_10_);}
                                .st10{fill:url(#SVGID_11_);}
                                .st11{fill:url(#SVGID_12_);}
                                .st12{fill:url(#SVGID_13_);}
                                .st13{fill:url(#SVGID_14_);}
                                .st14{fill:url(#SVGID_15_);}
                                .st15{fill:url(#SVGID_16_);}
                                .st16{fill:url(#SVGID_17_);}
                                .st17{fill:url(#SVGID_18_);}
                                .st18{fill:url(#SVGID_19_);}
                                .st19{fill:url(#SVGID_20_);}
                            </style>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                                <stop offset="0" style="stop-color:#1245C6"></stop>
                                <stop offset="1" style="stop-color:#9909B7"></stop>
                            </linearGradient>
                            <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                                c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                                c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                                c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                                c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                                c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                                c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                                c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                                C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                                c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                            </svg>{{ $movieRating}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="upcoming" class="movies-section" style="display: none;">
            <h1 class="mt-2 text-center">Upcoming</h1>
            <div class="card-group">
                @foreach ($Up as $Movies)
                <div class="card">
                    @php
                    $original_date = $Movies->release_date;
                    $timeStamp = strtotime($original_date);
                    $movieYear = date("Y", $timeStamp);

                    $movieID = $Movies->id;
                    $movieTitle = $Movies->title;
                    $movieRating = $Movies->vote_average;
                    $movieImage = "{$imageBaseURL}/original{$Movies->backdrop_path}";
                    $showOverview = Str::limit($Movies->overview, 100);
                    @endphp
                    <img src="{{ $movieImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movieTitle }}</h5>
                        <p class="card-text">{{ $movieYear }}</p>
                    </div>
                    <div class="card-footer">
                        <svg width="24" height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:url(#SVGID_1_);}
                                .st1{fill:url(#SVGID_2_);}
                                .st2{fill:url(#SVGID_3_);}
                                .st3{fill:url(#SVGID_4_);}
                                .st4{fill:url(#SVGID_5_);}
                                .st5{fill:url(#SVGID_6_);}
                                .st6{fill:url(#SVGID_7_);}
                                .st7{fill:url(#SVGID_8_);}
                                .st8{fill:url(#SVGID_9_);}
                                .st9{fill:url(#SVGID_10_);}
                                .st10{fill:url(#SVGID_11_);}
                                .st11{fill:url(#SVGID_12_);}
                                .st12{fill:url(#SVGID_13_);}
                                .st13{fill:url(#SVGID_14_);}
                                .st14{fill:url(#SVGID_15_);}
                                .st15{fill:url(#SVGID_16_);}
                                .st16{fill:url(#SVGID_17_);}
                                .st17{fill:url(#SVGID_18_);}
                                .st18{fill:url(#SVGID_19_);}
                                .st19{fill:url(#SVGID_20_);}
                            </style>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1.3627" y1="12.2327" x2="22.253" y2="12.2327">
                                <stop offset="0" style="stop-color:#1245C6"></stop>
                                <stop offset="1" style="stop-color:#9909B7"></stop>
                            </linearGradient>
                            <path class="st0" d="M21.5,13.3c0.5-0.5,0.7-1.2,0.7-1.9c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7h-3.6
                                c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.1-0.2c0.2-0.3,0.3-0.5,0.4-0.7C17,7.1,17,6.9,17.1,6.5
                                c0.1-0.3,0.1-0.7,0.1-1c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3-0.1-0.6c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.6
                                c-0.1-0.2-0.3-0.4-0.5-0.5c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.7-0.1-1.1-0.1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.4-0.4,0.7
                                c-0.1,0.3-0.2,0.5-0.3,0.7c0,0.2-0.1,0.5-0.2,0.8c-0.1,0.4-0.1,0.6-0.2,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.4,0.6
                                c-0.3,0.3-0.7,0.8-1.3,1.6c-0.4,0.6-0.9,1.1-1.3,1.6c-0.5,0.5-0.8,0.8-1,0.8c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.3c0.3,0,1,0.2,2.1,0.6c0.7,0.2,1.2,0.4,1.6,0.5c0.4,0.1,0.9,0.2,1.6,0.4
                                c0.7,0.1,1.3,0.2,1.9,0.2h0.2h1h0.5c1.2,0,2-0.4,2.6-1c0.5-0.6,0.7-1.4,0.6-2.4c0.3-0.3,0.6-0.7,0.7-1.2c0.1-0.5,0.1-1,0-1.5
                                c0.4-0.5,0.6-1.1,0.6-1.8C21.7,14.1,21.7,13.7,21.5,13.3z M6,10.6H2.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6v8.4
                                c0,0.2,0.1,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2H6c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6v-8.4c0-0.2-0.1-0.4-0.2-0.6
                                C6.4,10.6,6.2,10.6,6,10.6z M4.5,18.7c-0.2,0.2-0.4,0.2-0.6,0.2c-0.2,0-0.4-0.1-0.6-0.2C3.1,18.5,3,18.3,3,18.1
                                c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6C4.7,18.3,4.6,18.5,4.5,18.7z"></path>
                            </svg>{{ $movieRating}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    @include('shared.footer')
</div>

</body>
<script>
//     function showNowPlaying() {
//     document.getElementById('nowPlaying').style.display = 'block';
//     document.getElementById('upcoming').style.display = 'none';
// }

// function showUpcoming() {
//     document.getElementById('nowPlaying').style.display = 'none';
//     document.getElementById('upcoming').style.display = 'block';
// }

function showNowPlaying() {
    document.getElementById('nowPlaying').style.display = 'block';
    document.getElementById('upcoming').style.display = 'none';
    document.getElementById('nowPlayingBtn').classList.add('active');
    document.getElementById('upcomingBtn').classList.remove('active');
}

function showUpcoming() {
    document.getElementById('nowPlaying').style.display = 'none';
    document.getElementById('upcoming').style.display = 'block';
    document.getElementById('nowPlayingBtn').classList.remove('active');
    document.getElementById('upcomingBtn').classList.add('active');
}

// Optional: Initialize with "Now Playing" section visible
document.addEventListener('DOMContentLoaded', (event) => {
    showNowPlaying();
});

</script>
</html>
