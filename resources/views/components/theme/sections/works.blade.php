<!-- project area start -->
<section class="tp-project-area tp-project-bottom-color p-relative pt-170">
    <div class="tp-project-text">
        <h4 class="tp-home-2-section-text">{{ strtoupper(trans('projects'))}}</h4>
    </div>
    <div class="tp-project-2-shape">
        <img src="{{asset('theme/img/project/home-2/project-2-shape.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="tp-project-title-wrapper mb-70">
                    {{-- <span class="tp-section-title-pre-2">// WE ARE CONSTRUCTION COMPANY</span>
                    <h3 class="tp-section-title">Check our projects</h3> --}}
                    <x-theme.headline key="work" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-project-tab-button masonary-menu d-flex justify-content-xl-end flex-wrap mb-70">
                    <button class="active" data-filter="*"><span>Show all</span></button>
                    <button data-filter=".cat2"><span>Architecture</span></button>
                    <button data-filter=".cat3"><span>Interior design</span></button>
                    <button data-filter=".cat4"><span>Residance</span></button>
                </div>
            </div>
        </div>
        <div class="row grid">
            @foreach ($works as $item)
            <div class="col-lg-4 col-md-6 grid-item cat2 cat{{$loop->iteration}} cat5">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="{{route('works.show', $item)}}">
                            <img width="370" height="438" src="{{$item->thumbnail}}" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>{{$item->client_name}}</span>
                        <h4 class="tp-project-item-title"><a href="{{route('works.show', $item)}}" title="{{$item->description}}">{{str($item->description)->limit(90)}}</a></h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 grid-item cat5 cat3 cat6">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="portfolio-details.html">
                            <img src="assets/img/project/project-2-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>Building</span>
                        <h4 class="tp-project-item-title"><a href="portfolio-details.html">Architecture</a></h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat3 cat2 cat6">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="portfolio-details.html">
                            <img src="assets/img/project/project-2-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>Building</span>
                        <h4 class="tp-project-item-title"><a href="portfolio-details.html">Real Estate</a></h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat4 cat2 cat6">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="portfolio-details.html">
                            <img src="assets/img/project/project-2-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>Building</span>
                        <h4 class="tp-project-item-title"><a href="portfolio-details.html">Interior architecture</a>
                        </h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat2 cat4 cat6">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="portfolio-details.html">
                            <img src="assets/img/project/project-2-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>Building</span>
                        <h4 class="tp-project-item-title"><a href="portfolio-details.html">Roofing architecture</a></h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat3 cat5 cat6">
                <div class="tp-project-item p-relative fix mb-30">
                    <div class="tp-project-thumb p-relative fix">
                        <a href="portfolio-details.html">
                            <img src="assets/img/project/project-2-6.jpg" alt="">
                        </a>
                    </div>
                    <div class="tp-project-item-content p-relative">
                        <span>Building</span>
                        <h4 class="tp-project-item-title"><a href="portfolio-details.html">Electrician architecture</a>
                        </h4>
                        <div class="tp-project-item-btn">
                            <a href="portfolio-details.html">
                                <span>
                                    <i class="fa-regular fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- project area end -->
