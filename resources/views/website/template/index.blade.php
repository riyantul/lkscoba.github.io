<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT NAKIMOTO</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{!! asset('indexcss/style.css') !!}">
</head>
<body>
    
    <nav class="nav" id="spacee">
        <div class="logo">
            <img src="{!! asset('img/logoperusahaan.png') !!}" width="40px">
            <h2>PT NAKIMOTO</h2>
            <h4></h4>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"><img src="{!! asset('img/icon/icons8-geography-16.png') !!}">www.nakimoto.go.id</a></li>
                <li><a href="#"><img src="{!! asset('img/icon/icons8-envelope-50.png') !!}" width="18px">(0821)988232</a></li>
                <li><a href="#"><img src="{!! asset('img/icon/icons8-phone-50.png') !!}" width="18px">contact</a></li>
                
            </ul>
        </div>
        
    </nav>
    <div class="space" id="navigasi">
        <span><a href="#">Home</a></span>
        <span><a href="/visimisi">Visi Misi</a></span>
        <span><a href="/galery">Gallery</a></span>
        <span><a href="/kompetisi">Daftar Kompetisi</a></span>
        <span><a href="/login">Login</a></span>
        <span><a href="/daftarkaryawan">Daftar karyawan</a></span>
    </div>

    @yield('atas-bawah')

    <footer>
        <div class="atas">
            <div class="isi">
                <h4>TENTANG PERUSAHAAN</h4>
                        <div class="isi2">
                    <ul>
                        <li><img src="{!! asset('img/logoperusahaan.png') !!}" width="40px"></li>
                        <li>Nakimoto, Perusahaan yang mengadakan kompetisi di Bidang Olahraga setiap akhir Tahun.
                      </li>
                    </ul>
                </div>
            </div>
            <div class="isi">
                <h4>INFORMATION</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Visi misi</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Kompetisi</a></li>
                    <li><a href="">Karyawan</a></li> 
                </ul>
            </div>
            <div class="isi">
                <h4>CONTACT INFO</h4>
                <ul>
                    <a href="https://id-id.facebook.com/pages/category/School/SMK-NEGERI-2-DEMAK-108689632575406/"><img src="img/icon/facebook.png" width="20%"/></a>
                    <a href="https://www.instagram.com/infoskadaku/?hl=id"><img src="img/icon/instagram.png" width="20%"/></a>
                    <a href="https://twitter.com/infoskadaku"><img src="img/icon/twiteer.png" width="20%"/></a>
                    <li>291 South 21 th streer , new york city</li>
                    <li>(0921)32888923</li>
                </ul>
            </div>
        </div>
        <div class="bawah">
        <span>copyright<a href="">@cybercore</a></span>
        </div>
        
    </footer>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
    <!-- Slick JS -->    
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
     
    
    <script>
        window.onscroll = function() {myFunction()};
    
        let widget = document.getElementById('navigasi');
        let sticky = widget.offsetTop;
    
        function myFunction(){
          if (window.pageYOffset >= sticky){
            widget.classList.add("sticky")
          } else{
            widget.classList.remove("sticky");
          }
        }
     
      
            $(document).ready(function(){
                $('.image').slick({
                autoplay: true,
                autoplaySpeed: 3500,
                dots: true,
                //slidesToShow: 4,
                });
            });
      </script>
    </body>
    </html>