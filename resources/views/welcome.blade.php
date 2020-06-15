<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <!-- <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style> -->
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            @if (Route::has('login'))

            <a href="{{ url('/home') }}" class="w3-bar-item w3-button"><b>UMY</b> Penmaru</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                @auth
                @else
                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
                @if (Route::has('register'))
                <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Registrasi</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="{{URL::to('/')}}/img/landingpage.jpg" alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>UMY</b></span>
                <span class="w3-hide-small w3-text-light-grey">Penmaru</span></h1>
            <span class="w3-small w3-text-light-grey">Menjadi Universitas yang unggul dalam pengembangan ilmu
                pengetahuan dan teknologi dengan berlandaskan nilai-nilai Islam <br>untuk kemaslahatan umat.</span>
            <p><a href="{{ url('/register') }}"
                    class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">REGISTRASI</a>
            </p>
        </div>
        </div>
    </header>

    <!-- About Section -->
    <!-- <div class="w3-container w3-padding-32" id="about">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">MENGAPA MEMILIH <b>UMY ?</b></h3>
        <p>UMY sebagai universitas yang Unggul dan Islami merupakan pilihan bijaksana untuk memulai pembangunan karakter
            diri di perguruan tinggi, karena sistem perkuliahan maupun kehidupan di kampus telah dirancang seimbang guna
            menghasilkan lulusan yang unggul dalam teknologi namun tetap berlandaskan nilai-nilai keislaman.
        </p>
    </div> -->

    <!-- Why UMY Section -->
    <div class="w3-padding-64 w3-white">
        <div class="w3-row-padding">
            <div class="w3-col l8 m6">
                <h1 class="w3-jumbo"><b>MENGAPA</b></h1>
                <h1 class="w3-xxxlarge w3-text-green"><b>MEMILIH UMY ?</b></h1>
                <p><span class="w3-xlarge">UMY</span> sebagai universitas yang Unggul dan Islami
                    merupakan pilihan bijaksana untuk memulai pembangunan karakter
                    diri di perguruan tinggi, karena sistem perkuliahan maupun kehidupan di kampus telah dirancang
                    seimbang guna
                    menghasilkan lulusan yang unggul dalam teknologi namun tetap berlandaskan nilai-nilai keislaman.</p>
                <!-- <button class="w3-button w3-light-grey w3-padding-large w3-section w3-hide-small"
                    onclick="document.getElementById('download').style.display='block'">
                    <i class="fa fa-download"></i> Download Application
                </button> -->
                <!-- <p>Available for <i class="fa fa-android w3-xlarge w3-text-green"></i> <i
                        class="fa fa-apple w3-xlarge"></i> <i class="fa fa-windows w3-xlarge w3-text-blue"></i></p> -->
            </div>
            <div class="w3-col l4 m6">
                <img src="/w3images/img_app.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
                <div class="w3-center w3-hide-large w3-hide-medium">
                    <!-- <button class="w3-button w3-block w3-padding-large"
                        onclick="document.getElementById('download').style.display='block'">
                        <i class="fa fa-download"></i> Download Application
                    </button> -->
                    <img src="/w3images/img_app.jpg" class="w3-image w3-margin-top" width="335" height="471">
                </div>
            </div>
        </div>
    </div>

    <!-- Clarity Section -->
    <div class="w3-padding-64 w3-light-grey">
        <div class="w3-row-padding">
            <div class="w3-col l4 m6">
                <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="/w3images/app5.jpg" alt="App"
                    width="335" height="471">
            </div>
            <div class="w3-col l8 m6">
                <h1 class="w3-jumbo"><b>Biaya registrasi</b></h1>
                <h1 class="w3-xxxlarge w3-text-red"><b>per-Fakultas</b></h1>
                <p><span class="w3-xlarge">A revolution in resolution.</span> Sharp and clear photos with the world's
                    best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur.</p>
                <button class="w3-button w3-white w3-padding-large w3-section w3-hide-small"
                    onclick="document.getElementById('download').style.display='block'">
                    <i class="fa fa-download"></i> Download list
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-green w3-padding-16">
        <p>© 2020 Universitas Muhammadiyah Yogyakarta • Dikembangkan oleh Team • </p>
    </footer>

    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ url('/home') }}">Registrasi</a>
            @endif
            @endauth
        </div>
        @endif -->

    <!-- <div class="content">
        <div class="title m-b-md">
            Pendaftaran MABA UMY
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
    </div> -->
</body>

</html>