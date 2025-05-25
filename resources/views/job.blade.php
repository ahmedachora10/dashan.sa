<x-front-layout>
    <!-- ==================== Start Header ==================== -->
    <header class="pages-header bg-img valign parallaxie" data-background="{{asset($slider->thumbnail)}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <span class="top-corn"></span>
                        <span class="bottom-corn"></span>
                        <h1 class="custom-sub-title">{{trans('front.career')}}</h1>
                        <div class="path">
                            <a class="custom-sub-header custom-sub-title" href="{{route('home')}}">{{trans('front.home')}}</a><span>/</span><a href="#" class="active custom-sub-header custom-sub-title">{{trans('front.career')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->

    <!-- ==================== Start Open Positions ==================== -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head text-center">
                        <h6 class="custom-font wow fadeInDown custom-sub-title" data-wow-delay=".3s">[ {{ trans('front.open positions') }} ]</h6>
                        <h4 class="playfont wow flipInX custom-sub-title" data-wow-delay=".5s">{{headline('career-header')->title}}</h4>
                        <p class="wow fadeInUp custom-sub-title" data-wow-delay=".3s">{{headline('career-header')->subTitle}}</p>
                        <div class="flex-symbol mt-20 mb-10" style="justify-content: center !important;">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Sidebar Navigation for Tabs -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="specialty mb-50 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="item-bx">
                                <h6 class="custom-font mb-30 custom-sub-title">{{ trans('front.open positions') }}</h6>
                                <ul>
                                    @foreach ($jobs as $index => $job)
                                        <li class="{{ $index === 0 ? 'active-service' : ''}}">
                                            <span class="numb custom-font">0{{$loop->iteration}}.</span>
                                            <a href="#position-{{$job->id}}" 
                                               class="position-tab custom-sub-title {{ $index === 0 ? 'active-link' : '' }}"
                                               data-position-id="{{$job->id}}" style="text-decoration: none;">
                                                {{$job->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab Content Area -->
                <div class="col-lg-8">
                    <div class="position-content-area">
                        @foreach ($jobs as $index => $job)
                            <div class="position-content" 
                                 id="position-{{$job->id}}" 
                                 style="{{ $index === 0 ? '' : 'display: none;' }}">
                                
                                <div class="item-job wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="job-title mb-20">
                                        <h3 class="playfont">{{$job->title}}</h3>
                                        <div class="flex-symbol mt-10 mb-20">
                                            <span class="line"></span>
                                            <span class="circle"></span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="job-details">
                                        <div class="job-info-grid">
                                            <div class="job-info-item">
                                                <h6 class="custom-font custom-sub-title">{{ trans('front.job type') }}</h6>
                                                <p class="custom-sub-title">{{$job->type}}</p>
                                            </div>
                                            <div class="job-info-item">
                                                <h6 class="custom-font custom-sub-title">{{ trans('front.location') }}</h6>
                                                <p class="custom-sub-title">{{$job->location}}</p>
                                            </div>
                                            <div class="job-info-item">
                                                <h6 class="custom-font custom-sub-title">{{ trans('front.experience') }}</h6>
                                                <p class="custom-sub-title">{{$job->experience}}</p>
                                            </div>
                                            <div class="job-info-item">
                                                <h6 class="custom-font custom-sub-title">{{ trans('front.code') }}</h6>
                                                <p class="custom-sub-title">{{$job->code}}</p>
                                            </div>
                                            <div class="job-info-item">
                                                <h6 class="custom-font custom-sub-title">{{ trans('front.posted date') }}</h6>
                                                <p class="custom-sub-title">{{$job->updated_at->format('d/m/Y')}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="job-description mt-40">
                                            <h5 class="playfont mb-20 custom-sub-title">{{ trans('front.description') }}</h5>
                                            <p class="custom-sub-title">{{$job->description}}</p>
                                        </div>
                                        
                                        <div class="job-description mt-30">
                                            <h5 class="playfont mb-20 custom-sub-title">{{ trans('front.responsibilities') }}</h5>
                                            <p class="custom-sub-title">{{$job->responsibilities}}</p>
                                        </div>
                                        
                                        <div class="job-action mt-40">
                                            <a href="{{route('jobs.apply',$job->id)}}" class="btn-curve btn-color">
                                                <span class="custom-sub-title">{{ trans('front.apply now') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-pattern bg-img bg-repeat" data-background="{{ asset('assets/front-assets/img/dots.png') }}"></div>
    </section>
    <!-- ==================== End Open Positions ==================== -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add click event to position tabs
        const positionTabs = document.querySelectorAll('.position-tab');
        
        positionTabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs and parent li elements
                positionTabs.forEach(t => {
                    t.classList.remove('active-link');
                    t.closest('li').classList.remove('active-service');
                });
                
                // Add active class to clicked tab and parent li
                this.classList.add('active-link');
                this.closest('li').classList.add('active-service');
                
                // Hide all position content
                const positionContents = document.querySelectorAll('.position-content');
                positionContents.forEach(content => {
                    content.style.display = 'none';
                });
                
                // Show the selected position content
                const targetId = this.getAttribute('href');
                document.querySelector(targetId).style.display = 'block';
            });
        });
    });
    </script>
</x-front-layout>

<style>
/* Custom CSS for Careers page */
.active-service {
    position: relative;
}

.active-service::before {
    content: '';
    position: absolute;
    left: -20px;
    top: 50%;
    width: 10px;
    height: 2px;
    background: #b19777;
    transform: translateY(-50%);
}

.active-link {
    color: #b19777 !important;
    font-weight: 600;
}

.flex-symbol {
    display: flex;
    align-items: center;
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

.specialty ul li {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0,0,0,.05);
    transition: all .3s;
}

.specialty ul li:hover {
    padding-left: 5px;
}

.specialty ul li span.numb {
    font-size: 18px;
    color: #b19777;
    margin-right: 10px;
}

.specialty ul li a {
    color: #1a1a1a;
    font-size: 16px;
    transition: all .3s;
}

.specialty ul li a:hover {
    color: #b19777;
}

.item-bx {
    padding: 30px;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.05);
    background: #fff;
    border-radius: 5px;
}

.item-job {
    padding: 40px;
    background-color: #fff;
    box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
    transition: all .3s;
}

.item-job:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.1);
}

.job-info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 25px 0;
    border-top: 1px solid rgba(0,0,0,.05);
    border-bottom: 1px solid rgba(0,0,0,.05);
}

.job-info-item h6 {
    color: #b19777;
    margin-bottom: 10px;
    font-size: 14px;
    font-weight: 600;
}

.job-info-item p {
    font-size: 16px;
}

.job-description h5 {
    position: relative;
    padding-bottom: 10px;
}

.job-description h5:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: #b19777;
}

.job-action {
    margin-top: 40px;
    border-top: 1px solid rgba(0,0,0,.05);
    padding-top: 30px;
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

.halfbg .content {
    position: relative;
    padding: 80px;
}

@media (max-width: 991px) {
    .job-info-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 767px) {
    .item-job {
        padding: 25px;
    }
    
    .job-info-grid {
        grid-template-columns: 1fr;
    }
    
    .section-padding {
        padding: 60px 0;
    }
    
    .halfbg .content {
        padding: 50px 20px;
    }
}
</style>