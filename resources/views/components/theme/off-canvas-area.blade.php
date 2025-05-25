<!--=================================
			Main Menu OffCanvas -->
			<div class="offcanvas main-menu-offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbar2Label">Main Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<div class="offcanvas-body lenis-scroll-disable">
					<div class="body-inner h-100 pe-3 lenis-scroll-disable">
						<nav class="navbar h-100">
							 <ul class="navbar-nav h-100">
								@include('layouts.theme.menu')
								<li class="nav-item"><a class="nav-link" href="{{route('switch-language')}}">
                            	        {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                        		</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!--=================================
			Main Menu OffCanvas -->