	
	<!-- Content -->
	<div class="ashade-albums-carousel-wrap">
		<div class="ashade-content uws-home-text">
			<section class="ashade-section" style="margin-top:40px;">
				<div class="ashade-row">
					<div class="ashade-col col-12 align-center">
						<h1><span>Design from Deutschland</span> Mowoen.de</h1>
						<h2 class="sub-heading">made in EU</h2>
					</div>
				</div>
			</section>
		</div>
		
		<?php if (@$cat_info) {?>
		<div class="ashade-albums-carousel is-medium" id="albums_carousel">
			<?php foreach ($cat_info as $item) { ?>	
			<div class="ashade-album-item">
				<div class="ashade-album-item__inner">
					<img src="<?=base_url($item->image)?>" alt="<?=$item->title?>" title="<?=$item->title?>" class="img-responsive" width="1200" height="800" />
					<div class="ashade-album-item__overlay"></div>
					<div class="ashade-album-item__title">
						<h2>
							<span>Mowoen.de</span>
							<?=$item->title?>
						</h2>
					</div>
					<a href="<?=base_url($item->type."/products?cat_id=".$item->id)?>" title="<?=$item->title?>" class="ashade-button">Detail</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="ashade-albums-carousel-progress">
			<div class="ashade-albums-carousel-progress__bar"></div>
		</div>
		<?php } ?>
	</div><!-- .ashade-albums-carousel-wrap -->
	<script src="<?=base_url('assets/js/frontend/ashade-ribbon.js')?>"></script>