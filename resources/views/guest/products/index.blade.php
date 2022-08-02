@extends("guest.layouts.main")

@section('stylesheets')
<link rel="stylesheet" href="/css/guest/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/css/guest/animate.css" type="text/css" />
<link rel="stylesheet" href="/css/guest/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="/css/guest/custom.css" type="text/css" />    
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="single-product">
						<div class="product">
							<div class="row gutter-40">

								<div class="col-md-6">

									<!-- Product Single - Gallery
									============================================= -->
									<div class="product-image">
										<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
											<div class="flexslider">
												<div class="slider-wrap" data-lightbox="gallery">
													<div class="slide" data-thumb="/img/guest/products/zetta-pacs/1.jpg"><a href="/img/guest/products/zetta-pacs/1.jpg" title="Zetta PACS - Front View" data-lightbox="gallery-item"><img src="/img/guest/products/zetta-pacs/1.jpg" alt="Zetta PACS"></a></div>
													<div class="slide" data-thumb="/img/guest/products/zetta-pacs/1-1.jpg"><a href="/img/guest/products/zetta-pacs/1-1.jpg" title="Zetta PACS - Side View" data-lightbox="gallery-item"><img src="/img/guest/products/zetta-pacs/1-1.jpg" alt="Zetta PACS"></a></div>
													<div class="slide" data-thumb="/img/guest/products/zetta-pacs/1-2.jpg"><a href="/img/guest/products/zetta-pacs/1-2.jpg" title="Zetta PACS - Back View" data-lightbox="gallery-item"><img src="/img/guest/products/zetta-pacs/1-2.jpg" alt="Zetta PACS"></a></div>
												</div>
											</div>
										</div>
										{{-- <div class="sale-flash badge bg-danger p-2">Sale!</div> --}}
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col-md-6 product-desc">

									<div class="d-flex align-items-center justify-content-between">

										<!-- Product Single - Price
										============================================= -->
										{{-- <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div><!-- Product Single - Price End --> --}}
                                        <div class="product-price">Rp. 1.660.000.000</div><!-- Product Single - Price End -->

										{{-- <!-- Product Single - Rating
										============================================= -->
										<div class="d-flex align-items-center">
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
											</div><!-- Product Single - Rating End -->
											<button type="button" class="btn btn-sm btn-secondary ms-3"><i class="icon-heart"></i></button>
										</div> --}}

									</div>

									<div class="line"></div>

									<!-- Product Single - Quantity & Cart Button
									============================================= -->
									<form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data'>
										{{-- <div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
											<input type="button" value="+" class="plus">
										</div> --}}
										<button type="submit" class="add-to-cart button m-0">Link E-katalog</button>
									</form><!-- Product Single - Quantity & Cart Button End -->

									<div class="line"></div>

									<!-- Product Single - Short Description
									============================================= -->
									<p>Zetta PACS adalah aplikasi untuk Radiologi yang berfungsi untuk mengintegrasi antara alat-alat radiologi dengan SIMRS</p>

									<ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">Study:</span><span class="text-dark fw-semibold">Unlimited</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">User:</span><span class="text-dark fw-semibold">Unlimited</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">Modality:</span><span class="text-dark fw-semibold">Unlimited</span>
										</li>
										{{-- <li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">Quantity:</span><span class="text-dark fw-semibold">7 Pcs</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">Return Policy:</span><span class="text-dark fw-semibold">30 days</span>
										</li> --}}
										<li class="list-group-item d-flex justify-content-between align-items-center px-0">
											<span class="text-muted">Nomor Ijin Edar:</span><span class="text-dark fw-semibold">AKL 21501023317</span>
										</li>
									</ul>

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

								<div class="w-100"></div>

								<div class="col-12 mt-5">

									<div class="tabs clearfix mb-0" id="tab-1">

										<ul class="tab-nav clearfix">
											<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>
											<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Additional Information</span></a></li>
											<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Reviews (2)</span></a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tabs-1">
												<p>Pink printed dress,  woven, round neck with a keyhole and buttoned closure at the back, sleeveless, concealed zip up at left side seam, belt loops along waist with slight gathers beneath, brand appliqu?? above left front hem, has an attached lining.</p>
												Comes with a white, slim synthetic belt that has a tang clasp.
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

								</div>

							</div>
						</div>
					</div>

					<div class="line"></div>

				</div>
			</div>
		</section><!-- #content end -->
    
@endsection