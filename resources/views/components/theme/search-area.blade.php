<!--=================================
			Search -->
			<div id="search">
			 
				<button type="button" class="close"></button>
				<div class="search-inner">
					<h2 class="title">{{trans('front.search here')}}</h2>
					<form action="{{ route('search') }}" method="GET">
						<input type="search" name="query" placeholder="{{ trans('front.search') }}" required>
						<button class="search-btn btn" type="submit" ><span>{{ trans('front.search') }}</span></button>
					</form>
				</div>
			</div>
			<!--=================================
			Search -->