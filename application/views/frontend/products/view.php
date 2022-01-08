	<!-- Transition Object -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Products</span>
            Mowöen
        </h1>
    </div>

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
				asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
				vertical: false,
				slidesToShow: 4,
				slidesToScroll: 1,
				asNavFor: '.product-slick',
				arrows: false,
				dots: false,
				focusOnSelect: true
			});
		});
	</script>
	<script src="<?=base_url('assets/plugins/lightbox/js/lightbox.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/360degreesview.js')?>" type="text/javascript" ></script>
	<script type="text/javascript">
		var crl = circlr('circlr', {
			scroll : true,
			loader : 'loader'
		});
	</script>	

	<main class="ashade-content-wrap uws-default uws-eshop-detail">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="row ashade-small-gap">
								<div class="col-12 col-sm-6 uws-content-photo">
									<?php if ((@$product_data->gallery) && @count(json_decode($product_data->gallery)) == 0) {?>
										<img src="<?=@base_url($product_data->image)?>" class="img-holder p_detail_img">
										<?php if ((@$circleview) && @count($circleview) != 0) { ?>
											<div class="circleview"><a class="btncircle" data-toggle="modal" data-target="#featureModal2"><img src="<?=base_url('assets/img/360-degrees.png')?>"></a></div>
										<?php } ?>
									<?php } else { ?>
										<div class="product-slick">
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
											<div class="col-md-10 offset-md-1 col-12 col-slick">
												<div class="slider-nav">
													<div>
														<div class="nav-item"></div>
													</div>
													<?php foreach (json_decode($product_data->gallery) as $item) {?>
													<div>
														<div class="nav-item"></div>
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
										
										<?php if ((@$circleview) && @count($circleview) != 0) { ?>
											<div class="circleview"><a class="btncircle" data-toggle="modal" data-target="#featureModal2"><img src="<?=base_url('assets/img/360-degrees.png')?>"></a></div>
										<?php } ?>
									<?php } ?>
									<div class="modal fade" id="featureModal2" tabindex="-1" aria-labelledby="featureLabel2" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content box-shadow ft-2">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
												<div class="pure_circle">
													<div id="circlr">
														<?php foreach ($circleview as $item) {?>
														<img data-src="<?=@($item)?>" class="img-circle">
														<?php } ?>
														<div id="loader"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						
								<div class="col-12 col-sm-6 uws-content-text">
									<h3 class="product-title"><?=@$product_data->title?></h3>
									<div class="product-data">
										<p class="product-articlenumbers">
											<span><b>Mã sản phẩm:</b> <?=@$product_data->sku?></span><br>
											<span><span class="text-danger"><b><?=@number_format($product_data->price,0,',','.')?> đ</b></span></span>
										</p>
										<div class="product-cta">
											<a href="tel:<?=@$home_hotline?>" class="ashade-button">Contact Us</a>
											<a href="#productInfo" class="ashade-button scroll"><b>Detail</b></a>
										</div>

										<div class="product-description">
																					
										</div>
									</div>
								</div>
							</div>
															
							<div class="row ashade-small-gap">
								<div class="ashade-col col-12 align-left uws-content-detail">
						
									<div class="ashade-row uws-bath-types">
										<div class="ashade-col col-12">
											<div class="row uws-detail-info" id="productInfo">
												<div class="col-12 col-sm-6 uws-info-tex mt-5">
													<h5>Description</h5>
													<?=@$product_data->short_description?>
													<?=@$product_data->descipriton?>
												</div>
												<div class="col-12 col-sm-6 uws-info-text mt-5">
													<h5>Specification</h5>
													<ul>
														<li>White color (standard)</li>
														<li>Other colors on demand (RAL sampler)</li>
														<li>Material: acrylate</li>
													</ul>
													&nbsp;
												</div>
											</div>
										</div>
						
									</div>
								</div>
							</div>
							<!-- related items -->
							
							<!-- related items -->
						</div>
					</div>
				</section>
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