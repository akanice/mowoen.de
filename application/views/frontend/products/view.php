	<div class="main product_detail">	
		<section id="sub-home-page-stage" class="yCmsContentSlot">
			<div class="stage stage--reduced">
				<div class="bg-top-page"></div>
			</div>
		</section>
		
		<section class="row-wrapper">
	        <div class="container">
				<h1 class="h2 page-title"><?=@$product_data->type?> <span class="font-weight-normal"><?=@$product_data->title?></span></h1>
			</div>
		</section>
		
		<script src="<?=base_url('assets/js/slick.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/lightbox/js/lightbox.min.js')?>" type="text/javascript"></script>
		<link href="<?=base_url('assets/plugins/lightbox/css/lightbox.min.css')?>" rel="stylesheet" />

		<section class="product-info">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-12 col-md-5">
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
					
					
					<div class="col-12 col-md-7">
						<div class="product-data">
							<p class="product-articlenumbers">
								<span><b>Mã sản phẩm:</b> <?=@$product_data->sku?></span><br>
								<span><span class="text-danger"><b><?=@number_format($product_data->price,0,',','.')?> đ</b></span></span>
							</p>
							<div class="product-cta">
								<a href="tel:<?=@$home_hotline?>" class="btn btn--primary">Liên hệ</a>
								<a href="#productInfo" class="btn btn--tertiary js-scrollto scroll"><b>Chi tiết</b></a>
							</div>

							<div class="product-description">
								<?=@$product_data->short_description?>&nbsp;
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="product-tabs">
			<div class="tab-menu">
				<div class="container">
					<ul class="nav nav-tabs" id="mowoenTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô tả</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">Thông số chi tiết</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="video-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Video</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="images-tab" data-toggle="tab" href="#images" role="tab" aria-controls="images" aria-selected="false">Hình ảnh thực tế</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Review</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content" id="productInfo">
				<div class="container">
					<div class="tab-content" id="mowoenTabContent">
						<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
							<?=@$product_data->description?>
						</div>
						<div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
							<?=@$product_data->specifications?>
						</div>
						<div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="video-tab">
							<div class="row">
								<?php if ($id_youtube && $id_youtube != '') { foreach ($id_youtube as $v) {
									if (count($id_youtube)>=2) {?>
									<div class="col-12 col-sm-6">
									<?php } else {?>
										<div class="col-12">
									<?php } ?>
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=@$v?>"></iframe>
										</div>
									</div>
								<?php }} ?>
							</div>
						</div>
						<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
							<?php  if($actual_image)  {?>
							<div class="grid-photos row">
								<?php foreach ($actual_image as $item) {?>
								<div class="col-6 col-sm-4 col-lg-3 photo-item">
									<a href="<?=@$item?>" data-lightbox="gallery_tab"><div class="image" style="background-image:url('<?=@$item?>')"></div></a>
								</div>
								<?php } ?>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
							<?=@$product_data->reviews?>
						</div>
					</div>
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