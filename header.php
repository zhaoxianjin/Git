<!-- 苍茫的代码是我的爱！！！  -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php wp_title('-', true, 'right'); echo get_option('blogname'); if (is_home ()) echo ' — ' ,get_option('blogdescription'); if ($paged > 1) echo '-Page ', $paged; ?></title>
<?php
$sr_1 = 0; $sr_2 = 0; $commenton = 0;
if( dopt('d_sideroll_b') ){
    $sr_1 = dopt('d_sideroll_1');
    $sr_2 = dopt('d_sideroll_2');
}
if( is_singular() ){
    if( comments_open() ) $commenton = 1;
}
?>
<script>
window._deel = {name: '<?php bloginfo('name') ?>',url: '<?php echo get_bloginfo("template_url") ?>', ajaxpager: '<?php echo dopt('d_ajaxpager_b') ?>', commenton: <?php echo $commenton ?>, roll: [<?php echo $sr_1 ?>,<?php echo $sr_2 ?>]}
</script>
<?php
wp_head();
if( dopt('d_headcode_b') ) echo dopt('d_headcode'); ?>
<!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script><![endif]-->
</head>
<body <?php body_class(); ?>>

<?php if( dopt('d_wordhead_b') ){?>
<?php if( dopt('d_red_b') ) echo '<header id="header" class="header" style="background-color: #E74C3C;">'; ?><?php if( dopt('d_blue_b') ) echo '<header id="header" class="header" style="background-color: #3B5998;">'; ?><?php if( dopt('d_black_b') ) echo '<header id="header" class="header" style="background-color: #88898c;">'; ?><?php if( dopt('d_purple_b') ) echo '<header id="header" class="header" style="background-color: #9932CC;">'; ?><?php if( dopt('d_yellow_b') ) echo '<header id="header" class="header" style="background-color: #f5e011;">'; ?>
<?php } ?>
<?php if( dopt('d_pichead_b') ){?><header style="background: url('<?php bloginfo('template_url'); ?>/img/header.jpg') center 0px repeat-x;background-size: cover;" id="header" class="header"><?php } ?>
<?php if( dopt('d_touminnav_b') ) echo '<style type="text/css">#nav-header{background-color: rgba(85,84,85, 0.5);background: rgba(85,84,85, 0.5);color: rgba(85,84,85, 0.5);}</style>'; ?>
<?php if( dopt('d_red_b') ) echo '<style type="text/css">.navbar .nav li:hover a, .navbar .nav li.current-menu-item a, .navbar .nav li.current-menu-parent a, .navbar .nav li.current_page_item a, .navbar .nav li.current-post-ancestor a,.toggle-search ,#submit ,.btn{background: #E74C3C;}.pagination ul>.active>a,.pagination ul>.active>span,.navbar .nav li a:focus, .navbar .nav li a:hover {background-color: #E74C3C;}.footer{color: #E74C3C;}#submit:hover,.btn:hover ,.toggle-search:hover {background: #ac171e;} </style>'; ?>
<?php if( dopt('d_blue_b') ) echo '<style type="text/css">.navbar .nav li:hover a, .navbar .nav li.current-menu-item a, .navbar .nav li.current-menu-parent a, .navbar .nav li.current_page_item a, .navbar .nav li.current-post-ancestor a,.toggle-search ,#submit ,.btn{background: #3B5998;}.pagination ul>.active>a,.pagination ul>.active>span,.navbar .nav li a:focus, .navbar .nav li a:hover {background-color: #3B5998;}.footer{color: #3B5998;}#submit:hover,.btn:hover ,.toggle-search:hover {background: #2f477a;}</style>'; ?>
<?php if( dopt('d_black_b') ) echo '<style type="text/css">.navbar .nav li:hover a, .navbar .nav li.current-menu-item a, .navbar .nav li.current-menu-parent a, .navbar .nav li.current_page_item a, .navbar .nav li.current-post-ancestor a,.toggle-search ,#submit ,.btn{background: #88898c;}.pagination ul>.active>a,.pagination ul>.active>span,.navbar .nav li a:focus, .navbar .nav li a:hover {background-color: #88898c;}.footer{color: #88898c;}#submit:hover,.btn:hover ,.toggle-search:hover {background: #121314;}</style>'; ?>
<?php if( dopt('d_purple_b') ) echo '<style type="text/css">.navbar .nav li:hover a, .navbar .nav li.current-menu-item a, .navbar .nav li.current-menu-parent a, .navbar .nav li.current_page_item a, .navbar .nav li.current-post-ancestor a,.toggle-search ,#submit ,.btn{background: #9932CC;}.pagination ul>.active>a,.pagination ul>.active>span,.navbar .nav li a:focus, .navbar .nav li a:hover {background-color: #9932CC;}.footer{color: #9932CC;}#submit:hover,.btn:hover ,.toggle-search:hover {background: #9400D3;}</style>'; ?>
<?php if( dopt('d_yellow_b') ) echo '<style type="text/css">.navbar .nav li:hover a, .navbar .nav li.current-menu-item a, .navbar .nav li.current-menu-parent a, .navbar .nav li.current_page_item a, .navbar .nav li.current-post-ancestor a,.toggle-search ,#submit ,.btn{background: #f5e011;}.pagination ul>.active>a,.pagination ul>.active>span,.navbar .nav li a:focus, .navbar .nav li a:hover {background-color: #f5e011;}.footer{color: #f5e011;}#submit:hover,.btn:hover ,.toggle-search:hover {background: #ffbc06;}</style>'; ?>
<?php if( dopt('d_avataer_b') ) echo '<style type="text/css">.avatar{-webkit-transition:0.4s;-webkit-transition:-webkit-transform 0.4s ease-out;transition:transform 0.4s ease-out;-moz-transition:-moz-transform 0.4s ease-out;}.avatar:hover{transform:rotateZ(360deg);-webkit-transform:rotateZ(360deg);-moz-transform:rotateZ(360deg);}</style>'; ?>
<div class="container-inner"><div class="yusi-logo"><a href="/">
<h1><?php if( dopt('d_wordhead_b') ){?><span class="yusi-mono"><?php bloginfo('name'); ?></span><span class="yusi-bloger"><?php bloginfo('description'); ?></span><?php } ?>
<?php if( dopt('d_pichead_b') ){?><img src="<?php bloginfo('template_url'); ?>/img/logo.png"><?php } ?>
</h1></a></div></div>
<?php if( dopt('d_red_b') ) echo '<div id="nav-header" class="navbar" style="border-bottom: 4px solid #E74C3C ;">'; ?>
<?php if( dopt('d_blue_b') ) echo '<div id="nav-header" class="navbar" style="border-bottom: 4px solid #3B5998 ;">'; ?>
<?php if( dopt('d_black_b') ) echo '<div id="nav-header" class="navbar" style="border-bottom: 4px solid #88898c ;">'; ?>
<?php if( dopt('d_purple_b') ) echo '<div id="nav-header" class="navbar" style="border-bottom: 4px solid #9932CC ;">'; ?>
<?php if( dopt('d_yellow_b') ) echo '<div id="nav-header" class="navbar" style="border-bottom: 4px solid #f5e011 ;">'; ?>

<ul class="nav">
			<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false)) )); ?>
<li style="float:right;">
                    <div class="toggle-search"><i class="fa fa-search"></i></div>
<div class="search-expand" style="display: none;"><div class="search-expand-inner"><form method="get" class="searchform themeform" onsubmit="location.href='<?php echo home_url('/search/'); ?>' + encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;" action="/"><div> <input type="ext" class="search" name="s" onblur="if(this.value=='')this.value='search...';" onfocus="if(this.value=='search...')this.value='';" value="search..."></div></form></div></div>
</li>
		</ul>
	</div>
	</div>
</header>
<section class="container"><?php if( dopt('d_tui_b') ){?><div class="speedbar">
		<?php
		if( dopt('d_sign_b') ){
			global $current_user;
			get_currentuserinfo();
			$uid = $current_user->ID;
			$u_name = get_user_meta($uid,'nickname',true);
		?>
			<div class="pull-right">
				<?php if(is_user_logged_in()){ echo '<i class="fa fa-user"></i> <a href="/wp-admin">'.$u_name.'</a> ';   }else{  echo '<i class="fa fa-user"></i> <a href="/wp-login.php?action=register">注册</a>';   };  echo ' &nbsp; <i class="fa fa-power-off"></i> ';echo wp_loginout();echo'';  ?>
			</div>
		<?php } ?>
		<div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?php echo dopt('d_tui'); ?></div>
	</div>
	<?php } ?>
	<?php if( dopt('d_adsite_01_b') ) echo '<div class="banner banner-site">'.dopt('d_adsite_01').'</div>'; ?>