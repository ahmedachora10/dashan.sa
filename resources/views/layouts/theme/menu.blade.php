@php($route = !request()->routeIs('home') ? route('home') : '')
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{route('home')}}">{{trans('front.home')}}</a></li>
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{ route('about-us')  }}">{{trans('front.about')}}</a></li>
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{ route('works.index')}}">{{trans('front.our works')}}</a></li>
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{route('services.all')}}">{{trans('front.services')}}</a></li>
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{route('career.index')}}">{{trans('front.career')}}</a></li>
<li class="nav-item"><a class="nav-link custom-sub-title" style="font-size: 18px;" href="{{route('contact')}}">{{trans('front.contact us')}}</a></li>

