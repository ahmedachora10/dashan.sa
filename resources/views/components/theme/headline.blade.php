@props(['key' => '',])

@if($key !== '')
<span class="tp-section-title-pre">{{ headline($key)->subTitle }}</span>
<h3 class="tp-section-title">{{headline($key)->title}}</h3>
@else
<span></span>
@endif
