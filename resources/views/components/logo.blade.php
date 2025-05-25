@props(['width' => '75', 'height' => 'auto'])
<a href="{{route('home')}}"><img src="{{ session('theme') === 'dark' ? asset(setting('logo')) : asset(setting('logo')) }}" alt="logo"
    width="{{ $width }}" height="{{ $height }}"></a>
