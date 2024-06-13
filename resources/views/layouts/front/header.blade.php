<header class="site-navbar mt-3" id="top">
    <div class="container-fluid">
        <div class="row align-items-center bg-white rounded shadow" style="flex-direction:row !important">
            <div class="site-logo col-sm-4 col-auto"><a class="pe-4" href="{{ route('home') }}"><x-logo /></a></div>
            <nav class="mx-auto site-navigation col-sm-8 col-auto">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    @include('layouts.front.menu')
                </ul>
            </nav>
            <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                <a href="#" class="site-menu-toggle js-menu-toggle"><span
                        class="lni lni-menu h3 text-primary"></span></a>
            </div>
        </div>
    </div>
</header>
