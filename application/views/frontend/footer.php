		<?php if (@$home_popup->content && @$home_popup->display == 1) {?>
		<div id="info_popup">
			<?=@$home_popup->content;?>
		</div>
		<style>
		#info_popup {display: none;}
		img.cboxPhoto { width:100% !importatnt; }
		</style>
		<?php } ?>
		
	<footer id="page-footer">
		<div class="row-wrapper">
			<div class="container row--nowrap d-flex">
				<div id="breadcrumbs" class="yCmsContentSlot">
					<nav data-t-name="Breadcrumbs" class="yCmsComponent breadcrumbs" data-t-id="8">
						<ol>
							<li class="breadcrumbs__home-link">
								Home<i class="fa fa-angle-right"></i>
							</li>
							<?=@$breadcrumb;?>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row-wrapper">
			<div class="container">
				
			</div>
		</div>

		<div class="row-wrapper">
			<div class="container">
				<nav class="footer-navigation">
					<ul class="js-accordeon row clearfix">
						<li class="js-accordeon-item footer-navigation__item col-md-3 col-6">
							<h4 class="js-accordeon-title footer-navigation__heading">Nhà tắm</h4>
							<ul class="js-accordeon-content" style="">
								<li class="footer-navigation-item__container">
									<a href="<?=base_url('bathroom/products?cat_id=2')?>">
										<h5 class="footer-navigation__link-title">
											<span>Vòi chậu rửa</span>
										</h5>
									</a>
									<p>Các sản phẩm vòi chậu rửa mặt nhà tắm</p>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=base_url('bathroom/products?cat_id=1')?>">
										<h5 class="footer-navigation__link-title">
											<span>Sen tắm</span>
										</h5>
									</a>
									<p>Các sản phẩm sen tắm</p>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=base_url('bathroom/products?cat_id=50')?>">
										<h5 class="footer-navigation__link-title">
											<span>Phụ kiện phòng tắm</span>
										</h5>
									</a>
									<p>Phụ kiện dành cho nhà tắm</p>
								</li>
							</ul>
						</li>
						
						<li class="js-accordeon-item footer-navigation__item col-md-3 col-6">
							<h4 class="js-accordeon-title footer-navigation__heading">Nhà Bếp</h4>
							<ul class="js-accordeon-content" style="">
								<li class="footer-navigation-item__container">
									<a href="<?=base_url('kitchen/products?cat_id=53')?>">
										<h5 class="footer-navigation__link-title">
											<span>Chậu rửa bát</span>
										</h5>
									</a>
									<p>Sản phẩm Chậu rửa bát phong cách hiện đại từ Mowoen</p>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=base_url('kitchen/products?cat_id=54')?>">
										<h5 class="footer-navigation__link-title">
											<span>Vòi rửa bát</span>
										</h5>
									</a>
									<p>Phụ kiện không thể thiếu của mỗi căn bếp</p>
								</li>
							</ul>
						</li>
						
						<li class="js-accordeon-item footer-navigation__item col-md-3 col-6 footer_col3">
							<h4 class="js-accordeon-title footer-navigation__heading">Series Premium</h4>
							<ul class="js-accordeon-content" style="">
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/dawn-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">DAWN</span> Series</span>
										</h5>
									</a>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/aurora-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">AURORA</span> Series</span>
										</h5>
									</a>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/sole-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">SOLE</span> Series</span>
										</h5>
									</a>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/luna-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">LUNA</span> Series</span>
										</h5>
									</a>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/giotto-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">GIOTTO</span> Series</span>
										</h5>
									</a>
								</li>
								<li class="footer-navigation-item__container">
									<a href="<?=@base_url('bathroom/inspiration/loca-series')?>">
										<h5 class="footer-navigation__link-title">
											<span><span class="text-highlight">LOCA</span> Series</span>
										</h5>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="js-accordeon-item footer-navigation__item col-md-3 col-6">
							<h4 class="js-accordeon-title footer-navigation__heading">Về Mowoen</h4>
							<ul class="js-accordeon-content" style="">
								<li class="footer-navigation-item__container">
									<a href="">
										<h5 class="footer-navigation__link-title">
											<span></span>
										</h5>
									</a>
									<p><b>"Not just bathing, but enjoying life from the products Mowoen brings."</b></p>
								</li>
								<li class="footer-navigation-item__container">
									<a href="#">
										<h5 class="footer-navigation__link-title">
											<span>Logo</span>
										</h5>
									</a>
									<p><i class="fa fa-map-marker"></i> Văn Phòng: Số 4 Chu Văn An, P.Yết Kiêu, Quận Hà Đông, Hà Nội</p>
									<p><i class="fa fa-envelope"></i> info@mowoen.vn</p>
									<p><i class="fa fa-phone"></i> <?=@$home_hotline?></p>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="">
					<div>
					</div>
					<div class="yCmsContentSlot footer-company">
					</div>
				</div>
			</div>
		</div>

		<div class="row-wrapper">
			<div class="container">
				<div class="legal-footer ">
					<div class="copyright">© Mowoen 2020</div>
					<nav>
						<ul>
							<li class="">
								<a href="/imprint" title="Imprint" target="">
									<span>Imprint</span>
								</a>
							</li>
							<li class="">
								<a href="/privacy" title="Privacy Policy" target="">
									<span>Privacy Policy</span>
								</a>
							</li>
							<li class="">
								<a href="/legal-notice" title="Legal Notice" target="">
									<span>Legal Notice</span>
								</a>
							</li>
							<li class="">
								<a href="/cookie-guidelines" title="Cookie Policy" target="">
									<span>Cookie Policy</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</footer>
		
</div>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/js/360degreesview.js')?>" type="text/javascript" ></script>
	<script type="text/javascript">
		// var crl = circlr('circlr', {
			// scroll : true,
			// loader : 'loader'
		// });
	</script>	
	<script src="<?=base_url('assets/plugins/owl-carousel/js/owl.carousel.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/core.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/script.js')?>" type="text/javascript"></script>
	<?=@$global_footer_code;?>