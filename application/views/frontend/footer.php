		
		<?php if (@$home_popup->content && @$home_popup->display == 1) {?>
		<div id="info_popup">
			<?=@$home_popup->content;?>
		</div>
		<style>
		#info_popup {display: none;}
		img.cboxPhoto { width:100% !importatnt; }
		</style>
		<?php } ?>
		
		<!-- Footer -->
		<footer id="ashade-footer">
			<div class="ashade-footer-inner">
				<div class="ashade-footer__socials">
					<ul class="ashade-socials">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
				<div class="ashade-footer__copyright">
					Copyright &copy; 2020. All Rights Reserved.
				</div>
			</div>
		</footer>
	</div><!-- .ashade-content-scroll -->
	</main>
    
    <!-- <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div> -->
	
	<!-- Right Menu -->
	<aside id="ashade-aside">
		<a href="#" class="ashade-aside-close">Close</a>
		<div class="ashade-aside-inner">
			<div class="ashade-aside-content">
				<div class="ashade-widget ashade-widget--about">
					<div class="ashade-widget--about__head">
						<img src="/uws_images/design/logo-white.png" class="img-responsive" alt="">
					</div>
					<h5 class="ashade-widget-title">
						<span>FOR OUR CUSTOMERS</span>
						Login
					</h5>
					<section class="ashade-section uws-ashade-section-log">
						<div class="ashade-row">
							<div class="ashade-col col-12">
								<form id="UWSform" name="UWSform" action="index.asp" method="post" role="form" class="ashade-contact-form uws-login-form">
									<div class="ashade-row ashade-small-gap">
										<div class="ashade-col col-12">
											<input type="text" name="login_name" id="login_name" placeholder="Your login or e-mail">
										</div>
										<div class="ashade-col col-12">
											<input type="password" name="login_pass" id="login_pass" placeholder="Your password">
										</div>

									</div>
									<div class="ashade-contact-form__footer">
										<div class="ashade-contact-form__response"></div>
										<div class="ashade-contact-form__submit">
											<input id="UWSreg_send" type="submit" name="UWSreg_send" value="Send">
										</div>
									</div>
								</form>

								<p class="align-right">
									<a href="/en/cooperation/forgot-password/" class="ashade-learn-more">Forgotten password</a>
								</p>
							</div>
						</div>
					</section>

					<h5 class="ashade-widget-title">
						<span>Cooperation</span>
						Registration
					</h5>
					<p>Register and buy better!</p>
					<p class="align-right">
						<a href="/en/cooperation/" class="ashade-learn-more">Registration</a>
					</p>
				</div>
			</div>
		</div>
	</aside>
	<!-- End Right Menu -->
	
    <!-- UI Elements -->
    <div class="ashade-home-block-overlay"></div>
    <div class="ashade-menu-overlay"></div>
    <div class="ashade-aside-overlay"></div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/js/frontend/gsap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/frontend/jquery.lazy.min.js')?>"></script>
	<script src="<?=base_url('assets/js/frontend/tiny-slider.js')?>"></script>
	<script src="<?=base_url('assets/js/frontend/photoswipe.min.js')?>"></script>
	<script src="<?=base_url('assets/js/frontend/photoswipe-ui-default.min.js')?>"></script>
	<script src="<?=base_url('assets/js/frontend/core.js')?>"></script>	
	<!-- <script src="<?=base_url('assets/js/frontend/ashade-ribbon.js')?>"></script>	 -->
	<script src="<?=base_url('assets/js/frontend/script.js')?>" type="text/javascript" ></script>
	<script src="<?=base_url('assets/js/360degreesview.js')?>" type="text/javascript" ></script>

	<?=@$global_footer_code;?>


</body>