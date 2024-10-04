<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/">
                <span>
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
