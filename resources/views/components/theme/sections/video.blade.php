@props(['sliders' => []])	
<!--=================================
				Video section -->
				<section>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="video-wrapper video-primary-overlay wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
								@foreach ($sliders as $slider )
									@if ($slider->title == 'home-middle-video')
										<video autoplay muted loop playsinline>
											<source src="{{asset($slider->thumbnail)}}" type="video/mp4">
										</video>
										@endif
        							@endforeach
									<div class="video-content">
										<a class="video-btn popup-youtube" href="{{setting('video')}}">
											<i class="fa-solid fa-play"></i>
										</a>
										<h3 class="video-title">{{ headline('home-video')->title }}</h3>
										<p class="text-white">{{ headline('home-video')->subTitle }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--=================================
				Video section -->