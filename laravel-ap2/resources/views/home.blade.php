@extends('layout.master')

@section('content1')
       <!-----promo start------>
       <section class="about" id="about">
        <div class="about-img">
            <img src="img/traveller.png" alt="">
        </div>
        <div class="about-text">
        <span>About Us</span>
        <h2>Sobat Healing, Yuks Pesan Tiket Kami !!! </h2>
        <p>Perusahaan Kami adalah salah satu perusahaan yang meberikan jasa untuk pememsanan tiket <br>
        harga yang terjangkau dan juga memeperkenalakan macam - macam wisatawan lokal yang tidak <br>
        kalah indahnya, Yuk Traveler Bareng Kami !!!!</p>
        <a href="Daftar_Harga.php" class="btn-1 btn-outline-light">Lihat Harga</a>
        </div>
       
    </section>


@endsection

@section('content2')
     <!-----pilihan rekereasi start------>
     <section class="container">
        <div class="h-100 d-flex justify-content-center">
            <div class="p-2 w-100" style="margin-right:20px">
                 <div class="about-text">
                    <span>Daftar Tempat Bagus</span>
                </div> 
                    <h2>Tempat cocok buat Refresing yuk, Mumpung Promo Guys</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, non eligendi! Culpa laboriosam amet, est ducimus ipsum doloremque minus asperiores ullam earum, consectetur maxime illum debitis quidem atque impedit sequi odio, minima inventore? Velit, temporibus a nobis ipsam tempore veniam harum sit vel asperiores doloribus voluptatum maiores nam voluptatibus aspernatur.</p>
                
               
            </div> 
            <!-- menampilkan data dalam database -->
            <div class="p-2  flex-shrink-1 md">
                <div class="card" style="width: 12rem ; margin-top: 0px; padding: .5rem;">
                    <img src="img/bromo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title" style="color: black;"></h5>
                    <p class="card-text" style="color: black;"></p>
                    <a href="" class="card-text" style="color: black;">Lihat View</a>
                    <a href="pesan_Tiket.php" class="btn-1 btn-outline-light" style="text-align: center;">Beli Tiket</a>
                  </div>
                </div>
            </div> 
          </div>
          
    </section>
@endsection
