	
	<!-- Transition Object -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Products</span>
            Mowöen
        </h1>
    </div>

	<main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<h1 class="text-center"><?=@$category_data->title?></h1>
							<p class="ashade-intro">Nếu bạn yêu thích thiết kế trong phòng tắm cũng như nhà bếp và nhận ra tầm quan trọng của chất lượng sản phẩm, thì đây là nơi phù hợp nhất cho bạn. Bạn sẽ tìm thấy vô số sản phẩm cao cấp cho vòi hoa sen, phòng tắm và nhà bếp với Mowoen. Hãy tham khảo các dòng sản phẩm của chúng tôi: Vòi dùng cho bồn rửa mặt, vòi hoa sen và bồn tắm. Tất cả các loại vòi hoa sen: vòi hoa sen cầm tay, vòi hoa sen trên cao, vòi sen và hệ thống vòi hoa sen. Các sản phẩm nhà bếp, bao gồm vòi bếp, chậu rửa bát và các thiết bị combi chậu rửa và vòi.</p>
						</div>
					</div>
				</section>
				
				<section class="ashade-section ratio_square">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4">
								<?php if ($products) { foreach ($products as $item) { ?>	
								<div class="product-box  col">
									<div class="ashade-album-item__image img-block">
										<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>" class="bg-size" style="background-image: url('<?=base_url($item->thumb)?>')"></a>
									</div>
									<h5>
										<span><?=@$item->sku?></span>
										<?=@$item->title?>
									</h5>
									<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>" class="ashade-album-item__link"></a>
								</div>
								<?php }} ?>

								
							</div>
							<!-- <ul class="pagination js-pagination-list">
								<?php echo @$page_links;?>
							</ul> -->
						</div>
					</div>
				</section>
			</div><!-- content -->