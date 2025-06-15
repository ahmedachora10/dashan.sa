<!-- ==================== Start Team ==================== -->

<section class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tit">
                    <h6 class="custom-font mb-10 wow fadeInDown custom-sub-title" data-wow-delay=".3s">{{headline('our-staff')->title}}</h6>
                    <p class="wow fadeInUp custom-sub-title" data-wow-delay=".3s">{{headline('our-staff')->subTitle}}</p>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev">
                            @if(app()->getLocale() == 'ar')
                                <i class="fas fa-long-arrow-alt-right"></i>
                            @else
                                <i class="fas fa-long-arrow-alt-left"></i>
                            @endif
                        </span>
                        <span class="next">
                            @if(app()->getLocale() == 'ar')
                                <i class="fas fa-long-arrow-alt-left"></i>
                            @else
                                <i class="fas fa-long-arrow-alt-right"></i>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-container" data-rtl="{{ app()->getLocale() == 'ar' ? 'true' : 'false' }}">
                    @foreach ($members as $member)
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{asset($member->thumbnail)}}" alt="" class="staff-image">
                            </div>
                            <div class="info">
                                <h5 class="custom-sub-title">{{ $member->name }}</h5>
                                <span class="custom-sub-title">{{ $member->job_name }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="dots-half bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}"></div>
</section>

    <!-- ==================== End Team ==================== -->
