<style>
    .logo-text {
        margin-left: 70px;
    }
</style>
<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand position-relative" href="/">
                <img src="/images/logopng.png" alt="3 Pointcreation" style="
                    filter: invert(1);
                    width: 80px;
                    /* height: 80px; */
                    top: 50%;
                    transform: translateY(-50%);
                    position: absolute;
                ">
                <span class="logo-text">
                    3pointcreation
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    @foreach ($menus as $menu)
                    <li class="nav-item {{ request()->is($menu['slug']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ $menu['slug'] }}">{{ $menu['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->
