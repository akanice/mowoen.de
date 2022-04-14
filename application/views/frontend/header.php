	<header id="ashade-header" class="header">
		<div class="ashade-header-inner">
            <div class="ashade-logo-block">
                <a href="<?=base_url('/')?>" class="ashade-logo is-retina">
                	<img src="<?=base_url('assets/img/logo_main.png')?>" alt="Mowoen Logo" width="128" height="110">
                </a>
            </div>
            <div class="ashade-nav-block">
                <nav class="ashade-nav">
                    <ul class="main-menu menu-header">
                        <li class="">
                            <a href="<?=base_url('')?>">Home</a>
                        </li>
						<li class="menu-item-has-children">
                            <a href="#">Bathroom</a>
                            <ul class="sub-menu">
                            <?php foreach ($bathroom_cat as $item) {?>
                                    <li><a href="<?=base_url('bathroom/products?cat_id='.$item->id)?>"><?=$item->title?></a></li>
                                <?php } ?>
                                <!-- <li><a href="<?=base_url('bathroom/products?cat_id=48')?>">Bồn tắm</a></li>
                                <li><a href="<?=base_url('bathroom/products?cat_id=49')?>">Tủ chậu phòng tắm</a></li>
                                <li><a href="<?=base_url('bathroom/products?cat_id=52')?>">Sen vòi bồn tắm</a></li> -->
                            </ul>
                        </li>
						<li class="menu-item-has-children">
                            <a href="#">Kitchen</a>
                            <ul class="sub-menu">
                                <?php foreach ($kitchen_cat as $item) {?>
                                    <li><a href="<?=base_url('kitchen/products?cat_id='.$item->id)?>"><?=$item->title?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
						<li><a href="<?=base_url('#')?>">About Us</a></li>
						<li><a href="<?=base_url('#')?>">Contacts</a></li>
						<li class="menu-item-has-children uws-languages" style="opacity: 1; transform: translate(0px, 0px);">
                            <a href="#" class="uws-lang-cs"><img src="/assets/img/flag-uk.png" class="uws-img-flag uws-img-cs">EN</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                <a href="<?=base_url('')?>" class="uws-lang-de">
                                    <img src="/assets/img/flag-de.png" class="uws-img-flag uws-img-uk">DE
                                </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="https://mowoen.vn" class="uws-lang-vn">
                                        <img src="/assets/img/flag-vn.png" class="uws-img-flag uws-img-vn">VN
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>