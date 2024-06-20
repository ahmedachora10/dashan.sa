<li @class(['col-6' => @$footer])><a href="{{ route('home') }}" @class([
    'nav-link' => @$footer,
    'active font-weight-bold' => request()->routeIs('home'),
])">الرئيسية</a></li>
<li @class(['col-6' => @$footer])><a href="{{ request()->routeIs('home') ? '#services-section' : route('services.all') }}"
        @class([
            'nav-link' => @$footer,
            'active font-weight-bold' => request()->routeIs('services.all'),
        ])>الخدمات</a></li>
<li @class(['col-6' => @$footer])><a
        href="{{ request()->routeIs('home') ? '#our-clients' : route('home', '#our-clients') }}"
        @class([
            'nav-link' => @$footer,
            'active font-weight-bold' => request()->routeIs('our-clients'),
        ])> عملاؤنا </a></li>
<li @class(['col-6' => @$footer])><a href="{{ request()->routeIs('home') ? '#works-section' : route('works') }}"
        @class([
            'nav-link' => @$footer,
            'active font-weight-bold' => request()->routeIs('works'),
        ])>انجازاتنا</a></li>
<li @class(['col-6' => @$footer])><a href="{{ route('contact') }}" @class([
    'nav-link' => @$footer,
    'active font-weight-bold' => request()->routeIs('contact'),
])>اتصل بنا</a></li>
