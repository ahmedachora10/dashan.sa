<!-- ==================== Start Footer ==================== -->
<footer class="modern-footer pt-80">
  <div class="footer-container">
    <div class="container ontop">
      <div class="row pb-30 bord-thin-bottom">
        <div class="col-lg-2">
          <div class="logo icon-img-120">
            <img src="{{asset(setting('logo'))}}" alt="logo" />
          </div>
        </div>
        <div class="col-lg-10 d-flex align-items-center justify-content-start">
          <h6 class="footer_title custom-sub-title-footer">
          {{ headline('footer')->title }}
          </h6>
        </div>
      </div>
      <div class="row pt-80">
        <div class="col-lg-7">
          <div>
            <h4 class="d-slideup wow ">
              <span class="sideup-text">
                <span class="up-text custom-sub-title-footer">
                {{ headline('footer')->subTitle }}
                 </span>
              </span>
              <span class="sideup-text">
                <span class="up-text underline">
                  <a href="{{route('contact')}}" class="main-color">
                    {{trans('front.click here')}}
                  </a>
                </span>
              </span>
            </h4>
            <div class="info mt-80 d-flex align-items-center row">
              <div class="col-lg-6 col-12">
                <a href="mailto:{{ setting('email') }}" class="butn butn-md butn-bord-thin radius-30 w-100 text-center">
                  <span class="text">
                  {{ setting('email') }}
                  </span>
                </a>
              </div>
              <div class="col-lg-6 col- mt-4 mt-lg-0">
                <a href="tel:{{ setting('phone') }}" class="butn butn-md butn-bord-thin radius-30 w-100 text-center">
                  <span class="text" style="direction: ltr; unicode-bidi: embed;">
                  &#x200E;+{{ setting('phone') }}
                  </span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="subscribe-minimal mt-4 col-12 col-lg-6">
                <a href="{{asset(app()->getLocale() == 'ar' ? setting('profile_file_ar') : setting('profile_file_en'))}}" 
                   class="butn butn-md butn-bord-thin radius-30 w-100 d-flex align-items-center justify-content-center" style=" text-decoration: none;"
                   download>
                  <span class="custom-sub-title">{{trans('footer.download-profile')}}</span>
                  <i class="fas fa-cloud-download-alt" style="color: #b19777 !important;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-{{app()->getLocale() == 'ar' ? '3' : '4'}} offset-lg-1 bord-left">
          <div class="column">
            <h6 class="custom-sub-title mb-30">
              {{trans('footer.quick-links')}}
            </h6>
            <div class="">
              <div class="">
                <ul class="rest fz-14 row row-cols-1 row-cols-3 g-4">
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('home')}}" style=" text-decoration: none;">{{trans('front.home')}}</a>
                  </li>
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('about-us')}}" style=" text-decoration: none;">{{trans('front.about')}}</a>
                  </li>
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('works.index')}}" style=" text-decoration: none;">{{trans('front.our works')}}</a>
                  </li>
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('services.all')}}" style=" text-decoration: none;">{{trans('front.services')}}</a>
                  </li>
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('career.index')}}" style=" text-decoration: none;">{{trans('front.career')}}</a>
                  </li>
                  <li class="mb-15 col custom-sub-title-footer">
                    <a href="{{route('contact')}}" style=" text-decoration: none;">{{trans('front.contact us')}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center pt-30 pb-30 sub-bg mt-80">
      @if(app()->getLocale() == 'ar')
                        {{ Str::before(setting('footer_ar'), 'بواسطة') }} 
                        بواسطة 
                        <a href="https://sadnah.sa/" target="_blank">
                            <img src="{{ asset('storage/images/logo/sadanah.png') }}" alt="شعار" style="height: 30px; vertical-align: middle;">
                        </a>
                        {{ Str::after(setting('footer_ar'), 'بواسطة') }} {{ date('Y') }}©
                    @else
                        {{ Str::before(setting('footer_en'), 'by') }} 
                        by 
                        <a href="https://sadnah.sa/" target="_blank">
                            <img src="{{ asset('storage/images/logo/sadanah.png') }}" alt="Logo" style="height: 30px; vertical-align: middle;">
                        </a>
                        {{ Str::after(setting('footer_en'), 'by') }} {{ date('Y') }}©
                    @endif
      </div>
    </div>
  </div>
</footer>
<!-- ==================== End Footer ==================== -->