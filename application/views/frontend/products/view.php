	<!-- Transition Object
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title text-capitalize">
            <span>Mowöen</span>
            <?=@$type?>
        </h1>
    </div> -->

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href="<?=base_url('assets/plugins/lightbox/css/lightbox.min.css')?>" rel="stylesheet" />
	
	<script src="<?=base_url('assets/js/slick.js')?>"></script>
	<script>
		$(document).ready(function () {	
			$('.product-slick').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				asNavFor: '.slider-nav',
				autoplay: false,
			});
			$('.slider-nav').slick({
				vertical: false,
				slidesToShow: 5,
				slidesToScroll: 1,
				asNavFor: '.product-slick',
				arrows: false,
				dots: false,
				focusOnSelect: true,
				autoplay: false,
			});
		});
	</script>
	<script src="<?=base_url('assets/plugins/lightbox/js/lightbox.min.js')?>" type="text/javascript"></script>

	<main class="ashade-content-wrap uws-default uws-eshop-detail">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="breadcrumbs mb-3">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="breadcrumb">
								<a href="<?=base_url()?>">Home</a>
								<span class="slash-divider">/</span>
								<?php if (isset($category)) {$space='';?>
								<span>
									<?php foreach ($category as $n) {?>
										<?=$space;?><a class="crumb" href="<?=base_url($n->type.'/products?cat_id='.$n->id)?>"><?=@$n->title?></a>
									<?php $space='<span class="slash-divider">/</span>';} ?>
									<?php } ?>
								</span>
								<span class="slash-divider">/</span>
								<a href="<?=base_url()?>" class="current-link"><?=@$product_data->title?></a>
							</div>
						</div>
					</div>
				</section>
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="row ashade-small-gap">
								<div class="col-12 col-sm-6 uws-content-photo">
									<?php if ((@$product_data->gallery) && @count(json_decode($product_data->gallery)) == 0) {?>
										<div class="product-slick">
											<?php if (@$video_attach && @$video_attach!='') {?>
											<div class="d-flex justify-content-center align-items-center">
												<div class="embed-responsive embed-responsive-1by1">
													<video width="640" height="480" controls>
														<source src="<?=@base_url('assets/uploads/'.$video_attach)?>" />
														Your browser does not support the video tag.
													</video>
												</div>
											</div>
											<?php } ?>
											<div>
												<a href="<?=@base_url($product_data->image)?>" data-lightbox="roadtrip"><img src="<?=@base_url($product_data->image)?>" alt="" class="img-fluid"></a>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-12 col-slick"><!-- Slider Thumb -->
												<div class="slider-nav ratio_square">
													<?php if (@$video_attach && @$video_attach!='') {?>
														<div>
															<div class="nav-item thumb bg-size position-relative video_play" data-toggle="modal" data-target="#modalVideo" style="background-image:url('<?=@base_url($video_attach_thumb)?>')"><span class="btn-play-video"><i class="fa fa-youtube"></i></span></div>
														</div>
													<?php } ?>
													<div>
														<div class="nav-item thumb bg-size" style="background-image:url('<?=@base_url($product_data->thumb)?>')"></div>
													</div>
												</div>
											</div>
										</div>
										<?php if ((@$circleview) && @count($circleview) != 0) { ?>
											<div class="circleview"><a class="btncircle" data-toggle="modal" data-target="#featureModal2"><img src="<?=base_url('assets/img/360-degrees.png')?>"></a></div>
										<?php } ?>
									<?php } else { ?>
										<div class="product-slick"><!-- Slider Main -->
											<?php if (@$video_attach && @$video_attach!='') {?>
											<div class="d-flex justify-content-center align-items-center">
												<div class="embed-responsive embed-responsive-1by1">
													<video width="640" height="480" controls>
														<source src="<?=@base_url('assets/uploads/'.$video_attach)?>" />
														Your browser does not support the video tag.
													</video>
												</div>
											</div>
											<?php } ?>
											<div>
												<a href="<?=@base_url($product_data->image)?>" data-lightbox="roadtrip"><img src="<?=@base_url($product_data->image)?>" alt="" class="img-fluid"></a>
											</div>
											<?php foreach (json_decode($product_data->gallery) as $item) {?>
											<div>
												<a href="<?=@($item)?>" data-lightbox="roadtrip"><img src="<?=@($item)?>" alt="" class="img-fluid"></a>
											</div>
											<?php } ?>
										</div>
										<div class="row">
											<div class="col-md-12 col-12 col-slick"><!-- Slider Thumb -->
												<div class="slider-nav ratio_square">
													<?php if (@$video_attach && @$video_attach!='') {?>
													<div>
														<div class="nav-item thumb bg-size position-relative video_play" data-toggle="modal" data-target="#modalVideo" style="background-image:url('<?=@base_url($video_attach_thumb)?>')"><span class="btn-play-video"><i class="fab fa-youtube"></i></span></div>
													</div>
													<?php } ?>
													<div>
														<div class="nav-item thumb bg-size" style="background-image:url('<?=@base_url($product_data->thumb)?>')"></div>
													</div>
													<?php foreach (json_decode($product_data->gallery) as $item) {?>
													<div>
														<div class="nav-item thumb bg-size" style="background-image:url('<?=@$item?>')"></div>
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
										
										<?php if ((@$circleview) && @count($circleview) != 0) { ?>
											<div class="circleview"><div class="btncircle" data-toggle="modal" data-target="#featureModal2"><img src="<?=base_url('assets/img/360-degrees.png')?>"></div></div>
										<?php } ?>
									<?php } ?>
								</div>
						
								<div class="col-12 col-sm-6 uws-content-text">
									<h3 class="product-title"><?=@$product_data->title?></h3>
									<div class="product-data">
										<p class="product-articlenumbers">
											<span><b>Model:</b> <span class="sku"><?=@$product_data->sku?></span></span><br>
											<span><span class="text-danger"><b>€ <?=@number_format($product_data->price,0,',','.')?></b></span></span>
										</p>
										<div class="product-cta">
											<a href="tel:<?=@$home_hotline?>" class="ashade-button">Contact Us</a>
											<a href="#productInfo" class="ashade-button scroll"><b>Detail</b></a>
										</div>
										<hr />
										<div class="product-description">
																		
										</div>
									</div>
								</div>
							</div>
								
							<div class="row ashade-small-gap mb-5">
								<div class="ashade-col col-12 align-left uws-content-detail">
						
									<div class="ashade-row uws-bath-types">
										<div class="ashade-col col-12">
											<div class="row uws-detail-info" id="productInfo">
												<div class="col-12 col-sm-6 uws-info-tex mt-5">
													<h5 class="text-uppercase">Description</h5>
													<?=@$product_data->short_description?>
													<?=@$product_data->descipriton?>
												</div>
												<div class="col-12 col-sm-6 uws-info-text specs mt-5">
													<h5 class="text-uppercase">Specification</h5>
													<div class="accordion" id="specificationsTabs">
														<div class="card"><!--Tab 1-->
															<div class="card-header" id="headingOne">
																<h2 class="mb-0">
																	<button class="btn text-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																		Technical Standard PDF
																	</button>
																</h2>
															</div>

															<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#specificationsTabs">
																<div class="card-body">
																	<a href="<?=base_url('assets/uploads/'.$file_attach[0]->prodpath)?>" class="d-flex align-self-center wrap-item align-items-center" target="_blank">
																		<span class="mr-2 file-icon">
																			<img src="<?=base_url('assets/img/icon-pdf.png')?>" width="24">
																		</span>
																		<span class="file-name"><u><?=@$file_attach[0]->prodname?></u></span>
																	</a>
																</div>
															</div>
														</div>
														<div class="card"><!--Tab 2-->
															<div class="card-header" id="headingTwo">
																<h2 class="mb-0">
																	<button class="btn text-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																		Manual Instruction
																	</button>
																</h2>
															</div>
															<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#specificationsTabs">
																<div class="card-body">
																	<a href="<?=base_url('assets/uploads/'.$file_attach[1]->prodpath)?>" class="d-flex align-self-center wrap-item align-items-center" target="_blank">
																		<span class="mr-2 file-icon">
																			<img src="<?=base_url('assets/img/icon-pdf.png')?>" width="24">
																		</span>
																		<span class="file-name"><u><?=@$file_attach[1]->prodname?></u></span>
																	</a>
																</div>
															</div>
														</div>
														<div class="card"><!--Tab 3-->
															<div class="card-header" id="headingThree">
																<h2 class="mb-0">
																	<button class="btn text-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																		Installation Manual PDF
																	</button>
																</h2>
															</div>
															<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#specificationsTabs">
																<div class="card-body">
																	<a href="<?=base_url('assets/uploads/'.$file_attach[2]->prodpath)?>" class="d-flex align-self-center wrap-item align-items-center" target="_blank">
																		<span class="mr-2 file-icon">
																			<img src="<?=base_url('assets/img/icon-pdf.png')?>" width="24">
																		</span>
																		<span class="file-name"><u><?=@$file_attach[2]->prodname?></u></span>
																	</a>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-header" id="heading4">
																<h2 class="mb-0">
																	<button class="btn text-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
																		Video & Media
																	</button>
																</h2>
															</div>
															<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#specificationsTabs">
																<div class="card-body">
																	[Coming soon]
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-header" id="heading4">
																<h2 class="mb-0">
																	<button class="btn text-white btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
																		3D Drawing
																	</button>
																</h2>
															</div>
															<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#specificationsTabs">
																<div class="card-body">
																	[Coming soon]
																</div>
															</div>
														</div>
													</div>
													&nbsp;
												</div>
											</div>
										</div>
						
									</div>
								</div>
							</div>

							<!-- related items -->
							<div class="row ashade-small-gap">
								<div class="col-12">
								<?php if($related_products) {?>
									<div class="product-related ratio_square">
										<h4 class="h5 title pt-1 mb-3 text-uppercase">Related Products</h4>
										<div class="slide-6">
										<?php foreach ($related_products as $item) {?>
											<div class="product-box">
												<div class="img-block">
													<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>" class="bg-size" style="background-image: url('<?=base_url($item->thumb)?>')"></a>
												</div>
												<div class="product-info product-content">
													<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>">
														<h6><b>Model:</b> <?=@$item->sku?></h6>
														<h6><span class="text-dark"><b>€ <?=@number_format($item->price,0,',','.')?></b></span></h6>
													</a>
													<!--<div class="item-price">
														<span itemprop="price" class="price amount"><h5>2.450.000 đ</h5></span>
														<span class="old-price regular-price">2.550.000 đ</span>
													</div>-->
												</div>
											</div>
										<?php } ?>		
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
							<!-- related items -->
						</div>
					</div>
				</section>
			</div>
	

	<!-- <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-21by9">
						<video width="640" height="480" controls>
							<source src="<?=@base_url('assets/uploads/'.$video_attach)?>" />
							Your browser does not support the video tag.
						</video>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="modal fade" id="featureModal2" tabindex="-1" aria-labelledby="featureLabel2" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content box-shadow ft-2">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
				<div class="pure_circle">
					<div id="circlr">
						<?php foreach (@$circleview as $item) {?>
						<img data-src="<?=@($item)?>" class="img-circle">
						<?php } ?>
						<div id="loader"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	let stopScrolling = false;

	window.addEventListener("touchmove", handleTouchMove, {
	passive: false
	});

	function handleTouchMove(e) {
	if (!stopScrolling) {
		return;
	}
	e.preventDefault();
	}

	function onTouchStart() {
	stopScrolling = true;
	}

	function onTouchEnd() {
	stopScrolling = false;
	}
	</script>