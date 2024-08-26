@php
    $images = $item->getMedia('works');
@endphp
<section class="tp-portfolio-details-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-portfolio-details-wrapper">
                    {{-- <h3 class="tp-portfolio-details-title">You can dream, create, build <br> the most wonderful place in
                        the world.</h3> --}}
                    <div class="tp-portfolio-details-wrap">
                        <ul class="d-flex justify-content-center">
                            <li class="mb-20"><span>{{trans('table.columns.client name')}}:</span>{{ $item->client_name }}</li>
                            <li class="mb-20"><span>{{trans('table.columns.start date')}}:</span>{{ $item->transaction_start_date }}</li>
                            <li class="mb-20"><span>{{trans('table.columns.end date')}}:</span>{{ $item->transaction_end_date }}</li>
                            <li class="mb-20"><span>{{trans('table.columns.duration of work')}}:</span>{{ $item->duration_of_work }}</li>
                        </ul>
                    </div>
                    <h6 class="fw-bold">{{ trans('table.columns.description') }}</h6>
                    <p class="text-1">{{ $item->description }}</p>
                    <div class="tp-portfolio-details-thumb">
                        {{-- <div class="tp-portfolio-slider tp-cursor-point-area">
                            <div class="tp-portfolio-active swiper slider-drag">
                                <div class="swiper-wrapper">
                                    @foreach ($item->getMedia('works') as $img)
                                        <div class="swiper-slide">
                                            <img height="100%" width="100%" src="{{$img->getUrl()}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}

                        <div class="product__details-thumb-tab mr-70">
                            <div class="product__details-thumb-content w-img">
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach ($images as $img)
                                    <div @class(['tab-pane fade', 'show active' => $loop->last]) id="nav-{{$loop->iteration}}" role="tabpanel" aria-labelledby="nav-{{$loop->iteration}}-tab">
                                        <img src="{{$img->getUrl()}}" alt="" style="height: auto !important">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product__details-thumb-nav tp-tab">
                                <nav>
                                    <div class="nav nav-tabs justify-content-sm-start" id="nav-tab" role="tablist">
                                        @foreach ($images as $img)
                                        <button @class(['nav-link m-1', 'active' => $loop->first]) id="nav-{{$loop->iteration}}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{$loop->iteration}}"
                                            type="button" role="tab" aria-controls="nav-{{$loop->iteration}}" aria-selected="true">
                                            <img src="{{$img->getUrl()}}" alt="">
                                        </button>
                                        @endforeach
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <h6 class="fw-bold">{{ trans('table.columns.content') }}</h6>
                    <p class="text-2">{!! $item->content !!}</p>
                    {{-- <h4 class="tp-portfolio-details-title-2">The challenge of project</h4>
                    <p class="text-3">Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur
                        turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing</p>
                    <div class="tp-portfolio-details-wrap-box">
                        <div class="tp-portfolio-details-box-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-portfolio-details-thumb-2">
                                        <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-portfolio-details-list">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span> Lorem ipsum is simply
                                                free text used by copytyping refreshing. Neque porro qui dolorem ipsum
                                                quia quaed inventore veritatis et quasi </li>
                                            <li><span><i class="fa-regular fa-check"></i></span> Neque porro est qui
                                                dolorem ipsum quia quaed inventore veritatis et quasi
                                                architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim var sed efficitur turpis gilla sed </li>
                                            <li><span><i class="fa-regular fa-check"></i></span> Lorem ipsum is simply
                                                free text used by copytyping refreshing. Neque porro qui dolorem ipsum
                                                quia quaed inventore veritatis et quasi </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-portfolio-details-share-area d-flex justify-content-between">
                            <div class="tp-portfolio-details-btn">
                                <a href="#">Construction</a>
                                <a href="#">Repair</a>
                                <a href="#">AC</a>
                            </div>
                            <div class="tp-portfolio-details-share">
                                <a href="#">
                                    <span><i class="fa-solid fa-share-nodes"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="tp-portfolio-details-np-area d-flex justify-content-between">
                            <div class="tp-portfolio-details-prev">
                                <p><a href="#"><i class="fa-solid fa-arrow-left"></i> Previous</a></p>
                                <h5 class="tp-portfolio-details-prev-title">Indoor linghiting systems</h5>
                            </div>
                            <div class="tp-portfolio-details-prev text-end">
                                <p><a href="#"> Next <i class="fa-solid fa-arrow-right"></i></a></p>
                                <h5 class="tp-portfolio-details-prev-title">France villa repairing</h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
