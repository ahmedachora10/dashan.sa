<!--=================================
				FAQ -->
				<section class="faq grid section-padding">
        			<div class="container">
						<div class="row justify-content-between">
							<div class="col-xxl-5 col-lg-6">
								<div class="tit">
                    				<h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">{{headline('faq')->title}}</h6>
                    				<p class="wow fadeInUp" data-wow-delay=".3s">{{headline('faq')->subTitle}}</p>
								</div>
							</div>
							<div class="col-lg-6 mt-4 mt-md-5 mt-lg-0">
								<div class="accordion wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms" id="pgsaccordion">
								@foreach ($faqs as $question )
									<div class="accordion-item">
										<h5 class="accordion-header" id="headingOne" style="background-color:#252531; color: rgb(177, 151, 119);">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#252531; color: rgb(177, 151, 119) !important;">{{$loop->iteration}}. {{ $question->question }}</button>
										</h5>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#pgsaccordion">
											<div class="accordion-body">{{ $question->answer }}</div>
										</div>
									</div>
								@endforeach
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--=================================
				FAQ -->