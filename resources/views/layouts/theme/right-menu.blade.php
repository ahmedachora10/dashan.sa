<!--=================================
			Right menu -->
			<div class="offcanvas offcanvas-end header-sidepanel bg-white" tabindex="-1" id="offcanvasRight">
				<div class="offcanvas-header text-end justify-content-end">
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<div class="offcanvas-body lenis-scroll-disable">
					<div class="sidebar-menu h-100 d-flex flex-column">
						<div class="about-us-box">
							<h5 class="title">{{headline('side-bar-header')->title}}</h5>
							<p>{{headline('side-bar-header')->subTitle}}</p>
						</div>

						<div class="widget-social">
							<ul class="social-icon">
								@if (setting('facebook'))<li>
									<i class="icon">
										<svg width="22" height="22" fill="#23a455" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
									</i>
									<a href="{{setting('facebook')}}" target="_blank">Facebook</a></li>@endif 
									@if(setting('instagram'))<li>
									<i class="icon">
										<svg width="22" height="22" fill="#23a455" viewBox="0 0 16 16">
											<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
										</svg>
									</i>
									<a href="{{setting('instagram')}}" target="_blank">Instagram</a></li>@endif 
									@if(setting('twitter'))<li>
									<i class="icon">
										<svg width="22" height="22" fill="#23a455" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
									</i>
									<a href="{{setting('twitter')}}" target="_blank">X</a></li>@endif 
									@if(setting('tiktok'))<li>
									<i class="icon fa-brands fa-tiktok" style="color: #a1ab3c;">
									</i>
									<a href="{{setting('tiktok')}}" target="_blank" class="social-icon">TikTok</a></li>@endif 
									@if(setting('whatsapp'))<li>
									<i class="icon fa-brands fa-whatsapp" style="color: #a1ab3c;">
									</i>
									<a href="{{setting('whatsapp')}}" target="_blank" class="social-icon">WhatsApp</a></li>@endif 
									@if(setting('snapchat'))<li>
									<i class="icon fa-brands fa-snapchat" style="color: #a1ab3c;">
									</i>
									<a href="{{setting('snapchat')}}" target="_blank" class="social-icon">Snapchat</a></li>@endif 
									@if (setting('telegram'))<li>
									<i class="icon fa-brands fa-telegram" style="color: #a1ab3c;">
									</i>
									<a href="{{setting('telegram')}}" target="_blank" class="social-icon">Telegram</a></li>@endif 
									@if(setting('youtube'))<li>
									<i class="icon fa-brands fa-youtube" style="color: #a1ab3c;">
									</i>
									<a href="{{setting('youtube')}}" target="_blank" class="social-icon">Youtube</a></li>@endif 

							</ul>
						</div>

						<div class="contact-info-box">
							<h4 class="title">{{trans('footer.office')}}</h4>
							<ul>
								<li><a href="mailto:{{setting('email')}}">{{setting('email')}}</a></li>
								<li><a href="tel:&#x200E;+{{setting('phone')}}">&#x200E;+{{setting('phone')}}</a></li>
								<li>{{trans('footer.address')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--=================================
			Right menu -->