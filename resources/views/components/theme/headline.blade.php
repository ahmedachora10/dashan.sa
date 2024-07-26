@props(['key' => '',])

@if($key !== '')
<h3 class="tp-section-title">{{headline($key)->title}}</h3>
<span class="tp-section-title-pre">{{ headline($key)->subTitle }}</span>
@else
<span></span>
@endif
