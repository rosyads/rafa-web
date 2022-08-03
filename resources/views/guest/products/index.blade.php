@extends("guest.layouts.main")

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
@endsection

@section('head-scripts')
	<style>
		#product-color-dots .owl-dot {
			display: inline-block;
			background-color: transparent;
			width: 20px;
			height: 20px;
			margin: 0 2px;
			border-radius: 50%;
			cursor: pointer;
			border: 2px solid #FFF;
			box-shadow: 0 0 0 1px rgba(0,0,0,0);
			transform: scale(1);
			-webkit-transition: box-shadow .2s ease, transform .2s ease;
			-o-transition: box-shadow .2s ease, transform .2s ease;
			transition: box-shadow .2s ease, transform .2s ease;
		}

		#product-color-dots .owl-dot.active {
			box-shadow: 0 0 0 1px rgba(0,0,0,0.3);
			transform: scale(1.2);
		}
	</style>
@endsection

@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Zetta PACS</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/index">Home</a></li>
					<li class="breadcrumb-item"><a href="#">IT Healthcare</a></li>
					<li class="breadcrumb-item active" aria-current="page">Zetta PACS</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="single-product">
						<div class="product">
							<div class="row gutter-40">

								<div class="col-md-6">

									<div class="product-image">
										<div id="oc-shop" class="owl-carousel image-carousel carousel-widget custom-js">

											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/SO BRONZE.png" alt="Bronze Package - Software Only"></a>
											</div>
											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/BRONZE.png" alt="Bronze Package"></a>
											</div>
											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/SO.png" alt="Software Only"></a>
											</div>
											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/SILVER.png" alt="Silver Package"></a>
											</div>
											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/GOLD.png" alt="Gold Package"></a>
											</div>
											<div class="oc-item">
												<a href="#"><img src="/img/guest/products/zetta-pacs/PLATINUM.png" alt="Platinum Package"></a>
											</div>

										</div>
										{{-- <div class="sale-flash badge bg-danger p-2">Sale!</div> --}}
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col-md-6 product-desc">

									<div class="d-flex align-items-center justify-content-between">

										<!-- Product Single - Price
										============================================= -->
										{{-- <div class="product-price"><span class="product-price-value">Rp. 696.500.000,00</span></div><!-- Product Single - Price End --> --}}
										<div class="product-price">Rp. 696.500.000,00</div><!-- Product Single - Price End -->

										<!-- Product Single - Rating
										============================================= -->
										{{-- <div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
											<i class="icon-star-empty"></i>
										</div><!-- Product Single - Rating End --> --}}

									</div>

									<div class="line"></div>

									<!-- Product Single - Quantity & Cart Button
									============================================= -->
									{{-- <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data'>
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
											<input type="button" value="+" class="plus">
										</div>
										<button type="submit" class="add-to-cart button m-0">Add to cart</button>
									</form><!-- Product Single - Quantity & Cart Button End --> --}}

									<a id="e-katalog" href="https://e-katalog.lkpp.go.id/katalog/produk/detail/2572708?lang=id&type=general" class="button button-3d button-large button-rounded button-green">Link E-katalog</a>

									<div class="line"></div>

									<div class="row align-items-center">
										<div class="col-sm-8">
											<h5 class="fw-medium mb-3">Select Package:<span class="product-color-value ms-1 fw-semibold"></span></h5>
											<div id="product-color-dots" class="owl-dots">
												<button role="radio" class="owl-dot active" data-value="Bronze - Software Only" data-color="#cd7f32" data-modality="3&nbsp;" data-clinician="7&nbsp;" data-radiographer="1&nbsp;" data-radiologist="2&nbsp;" data-study="20.000/year of&nbsp;" data-price="Rp. 696.500.000,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/2572708?lang=id&type=general"></button>
												<button role="radio" class="owl-dot" data-value="Bronze Package" data-color="#f7993c" data-modality="3&nbsp;" data-clinician="7&nbsp;" data-radiographer="1&nbsp;" data-radiologist="2&nbsp;" data-study="20.000/year of&nbsp;" data-price="Rp. 978.279.800,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/2572611?lang=id&type=general"></button>
												<button role="radio" class="owl-dot" data-value="Software Only" data-color="#959595" data-modality="Unlimited&nbsp;" data-clinician="Unlimited&nbsp;" data-radiographer="Unlimited&nbsp;" data-radiologist="Unlimited&nbsp;" data-study="Unlimited&nbsp;" data-price="Rp. 1.250.000.000,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/1432007?lang=id&type=general"></button>
												<button role="radio" class="owl-dot" data-value="Silver Package" data-color="#c0c0c0" data-modality="Unlimited&nbsp;" data-clinician="Unlimited&nbsp;" data-radiographer="Unlimited&nbsp;" data-radiologist="Unlimited&nbsp;" data-study="Unlimited&nbsp;" data-price="Rp. 1.660.000.000,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/2572097?lang=id&type=general"></button>
												<button role="radio" class="owl-dot" data-value="Gold Package" data-color="#ffd700" data-modality="Unlimited&nbsp;" data-clinician="Unlimited&nbsp;" data-radiographer="Unlimited&nbsp;" data-radiologist="Unlimited&nbsp;" data-study="Unlimited&nbsp;" data-price="Rp. 2.200.000.000,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/2572032?lang=id&type=general"></button>
												<button role="radio" class="owl-dot" data-value="Platinum Package" data-color="#e5e4e2" data-modality="Unlimited&nbsp;" data-clinician="Unlimited&nbsp;" data-radiographer="Unlimited&nbsp;" data-radiologist="Unlimited&nbsp;" data-study="Unlimited&nbsp;" data-price="Rp. 2.500.000.000,00" data-link="https://e-katalog.lkpp.go.id/katalog/produk/detail/2571952?lang=id&type=general"></button>
											</div>
										</div>

										{{-- <div class="col-sm-6">
											<h5 class="fw-medium mb-3">Select Size:</h5>
											<div role="group">
												<input class="btn-check" type="radio" name="bag-size" id="bag-size-s" checked autocomplete="off" value="S">
												<label for="bag-size-s" class="btn btn-sm btn-outline-secondary fw-normal ls0 nott">S</label>

												<input class="btn-check" type="radio" name="bag-size" id="bag-size-m" autocomplete="off" value="M">
												<label for="bag-size-m" class="btn btn-sm btn-outline-secondary fw-normal ls0 nott">M</label>

												<input class="btn-check" type="radio" name="bag-size" id="bag-size-l" autocomplete="off" value="L">
												<label for="bag-size-l" class="btn btn-sm btn-outline-secondary fw-normal ls0 nott">L</label>

												<input class="btn-check" type="radio" name="bag-size" id="bag-size-xl" autocomplete="off" value="XL">
												<label for="bag-size-xl" class="btn btn-sm btn-outline-secondary fw-normal ls0 nott disabled" disabled="disabled"><del>XL</del></label>
											</div>
										</div> --}}
									</div>

									<div class="line"></div>

									<!-- Product Single - Short Description
									============================================= -->
									<p>Zetta PACS adalah aplikasi untuk Radiologi yang berfungsi untuk mengintegrasi antara alat-alat radiologi dengan SIMRS.</p>
									<ul class="iconlist">
										<li><i class="icon-caret-right"></i> <span class="study">20.000/year of&nbsp;</span> Studies</li>
										<li><i class="icon-caret-right"></i> <span class="radiologist">2&nbsp;</span> User Radiologist</li>
										<li><i class="icon-caret-right"></i> <span class="radiographer">1&nbsp;</span> User Radiographer</li>
										<li><i class="icon-caret-right"></i> <span class="clinicians">7&nbsp;</span> User Clinicians</li>
										<li><i class="icon-caret-right"></i> <span class="modality">3&nbsp;</span> Modalities</li>
									</ul><!-- Product Single - Short Description End -->

									<!-- Product Single - Meta
									============================================= -->
									<div class="card product-meta">
										<div class="card-body">
											<span itemprop="productID" class="sku_wrapper">No. Izin Edar: <span class="sku">AKL 21501023317</span></span>
											{{-- <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
											<span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span> --}}
										</div>
									</div><!-- Product Single - Meta End -->

									<div class="tabs clearfix my-5 mb-0" id="tab-1">

										<ul class="tab-nav clearfix">
											<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>
											<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Additional Information</span></a></li>
											<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Reviews (2)</span></a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tabs-1">
												<p>Deskripsi Zetta</p>
												Comes with and without hardware
											</div>
											<div class="tab-content clearfix" id="tabs-2">

												<table class="table table-striped table-bordered">
													<tbody>
														<tr>
															<td>Size</td>
															<td>Small, Medium &amp; Large</td>
														</tr>
														<tr>
															<td>Color</td>
															<td>Pink &amp; White</td>
														</tr>
														<tr>
															<td>Waist</td>
															<td>26 cm</td>
														</tr>
														<tr>
															<td>Length</td>
															<td>40 cm</td>
														</tr>
														<tr>
															<td>Chest</td>
															<td>33 inches</td>
														</tr>
														<tr>
															<td>Fabric</td>
															<td>Cotton, Silk &amp; Synthetic</td>
														</tr>
														<tr>
															<td>Warranty</td>
															<td>3 Months</td>
														</tr>
													</tbody>
												</table>

											</div>
											<div class="tab-content clearfix" id="tabs-3">

												<div id="reviews" class="clearfix">

													<ol class="commentlist clearfix">

														<li class="comment even thread-even depth-1" id="li-comment-1">
															<div id="comment-1" class="comment-wrap clearfix">

																<div class="comment-meta">
																	<div class="comment-author vcard">
																		<span class="comment-avatar clearfix">
																		<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																	</div>
																</div>

																<div class="comment-content clearfix">
																	<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2021 at 10:46AM</a></span></div>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
																	<div class="review-comment-ratings">
																		<i class="icon-star3"></i>
																		<i class="icon-star3"></i>
																		<i class="icon-star3"></i>
																		<i class="icon-star3"></i>
																		<i class="icon-star-half-full"></i>
																	</div>
																</div>

																<div class="clear"></div>

															</div>
														</li>

														<li class="comment even thread-even depth-1" id="li-comment-2">
															<div id="comment-2" class="comment-wrap clearfix">

																<div class="comment-meta">
																	<div class="comment-author vcard">
																		<span class="comment-avatar clearfix">
																		<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																	</div>
																</div>

																<div class="comment-content clearfix">
																	<div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2021 at 6:00PM</a></span></div>
																	<p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
																	<div class="review-comment-ratings">
																		<i class="icon-star3"></i>
																		<i class="icon-star3"></i>
																		<i class="icon-star3"></i>
																		<i class="icon-star-empty"></i>
																		<i class="icon-star-empty"></i>
																	</div>
																</div>

																<div class="clear"></div>

															</div>
														</li>

													</ol>

													<!-- Modal Reviews
													============================================= -->
													<a href="#" data-bs-toggle="modal" data-bs-target="#reviewFormModal" class="button button-3d m-0 float-end">Add a Review</a>

													<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
																	<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
																</div>
																<div class="modal-body">
																	<form class="row mb-0" id="template-reviewform" name="template-reviewform" action="#" method="post">

																		<div class="col-6 mb-3">
																			<label for="template-reviewform-name">Name <small>*</small></label>
																			<div class="input-group">
																				<div class="input-group-text"><i class="icon-user"></i></div>
																				<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
																			</div>
																		</div>

																		<div class="col-6 mb-3">
																			<label for="template-reviewform-email">Email <small>*</small></label>
																			<div class="input-group">
																				<div class="input-group-text">@</div>
																				<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
																			</div>
																		</div>

																		<div class="w-100"></div>

																		<div class="col-12 mb-3">
																			<label for="template-reviewform-rating">Rating</label>
																			<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-select">
																				<option value="">-- Select One --</option>
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																				<option value="5">5</option>
																			</select>
																		</div>

																		<div class="w-100"></div>

																		<div class="col-12 mb-3">
																			<label for="template-reviewform-comment">Comment <small>*</small></label>
																			<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
																		</div>

																		<div class="col-12">
																			<button class="button button-3d m-0" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
																		</div>

																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																</div>
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div><!-- /.modal -->
													<!-- Modal Reviews End -->

												</div>

											</div>

										</div>

									</div>

									<!-- Product Single - Share
									============================================= -->
									{{-- <div class="si-share d-flex justify-content-between align-items-center mt-4">
										<span>Share:</span>
										<div>
											<a href="#" class="social-icon si-borderless si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-pinterest">
												<i class="icon-pinterest"></i>
												<i class="icon-pinterest"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-rss">
												<i class="icon-rss"></i>
												<i class="icon-rss"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-email3">
												<i class="icon-email3"></i>
												<i class="icon-email3"></i>
											</a>
										</div>
									</div><!-- Product Single - Share End --> --}}

								</div>

							</div>
						</div>
					</div>

					<div class="line"></div>

					<div class="w-100">

						

					</div>

				</div>
			</div>
		</section><!-- #content end -->
    
@endsection

@section('scripts')
	<script>
		jQuery(window).on( 'pluginCarouselReady', function(){

			let colorValue	= $('.product-color-value'),
				productDots	= $('#product-color-dots'),
				currentOwl = $( '.owl-dot.active' ).attr( "data-value" ),
				currentLink = $("a[id='e-katalog']"),
				priceValue = $('.product-price'),
				studyValue = $('.study'),
				radiologistValue = $('.radiologist'),
				radiographerValue = $('.radiographer'),
				cliniciansValue = $('.clinicians'),
				modalityValue = $('.modality');

			colorValue.text( currentOwl );

			let owl = $('#oc-shop').owlCarousel({
				items: 1,
				dotsContainer: '#product-color-dots'
			});

			productDots.find('button').each( function(){
				let dot		= $(this),
					color	= dot.attr('data-color');

				dot.css({ 'background-color': color });
			});

			owl.on('changed.owl.carousel', function(event) {
				currentOwl = $( '.owl-dot.active' ).attr( "data-value" );
				newLink = $( '.owl-dot.active' ).attr( "data-link" );
				newPrice = $( '.owl-dot.active' ).attr( "data-price" );
				newStudy = $( '.owl-dot.active' ).attr( "data-study" );
				newRadiologist = $( '.owl-dot.active' ).attr( "data-radiologist" );
				newRadiographer = $( '.owl-dot.active' ).attr( "data-radiographer" );
				newClinician = $( '.owl-dot.active' ).attr( "data-clinician" );
				newModality = $( '.owl-dot.active' ).attr( "data-modality" );

				colorValue.text( currentOwl );
				priceValue.text( newPrice );
				currentLink.attr( 'href', newLink );
				studyValue.text( newStudy );
				radiologistValue.text( newRadiologist );
				radiographerValue.text( newRadiographer );
				cliniciansValue.text( newClinician );
				modalityValue.text( newModality );
			});

		});
	</script>
@endsection