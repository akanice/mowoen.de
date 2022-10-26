	
	<!-- Transition Object
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title text-capitalize">
            <span>Mowöen</span>
            <?=@$category_data->title?>
        </h1>
    </div> -->

	<main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<h4>Search Result: '<?=@$name?>'</h4>
				<h5>Total: <?=@$total?></h5>

				<section class="utility-bar mow">
					<div class="row ashade-row">
						<div class="col-12 col-md-6 col-lg-3 ashade-col">
							<?php if ($list_dimension) {
								$currentURL = current_url();
								$p_cat_id = $this->input->get('cat_id');
								$p_dimension = $this->input->get('dimension');
							?>
							<div class="filter_dimension">
								<select class="form-control filter" name="brand_alias" id="dynamic_select">
									<option value="<?=base_url($type.'/products/').'?cat_id='.urlencode(@$p_cat_id).'&dimension='?>" <?php if($p_dimension == '') {echo 'selected';}?>>All dimensions</option>
									<?php foreach ($list_dimension as $item) {?>
										<option value="<?=base_url($type.'/products/').'?cat_id='.urlencode(@$p_cat_id).'&dimension='.urlencode(@$item->dimension)?>" <?php if($p_dimension == $item->dimension) {echo 'selected';}?>>
											<?=$item->dimension?>
										</option>
									<?php }?>
								</select>
							</div>
							<?php } ?>
						</div>
					</div>
				</section>

				<section class="ashade-section ratio_square">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4">
								<?php if ($products) { foreach ($products as $item) { ?>	
								<div class="product-box  col">
									<div class="ashade-album-item__image img-block">
										<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>" class="bg-size" style="background-image: url('<?=base_url($item->thumb)?>')"></a>
									</div>
									<h5>
										<span><b class="text-white-50">Model: </b><?=@$item->sku?></span>
										<a href="<?=@base_url($item->type.'/products/'.$item->alias)?>" class="ashade-album-item__link"><?=@$item->title?></a>
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