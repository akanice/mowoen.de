	<title><?php if ($title == '' or $title == null) {echo 'Mowoen';} else {echo 'Mowoen | '.$title;}?></title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="title" content="<?=@$meta_title?>" />
	<meta name="copyright" content="Copyright © 2021 by mowoen.de" />
	<meta name="keywords" content="<?=@$meta_keywords?>" />
	<meta name="description" content="<?=@$meta_description?>" />
	<meta name="og:title" content="<?php if (@$meta_title == '' or @$meta_title == null) {echo 'mowoen.com';} else {echo @$meta_title;}?>" />
	<meta name="og:keywords" content="<?=@$meta_keywords?>" />
	<meta name="og:description" content="<?=@$meta_description?>" />
	<meta property="og:image" content="<?php if (@$meta_images && @$meta_images != '') {echo base_url(@$meta_images);} else {echo base_url($home_logo);}?>" />
	<meta property="og:image:alt" content="<?php if (@$meta_images && @$meta_images != '') {echo base_url(@$meta_images);} else {echo base_url($home_logo);}?>" />
	
	<link rel="image_src" href="<?php if (@$meta_images && @$meta_images != '') {echo base_url(@$meta_images);} else {echo base_url($home_logo);}?>" / >
	<link rel="icon" href="<?=base_url('assets/img/favicon.png')?>" sizes="64x64" />
	<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.png')?>" sizes="64x64" />
	
	
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<!-- <script src="<?=base_url('assets/js/defer_plus.min.js')?>"></script>
	<script type="text/javascript">
	//deferscript('https:///platform-api.sharethis.com/js/sharethis.js#property=5c829ea19fbe5a0017077a7f&product=sticky-share-buttons', 'social-buttons', 3000);
	//deferimg('img', 100);
	//deferstyle('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=vietnamese', 'google-font-css', 1000);
	</script> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link href="<?=base_url('assets/css/line-awesome.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/photoswipe.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/default-skin/default-skin.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/tiny-slider.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/slick.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/slick-theme.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/responsive.css')?>" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700,900&display=swap" rel="stylesheet">
	<?=@$global_header_code;?>
	<?=@$post_header_code;?>
	<script>
		site_url = '<?=site_url();?>';
	</script>
	
		<!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		