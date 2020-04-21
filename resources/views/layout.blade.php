<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    @section('navbar')
        <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <p >I LUV</p>
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>
        
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
            </div>
        
            <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                Home
                </a>
        
                <a class="navbar-item">
                Documentation
                </a>
        
                <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>
        
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                    About
                    </a>
                    <a class="navbar-item">
                    Jobs
                    </a>
                    <a class="navbar-item">
                    Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                    Report an issue
                    </a>
                </div>
                </div>
            </div>
        
            <div class="navbar-end">
                <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                    <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                    Log in
                    </a>
                </div>
                </div>
            </div>
            </div>
        </nav>
    @show
    @section('hero')
    <br><br>
        <section class="hero is-medium is-primary is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                    Primary bold title
                    </h1>
                    <h2 class="subtitle">
                    Primary bold subtitle
                    </h2>
                </div>
            </div>
        </section>
    @show

    <div class="container">
    @yield('inicio')
    </div>
    @section('footer')
        <footer class="footer">
        <div class="content has-text-centered">
          <p style="color:white;">
            <strong style="color:white;">Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
          </p>
        </div>
      </footer>
    @show
</body>
<script>

    $(document).ready(function() {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
    });
</script>
</html>