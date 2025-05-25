<x-front-layout>
    <!-- ==================== Start Search Results ==================== -->
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-8">
                    <div class="section-head text-center">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">{{ trans('front.Search Results for') }}</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">"{{ $query }}"</h4>
                        <div class="flex-symbol mt-20 mb-10">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>

            @if($services->isEmpty() && $works->isEmpty() && $jobs->isEmpty())
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="no-results text-center wow fadeInUp" data-wow-delay=".3s">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <h5 class="playfont mb-20">{{ trans('front.No results found for your search') }}</h5>
                            <p>{{ trans('front.Try different keywords or browse our categories below') }}</p>
                        </div>
                    </div>
                </div>
            @else
                <!-- Services Results -->
                @if($services->isNotEmpty())
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-40">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">[ {{ trans('front.services') }} ]</h6>
                            <div class="flex-symbol mt-10">
                                <span class="line"></span>
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".3s">
                            <span class="icon flaticon-houses"></span>
                            <h6 class="mb-20">{{ app()->getLocale() == 'ar' ? $service->name_ar : $service->name_en }}</h6>
                            <p>{{ \Illuminate\Support\Str::limit(app()->getLocale() == 'ar' ? $service->description_ar : $service->description_en, 100) }}</p>
                            <a href="{{ route('services.details', $service->id) }}" class="more custom-font mt-30">{{ trans('front.learn more') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Works Results -->
                @if($works->isNotEmpty())
                <div class="row justify-content-center mt-80">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-40">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">[ {{ trans('front.our works') }} ]</h6>
                            <div class="flex-symbol mt-10">
                                <span class="line"></span>
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($works as $work)
                    <div class="col-lg-4 col-md-6">
                        <div class="work-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="item-img bg-img wow imago" data-background="{{ asset($work->thumbnail) }}">
                                <div class="item-img-overlay"></div>
                            </div>
                            <div class="cont">
                                <h6><a href="{{ route('works.show', $work->id) }}">{{ $work->client_name }}</a></h6>
                                <p>{{ \Illuminate\Support\Str::limit($work->description, 80) }}</p>
                                <a href="{{ route('works.show', $work->id) }}" class="more custom-font mt-10">{{ trans('front.view project') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Jobs Results -->
                @if($jobs->isNotEmpty())
                <div class="row justify-content-center mt-80">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-40">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">[ {{ trans('front.career') }} ]</h6>
                            <div class="flex-symbol mt-10">
                                <span class="line"></span>
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($jobs as $job)
                    <div class="col-lg-4 col-md-6">
                        <div class="item-job wow fadeInUp" data-wow-delay=".3s">
                            <div class="job-title mb-20">
                                <h5 class="playfont">{{ app()->getLocale() == 'ar' ? $job->title_ar : $job->title_en }}</h5>
                            </div>
                            <div class="job-info-grid">
                                <div class="job-info-item">
                                    <h6 class="custom-font">{{ trans('front.location') }}</h6>
                                    <p>{{ app()->getLocale() == 'ar' ? $job->location_ar : $job->location_en }}</p>
                                </div>
                                <div class="job-info-item">
                                    <h6 class="custom-font">{{ trans('front.job type') }}</h6>
                                    <p>{{ app()->getLocale() == 'ar' ? $job->type_ar : $job->type_en }}</p>
                                </div>
                            </div>
                            <div class="job-action mt-20">
                                <a href="{{ route('career.index', $job->id) }}" class="btn-curve btn-sm btn-color">
                                    <span>{{ trans('front.View Details') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            @endif
        </div>
        <div class="dots-pattern bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}"></div>
    </section>
    <!-- ==================== End Search Results ==================== -->
</x-front-layout>

<style>
/* Common Archo theme styling */
.section-head h6 {
    color: #b19777;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

[dir=rtl] .section-head h6 {
    color: #b19777;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0px;
    margin-bottom: 10px;
}

.section-head h4 {
    font-size: 36px;
    margin-bottom: 15px;
}

.flex-symbol {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}

.flex-symbol .line {
    width: 30px;
    height: 1px;
    background-color: #b19777;
}

.flex-symbol .circle {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background-color: #b19777;
    margin: 0 5px;
}

.top-corn, .bottom-corn {
    position: absolute;
    width: 30px;
    height: 30px;
    border-color: #b19777;
    opacity: .5;
}

.top-corn {
    top: 0;
    left: 0;
    border-left: 1px solid;
    border-top: 1px solid;
}

.bottom-corn {
    bottom: 0;
    right: 0;
    border-right: 1px solid;
    border-bottom: 1px solid;
}

/* Service Items */
.item-bx {
    text-align: center;
    padding: 40px 30px;
    margin-bottom: 30px;
    background: #fff;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
    transition: all .4s;
}

.item-bx:hover {
    transform: translateY(-10px);
}

.item-bx .icon {
    font-size: 50px;
    color: #b19777;
    margin-bottom: 20px;
    display: block;
}

.item-bx h6 {
    font-weight: 600;
    margin-bottom: 15px;
}

.item-bx .more {
    font-size: 14px;
    font-weight: 500;
    color: #b19777;
    text-decoration: none;
    position: relative;
    display: inline-block;
}

.item-bx .more:after {
    content: '';
    width: 0;
    height: 1px;
    background: #b19777;
    position: absolute;
    bottom: -2px;
    left: 0;
    transition: all .4s;
}

.item-bx .more:hover:after {
    width: 100%;
}

/* Work Items */
.work-item {
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}

.work-item .item-img {
    position: relative;
    overflow: hidden;
    height: 280px;
    border-radius: 5px;
}

.work-item .item-img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.2);
    transition: all .4s;
    opacity: 0;
}

.work-item:hover .item-img-overlay {
    opacity: 1;
}

.work-item .cont {
    padding: 30px 0;
}

.work-item .cont h6 {
    font-weight: 600;
    margin-bottom: 5px;
}

.work-item .cont h6 a {
    color: #1a1a1a;
    text-decoration: none;
}

.work-item .cont h6 a:hover {
    color: #b19777;
}

/* Job Items */
.item-job {
    padding: 30px;
    background-color: #fff;
    box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
    transition: all .3s;
    margin-bottom: 30px;
}

.item-job:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.1);
}

.job-info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    padding: 15px 0;
    border-top: 1px solid rgba(0,0,0,.05);
    border-bottom: 1px solid rgba(0,0,0,.05);
}

.job-info-item h6 {
    color: #b19777;
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 600;
}

.job-action {
    margin-top: 20px;
}

.btn-sm {
    padding: 8px 20px;
    font-size: 12px;
}

/* No Results Styling */
.no-results {
    padding: 50px 30px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.05);
    text-align: center;
}

.no-results .icon {
    font-size: 50px;
    color: #b19777;
    margin-bottom: 20px;
    display: block;
}

/* Responsive Adjustments */
@media (max-width: 767px) {
    .section-head h4 {
        font-size: 28px;
    }
    
    .job-info-grid {
        grid-template-columns: 1fr;
    }
}
</style>