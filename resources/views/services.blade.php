<x-front-layout>
    
				<!-- ==================== Start Header ==================== -->
  
				<header class="pages-header bg-img valign parallaxie" data-background="{{asset($headerSlider->thumbnail)}}" data-overlay-dark="5">
    			    <div class="container">
    			        <div class="row">
    			            <div class="col-lg-12">
    			                <div class="cont text-center">
    			                    <h1 class="custom-sub-title">{{trans('front.services')}}</h1>
    			                    <div class="path">
    			                        <a class="custom-sub-header custom-sub-title" href="{{ route('home') }}">{{trans('front.home')}}</a><span>/</span><a href="#0" class="active custom-sub-header custom-sub-title">{{trans('front.services')}}</a>
    			                    </div>
    			                </div>
    			            </div>
    			        </div>
    			    </div>
    			</header>

    <!-- ==================== End Header ==================== -->
			<x-theme.sections.services :services="$ourServices" :servicesSlider="$servicesSlider"/>
			
    
</x-front-layout>
