
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do Going to Traveler</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,900;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('css/vendor/bootstrap/css/bootstrap.css')}}">
</head>
<body>
<header>
         <a href="#" class="logo">Traveler</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/daftar">Tiket</a></li>
            <li><a href="/pesan">Pesan</a></li>
        </ul>

    </header>
    <!-----home start------>
    <section class="home" id="home">
        <div class="home-text">
            <h1>Go Healing</h1>
            <h2>Happy <br> love your heart</h2>
            <a href="pesan_Tiket.php" class="btn-1  btn-outline-light">Take Tiket</a>
        </div>
        <div class="home-lmg col">
            <img class="img-fluid" src="img/tourist.png">
        </div>
    </section>
   
        <!-----promo start------>
        @yield('content1')
       
       <!-----pilihan rekereasi start------>
        @yield('content2')
        <!-- menampilkan data dalam database -->
        @yield('content3')
          

        <!---menu piliha lain-->
    <footer class="container">
        <div class="product-judul text-center">
            <div class="about-text">
               <span>Owner</span>
            </div> 
            <h3>Wahyu Sahri Rhamadhan</h3>
                  
        </div>

    </footer>
       
</body>
</html>