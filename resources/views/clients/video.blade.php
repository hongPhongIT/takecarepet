@extends('layouts.app')

@section('content')
    <!-- Banner -->

	<div class="banner-2">
		<div class="banner-2-background bg-primary"></div>
		<div class="pl-6 pr-6 pt-5">
			<div class="banner-2-dots"></div>

			<div class="owl-carousel owl-theme banner-2-slider">

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner-2-item">
						<div class="fill-height">
							<div class="row fill-height">
								<div class="col-lg-4 col-md-6 fill-height">
									<div class="pt-5">
										<div class="h5 text-dark">Service</div>
										<div class="h2 text-white font-weight-bold mt-3">Professional Pet Prooming</div>
										<div class="h1 text-dark mt-1 mb-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<button class="btn btn-secondary">Explore</button>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill-height">
									<div class="banner-2-image-container">
										<div class="banner-2-image"><img src="{{asset('image/video/banner_2_product.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner-2-item">
						<div class="fill-height">
							<div class="row fill-height">
								<div class="col-lg-4 col-md-6 fill-height">
									<div class="pt-5">
										<div class="h5 text-dark">Service</div>
										<div class="h2 text-white font-weight-bold mt-3">Professional Pet Prooming</div>
										<div class="h1 text-dark mt-1 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<button class="btn btn-secondary">Explore</button>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill-height">
									<div class="banner-2-image-container">
										<div class="banner-2-image"><img src="{{asset('image/video/banner_2_product.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner-2-item">
						<div class=" fill-height">
							<div class="row fill-height">
								<div class="col-lg-4 col-md-6 fill-height">
									<div class="pt-5">
										<div class="h5 text-dark">Service</div>
										<div class="h2 text-white font-weight-bold mt-3">Professional Pet Prooming</div>
										<div class="h1 text-dark mt-1 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<button class="btn btn-secondary">Explore</button>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill-height">
									<div class="banner-2-image-container">
										<div class="banner-2-image"><img src="{{asset('image/video/banner_2_product.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Video -->
	<div class="video">
		<div class="pl-6 pr-6 pt-5 pb-4 video-border">
			<div class="row">

				<!-- video Content -->
				<div class="col-lg-3">
					<div class="video-container">
						<h2 class="text-primary font-weight-bold">Video Mới Nhất</h2>
						<div class="video-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet  et.</p></div>
						<div class="video-slider-nav">
							<div class="video-new-prev video-nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="video-new-next video-nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- video Slider -->
				<div class="col-lg-9">
					<div class="video-slider-container">

						<!-- video Slider -->

						<div class="owl-carousel owl-theme video-new-slider">

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">					
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">					
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>

                                    </div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>										
	<div class="video">
		<div class="pl-6 pr-6 py-4">
			<div class="row">

				<!-- video Content -->
				<div class="col-lg-3 order-1 text-right">
					<div class="video-container pr-0">
						<h2 class="text-primary font-weight-bold">Video Mới Nhất</h2>
						<div class="video-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet  et.</p></div>
						<div class="video-slider-nav">
							<div class="video-takecare-prev video-nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="video-takecare-next video-nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- video Slider -->
				<div class="col-lg-9">
					<div class="video-slider-container">

						<!-- video Slider -->

						<div class="owl-carousel owl-theme video-takecare-slider">

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">					
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">					
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>

                                    </div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- video Slider Item -->
							<div class="owl-item">
								<div class="video-items is-new">
									<div class="video-image d-flex flex-column align-items-center justify-content-center">
										<div class="embed-responsive embed-responsive-16by9 h-100">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="video-content">
										<div class="video-title my-2"><a class="text-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing Donec ipsum dolor sit amet </a></div>
										<div class="video-info clearfix">
											<div class="text-gray video-text"><a class="text-gray" href="#">Smartphones</a></div>
											<div class="text-gray video-text">1 ngày trước</div>
										</div>
									</div>
									<div class="video-fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection