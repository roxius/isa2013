<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>
		<?php
			if (function_exists('is_tag') && is_tag()) {
			 single_tag_title("Listagem de Tags para &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
			 wp_title(''); echo ' Arquivos - '; }
			elseif (is_search()) {
			 echo 'Resultado de busca por &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
			 wp_title(''); echo ' - '; }
			elseif (is_404()) {
			 echo 'Página não encontrada - '; }
			if (is_home()) {
				wp_title(''); bloginfo('name'); /* echo ' - '; bloginfo('description'); */ }
			else {
			  bloginfo('name'); }
			if ($paged>1) {
			 echo ' - '. $paged; }
		?>
	</title>

	<?php global $baseUrl; ?>
	<?php global $homeUrl; ?>

	<!-- meta -->
	<meta name="keywords" content="interaction south america 13, interaction south america 2013, ixda, recife, brasil, conferencia, design de interação">
	<meta name="description" content="Interaction South America 13, 5° Conferência Latino Americana de Design de Interação, sediada no Recife">

	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo $baseUrl; ?>/img/favicon.ico" type="image/x-icon">

	<!-- facebook meta -->
	<?php /*
	<meta property="og:title" content="Interaction South America 13 - Recife / Brasil"/>
	<meta property="og:url" content="<?php echo $homeUrl; ?>"/>
	<meta property="og:image" content="http://www.isa.ixda.org/2013/isa13-facebook.png" />
	<meta property="og:description" content="Novas indústrias, novos modelos, novas interações. O Interaction South America é uma conferência anual que reúne profissionais e acadêmicos de Design e áreas relacionadas para participarem de Conversas, Palestras, Workshops e outras atividades para discutir sobre o papel do Design de Interação e o perfil do profissional no mercado e sua atuação na construção de uma nova economia."/> 
	*/
	?>

	<!-- viewport -->
	<meta name="viewport" content="width=device-width">

	<!-- author -->
	<link type="text/plain" rel="author" href="<?php echo $baseUrl; ?>/humans.txt" />

	<!-- main style -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css">
	
	<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- GA -->
	
	<!-- modernizr -->
	<script src="<?php echo $baseUrl; ?>/js/rv-modernizr.js"></script>
	<?php wp_head(); ?>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-39176453-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body <?php body_class(); ?> >
<p class="hide"><a href="#main-content" tabindex="1">Pular a navegação e ir direto para o conteúdo</a></p>
<header id="hd-wrapper">
	<div id="hd" class="centered">
		<div id="top-bar group">
			<ul class="isa13-social group">
				<?php /*
				<li>
					<a href="#" class="icon-alone fs-16">
						<span aria-hidden="true" data-icon="&#x73;"></span>
						<span class="screen-reader-text">Share</span>
					</a>
				</li> 
				 */ ?>
				<li>
					<a href="https://www.facebook.com/InteractionSouthAmerica" class="icon-alone">
						<span aria-hidden="true" data-icon="&#x66;"></span>
						<span class="screen-reader-text">Facebook</span>
					</a>
				</li>
				<li>		
					<a href="https://twitter.com/ISAmerica13" class="icon-alone">
						<span aria-hidden="true" data-icon="&#x74;"></span>
						<span class="screen-reader-text">Twitter</span>
					</a>	
				</li>				
				<?php /*			
				<li>
					<a href="#" class="icon-alone">
						<span aria-hidden="true" data-icon="&#x6c;"></span>
						<span class="screen-reader-text">LinkedIn</span>
					</a>
				</li> 
				*/ ?>
				<li>
					<a href="https://plus.google.com/u/0/b/100064025635605412866/100064025635605412866" class="icon-alone">
						<span aria-hidden="true" data-icon="&#x67;"></span>
						<span class="screen-reader-text">Google Plus</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $homeUrl; ?>/secao/blog/rss" class="icon-alone fs-16">
						<span aria-hidden="true" data-icon="&#x72;"></span>
						<span class="screen-reader-text">Rss</span>
					</a>
				</li>
			</ul>
			<?php
				$langs = icl_get_languages('skip_missing=0');
			?>
			<ul class="languages-nav group">
				<?php foreach ( $langs as $lang ) { ?>
					<?php if( $lang['native_name'] != "Español"){ ?>
					<li <?php if($lang['active']){ ?>class="current"<?php } ?> >
						<a href="<?php echo $lang['url']; ?>"><?php echo $lang['native_name']; ?></a>
					</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<div class="clr group">
			
			<div class="vcard">
				<span class="fn">
					<a href="<?php echo $homeUrl; ?>" class="url" rel="me" title="Interaction South America 13 (Página Inicial)">
						<img src="<?php echo $baseUrl; ?>/img/isa-2013-brand.png" height="68" width="291" alt="" />	
						<span class="place-date">
							<strong>Recife</strong> 
							<?php if(ICL_LANGUAGE_CODE == "en"){ ?>
							/ November 13-16th
							<?php } else { ?>
							/ 13-16 de Novembro
							<?php } ?>
						</span>
					</a>
				</span>
			</div><!-- vcard -->
			<nav class="register-wrapper right">
				<?php 
					$rv_query = new WP_Query();
					$args = array( 'page_id' => 189, 'suppress_filters' => FALSE );
					$rv_query->query($args);
					if( $rv_query->have_posts() ){
						$rv_query->the_post();
				?>
				<a href="<?php the_permalink(); ?>" class="big-btn" class="dropdown-toggle" tabindex="2" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">
					&raquo; <?php the_title(); ?>
				</a>
				<div class="register-subnav dropdown-menu hide" role="menu">
					<?php if( $tickets_hd = get_field('ticket_header') ){ ?>
					<p class="register-subnav-title">
						<strong class="c-brown"><?php echo $tickets_hd; ?></strong>
					</p>
					<?php } ?>
					<?php if( $tickets = get_field('ticket_options') ){ ?>
					<ul>
						<?php foreach( $tickets as $ticket ){ ?>
						<li class="group">
							<a href="<?php echo $ticket['ticket_options_url']; ?>">
								<span class="<?php echo $ticket['ticket_options_icon']; ?> icon"></span>
								<span class="text left"><?php echo $ticket['ticket_options_type']; ?></span>
								<span class="fw-bold text right"><?php echo $ticket['ticket_options_money']; ?></span>
							</a>
						</li>
						<?php } ?>
					</ul>
					<?php } ?>
				</div>
				<?php }	?>	
			</nav>
			<nav id="main-nav" class="clr group">
				<?php if(function_exists(clean_custom_menus)) clean_custom_menus('principal'); ?>
			</nav>
		</div>
	</div>
</header>
<div id="main-content" role="main" class="centered">