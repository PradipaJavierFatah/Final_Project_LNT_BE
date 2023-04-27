<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
</head>
<body>
    {{-- Navbar --}}
    <nav>
        <div class="nav-logo">
            <a href=""><img src="https://i.pinimg.com/originals/98/8d/6e/988d6e82dd72311592dbe2c7af57cd81.gif" alt="error"></div></a>
        <div class="nav-font">
            <a href="{{route('dashboard')}}"><li>Home</li></a>
            <a href="#"><li>About Us</li></a>
            <a href="#"><li>Register</li></a>
            <button><a href="{{asset('login')}}"><li>Login</li></a></button>
        </div>
    </nav>
    {{-- Navbar --}}

    {{-- Hero Section --}}
    <header>
        <div class="hero">
            <div class="hero-font">
                <h1>Buku adalah jendela dunia</h1>
                <span>Ayo membaca buku untuk memperluas pengetahuan</span>
                <a href=""><button>Join Us</button></a>
            </div>
        </div>
    </header>

{{-- Footer --}}
<footer>
    <div class="foot-logo">
        <a href="https://twitter.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1409/1409946.png" alt="twitter"></a>
        <a href="https://www.facebook.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504903.png" alt="facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504947.png" alt="instagram"></a>
    </div>
    <div class="foot-font">
        <p>Copyright 2023 Pradipa. All Rights Reserved.</p>
    </div>
</footer>
{{-- Footer --}}

</body>
</html>
