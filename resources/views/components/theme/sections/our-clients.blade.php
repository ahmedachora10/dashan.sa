
@props(['OurClients' => []])
				<!--=================================
				Client Logo -->
				<section class="client-logo-section wow fadeInUp" data-swiper-animation="fadeInUp" data-duration="0.3s" data-delay="0.25s">
					<div class="rounded-section bg-dark space-medium-ptb">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h6 class="trusted-client">{{headline('our-clients')->title}}</h6>
									<div class="client-logos">
										<div class="owl-carousel client-logo-slider" data-cursor-type="arrow" data-nav-dots="false" data-nav-arrow="false" data-items="6" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="3" data-xx-items="2" data-space="82" data-autoheight="true">
											@foreach ($OurClients as $OurClient)
												<div class="item">
													<img class="img-fluid lazy" src="{{asset($OurClient->thumbnail)}}" alt="">
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--=================================
				Client Logo -->
