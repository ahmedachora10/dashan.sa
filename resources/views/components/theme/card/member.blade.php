<div class="tp-team-7-item p-relative text-center mb-30">
    <div class="tp-team-7-thumb">
        <img width="160" height="160" src="{{asset($member->thumbnail)}}" alt="">
    </div>
    <div class="tp-team-7-content">
        <h4 class="tp-team-7-title"><a href="team-details.html">{{$member->name}}</a></h4>
        <span>{{$member->job_name}}</span>
    </div>
    <div class="tp-team-7-social">
        @if(!empty($member->twitter))
            <a href="{{$member->twitter}}"><i class="flaticon-twitter"></i></a>
        @endif
        @if(!empty($member->linkedin))
            <a href="{{$member->linkedin}}"><i class="fa-brands fa-linkedin"></i></a>
        @endif
    </div>
</div>
