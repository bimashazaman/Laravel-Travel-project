	<!--overview -->
	<section id="gallery" class="overview">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="overview-content">
						<div class="overview-txt">

							@foreach ($home as $h)
								
							
							<h2>
								{{ __($h->title) }}
								{{-- <p>
									{{  __('Welcome to our website')}}
								</p> --}}
							</h2>
							<p>
								{{ __($h->subtitle) }}
							</p>
							@endforeach
						</div>
						<!--/.overview-txt-->
					</div>
					<!--/.overview-content-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->

	</section>
