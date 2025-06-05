<nav class="navbar change navbar-expand-lg">
	<div class="container">
		<!-- Logo -->
		<a class="logo navbar-brand" href="{{route('home')}}" style="max-width: 150px;">
			<img src="{{ asset(setting('logo')) }}" alt="logo" style="max-width: 100%; height: auto;">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"><i class="fas fa-bars"></i></span>
		</button>

		<!-- navbar links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				@include('layouts.theme.menu')
				<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{route('switch-language')}}">
						{{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }} </a>
				</li>
			</ul>

			<div class="right-nav-elements">
				<div class="social-icon">
					@if(setting('facebook'))<a href="{{setting('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
					@if(setting('twitter')) <a href="{{setting('twitter')}}"  target="_blank"><i class="fa-brands fa-x-twitter"></i></a> @endif
					@if(setting('linkedin')) <a href="{{setting('linkedin')}}"  target="_blank"><i class="fa-brands fa-linkedin-in"></i></a> @endif
					@if(setting('instagram')) <a href="{{setting('instagram')}}"  target="_blank"><i class="fa-brands fa-instagram"></i></a> @endif
					@if(setting('tiktok')) <a href="{{setting('tiktok')}}"  target="_blank"><i class="fa-brands fa-tiktok"></i></a> @endif
					@if(setting('youtube')) <a href="{{setting('youtube')}}"  target="_blank"><i class="fa-brands fa-youtube"></i></a> @endif
					@if(setting('snapchat')) <a href="{{setting('snapchat')}}"  target="_blank"><i class="fa-brands fa-snapchat"></i></a> @endif
					@if (setting('telegram')) <a href="{{setting('telegram')}}"  target="_blank"><i class="fa-brands fa-telegram"></i></a> @endif
					@if(setting('whatsapp')) <a href="{{setting('whatsapp')}}"  target="_blank"><i class="fa-brands fa-whatsapp"></i></a> @endif
				</div>
			</div>
		</div>
	</div>
</nav>
<!-- ==================== End Navbar ==================== -->

<style>
/* Reduce gap between logo and navbar */
.navbar-brand {
    padding-right: 0;
    margin-right: 0;
}

.navbar .container {
    display: flex;
    align-items: center;
}

.navbar-collapse {
    margin-left: 0;
    padding-left: 0;
}

/* Adjust logo size */
.logo img {
    max-width: 100%;
    max-height: 45px;
    width: auto;
}

/* Ensure proper alignment for RTL/LTR */
html[dir="rtl"] .navbar-nav {
    margin-right: 0;
    padding-right: 0;
}

html[dir="ltr"] .navbar-nav {
    margin-left: 0;
    padding-left: 0;
}

/* Adjust navbar spacing */
.navbar {
    padding-left: 15px;
    padding-right: 15px;
}

@media (min-width: 992px) {
    .navbar-expand-lg .navbar-collapse {
        justify-content: flex-end;
    }
}
/* Center navbar styling */
.navbar .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Change ml-auto to mx-auto to center the navigation */
.navbar-nav.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

/* Group the social icons and search in a flex container */
.right-nav-elements {
    display: flex;
    align-items: center;
}

/* Adjust logo size */
.logo img {
    max-width: 100%;
    max-height: 45px;
    width: auto;
}

/* Responsive handling */
@media (max-width: 991px) {
    .navbar-collapse {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        padding: 15px;
        z-index: 999;
    }

    .navbar-nav.mx-auto {
        margin: 0 0 15px 0;
        text-align: center;
    }

    .right-nav-elements {
        justify-content: center;
    }
}

/* Ensure proper alignment for RTL/LTR */
html[dir="rtl"] .navbar-nav {
    padding-right: 0;
}

html[dir="ltr"] .navbar-nav {
    padding-left: 0;
}
</style>
