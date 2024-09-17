
<!-- ======= Header ======= -->
<header id="header" class="header-top">
    <div class="container">

        <h1><a href="/">{{ config('app.name') }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="/" class="mr-auto"><img src="/assets/img/me.jpg" alt="" class="img-fluid">ddd</a> -->
        <h2>
            Filmmaking is my passion. <br>I am always exploring new ways to bring <span>vision</span> into life.
        </h2>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ request()->path() == '/' ? 'active' : '' }}" href="/">Home</a></li>
                @foreach($menus as $menu)
                    <li><a class="nav-link {{ request()->path() == $menu->slug ? 'active' : '' }}" href="/{{ $menu->slug }}">{{ $menu->name }}</a></li>
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <a href="https://www.youtube.com/@ranjanrimal1683" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/ranjan.rimal" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/rj_rimal" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/ranjan-rimal-559351163" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
            <a href="https://www.tiktok.com/@rj_rimal" class="tiktok"><i class="bi bi-tiktok"></i></a>
        </div>

    </div>
</header><!-- End Header -->
