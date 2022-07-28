	<main class="ashade-content-wrap uws-default uws-eshop-detail">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="breadcrumbs mb-3">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="breadcrumb">
								<a href="<?=base_url()?>">Home</a>
								<span class="slash-divider">/</span>
								<a href="<?=base_url()?>" class="current-link"><?=@$new_data->title?></a>
							</div>
						</div>
					</div>
				</section>
				
		
				<section class="page-title">
					<div class="row cleafix">
						<div class="col-sm-6">
							<div class="headline-group ">
								<div class="headline-lead"><span class="tag-type"><?=@$type?></span> | <span class="tag-type"><?=@$post_type?></span> | <small><i class="fa fa-list"></i> Đăng ngày: <?php echo date_format(date_create($new_data->create_time),"d/m/Y"); ?></small></div>
								<h1 class="h2"><?=@$new_data->title?></h1>
							</div>
						</div>
					</div>
				</section>
				
				<section class="blog-page blog-detail">
					<div class="">
						<div class="row clearfix">
							<div class="col-sm-6">
								<?=@$new_data->content?>
							</div>
						</div>
					</div>
				</section>
				
				<?php if (@$related_news) {?>
				<section id="list_category" class="home_feature_cat">
					<div class="container">
						<div class="row row-cols-2 row-cols-sm-3 row-cols-md-5">
							<?php if ($related_news) { foreach ($related_news as $item) {?>
							<div class="col"><!-- Col 1 -->
								<div class="item">
									<a href="<?=base_url($type.'/'.$post_type.'/'.$item->alias)?>" target="_self">
										<div class="inner has-image">
											<figure>
												<img src="<?=base_url($item->thumb)?>" alt="<?=$item->title?>" class="lazyload teaser_img img-holder" >
											</figure>
											<div class="teaser_body">
												<span class="btn btn--bright  centered trans"><b><?=$item->title?></b></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<?php }} ?>
						</div>
					</div>
				</section>
				<?php } ?>
			</div>