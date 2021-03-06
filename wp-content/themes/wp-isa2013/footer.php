</div><!-- /#main-content -->
<footer id="ft-wrapper">
	<?php global $baseUrl; ?>
	<div class="centered clr">
		<section class="fb-widget clr">
			<h1 class="title fw-light c-green">
				<?php if(ICL_LANGUAGE_CODE == "en"){ ?>
				Facebook
				<?php } else { ?>
				Faça parte da conferência
				<?php } ?>
			</h1> 
			<div class="fb-like" data-href="http://www.facebook.com/InteractionSouthAmerica" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
			<div class="hrz-facebook-widget clr">
				<div class="fb-like-box" data-href="https://www.facebook.com/InteractionSouthAmerica" data-width="980" data-height="170" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
			</div>
		</section>
		<?php 
			$rv_query = new WP_Query();
			$args = array( 'page_id' => icl_object_id(168, 'page', false, 'pt-br' ) );
			$rv_query->query($args);
			if( $rv_query->have_posts() ){	$rv_query->the_post();
				$original_ID = icl_object_id(168, 'page', false, 'pt-br' );
		?>
		<section class="sponsors">
			<?php if( $sp_golds = get_field('sponsors_gold', $original_ID) ) { ?>
			<div class="box sponsors-silver">
				<h3 class="underlined-title fs-16 c-gray">Patrocinadores Ouro</h3>
				<?php foreach( $sp_golds as $sp_gold ){ ?>
				<a href="<?php echo $sp_gold['sponsors_gold_url']; ?>" title="<?php echo $sp_gold['sponsors_gold_name']; ?>" class="sponsor-brand">
					<?php if( $sp_gold_img = $sp_gold['sponsors_gold_image']['sizes']['large']) { ?>
						<img src="<?php echo $sp_gold_img; ?>" alt="<?php echo $sp_gold['sponsors_gold_name']; ?>">
					<?php } ?>
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if( $sp_silvers = get_field('sponsors_silver', $original_ID) ) { ?>
			<div class="box sponsors-silver">
				<h3 class="underlined-title fs-16 c-gray">Patrocinadores Prata</h3>
				<?php foreach( $sp_silvers as $sp_silver ){ ?>
				<a href="<?php echo $sp_silver['sponsors_silver_url']; ?>" title="<?php echo $sp_silver['sponsors_silver_name']; ?>" class="sponsor-brand">
					<?php if( $sp_silver_img = $sp_silver['sponsors_silver_image']['sizes']['large']) { ?>
							<img src="<?php echo $sp_silver_img; ?>" alt="<?php echo $sp_silver['sponsors_silver_name']; ?>">
					<?php } ?>
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if( $sp_bronzes = get_field('sponsors_bronze', $original_ID) ) { ?>
			<div class="box sponsors-bronze">
				<h3 class="underlined-title fs-16 c-gray">Patrocinadores Bronze</h3>
				<ul class="sponsors-bronze-list group">
					<?php $c = 0; ?>
					<?php foreach( $sp_bronzes as $sp_bronze ){ ?>
						<?php $c++; ?>
						<li <?php if ($c == count($sp_bronzes)) { ?>class="last"<?php } ?>>
							<a href="<?php echo $sp_bronze['sponsors_bronze_url']; ?>" title="<?php echo $sp_bronze['sponsors_bronze_name']; ?>">
								<?php if( $sp_bronze_img = $sp_bronze['sponsors_bronze_image']['sizes']['large']) { ?>
									<img src="<?php echo $sp_bronze_img; ?>" alt="<?php echo $sp_bronze['sponsors_bronze_name']; ?>">
								<?php } ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<?php if( $sp_supporters = get_field('supporters', $original_ID) ) { ?>
			<div class="clr mb-30">
				<h4 class="underlined-title c-gray fs-14">Apoiadores</h4>
				<ul class="supporters-list group">
					<?php foreach( $sp_supporters as $sp_supporter ){ ?>
					<li>
						<a href="<?php echo $sp_supporter['supporters_url']; ?>" title="<?php echo $sp_supporter['supporters_name']; ?>">
							<?php if( $sp_supporter_img = $sp_supporter['supporters_image']['sizes']['large']) { ?>
								<img src="<?php echo $sp_supporter_img; ?>" alt="<?php echo $sp_supporter['supporters_name']; ?>">
							<?php } ?>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<?php if( $media_partners = get_field('media_partners', $original_ID) ) { ?>
			<div class="box sponsors-silver">
				<h3 class="underlined-title fs-16 c-gray">Parceiros de mídia</h3>
				<?php foreach( $media_partners as $partner ){ ?>
				<a href="<?php echo $partner['media_partners_url']; ?>" title="<?php echo $partner['media_partners_name']; ?>" class="sponsor-brand">
					<?php if( $partner_img = $partner['media_partners_image']['sizes']['large']) { ?>
						<img src="<?php echo $partner_img; ?>" alt="<?php echo $partner['media_partners_name']; ?>">
					<?php } ?>
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if( $academic_support = get_field('academic_support', $original_ID) ) { ?>
			<div class="box sponsors-silver">
				<h3 class="underlined-title fs-16 c-gray">Parceiros acadêmicos</h3>
				<?php foreach( $academic_support as $partner ){ ?>
				<a href="<?php echo $partner['academic_support_url']; ?>" title="<?php echo $partner['academic_support_name']; ?>" class="sponsor-brand">
					<?php if( $partner_img = $partner['academic_support_image']['sizes']['large']) { ?>
						<img src="<?php echo $partner_img; ?>" alt="<?php echo $partner['academic_support_name']; ?>">
					<?php } ?>
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<nav class="ft-nav right">
				<ul>
					<?php if(ICL_LANGUAGE_CODE == "pt-br"){ ?>
					<li><a href="<?php echo get_permalink( icl_object_id(438, 'page', true) ); ?>">Imprensa</a></li>
					<?php } ?>
					<li>
						<a href="<?php echo get_permalink( icl_object_id(433, 'page', true) ); ?>">
							<?php if(ICL_LANGUAGE_CODE == "en"){ ?>
							Team
							<?php } else { ?>
							Equipe
							<?php } ?>
						</a>
					</li>
				</ul>
			</nav>
			<p class="fs-12 ff-roboto c-gray">Quer patrocinar o <a href="https://twitter.com/search?q=%23ISA13">#ISA13</a>? Baixe nosso <a href="http://isa.ixda.org/2013/propostapatrocinioisa2013marco.pdf">Media Kit</a> ou envie um e-mail para <a href="mailto: &#112;&#097;&#116;&#114;&#111;&#099;&#105;&#110;&#105;&#111;&#064;&#105;&#120;&#100;&#097;&#114;&#101;&#099;&#105;&#102;&#101;&#046;&#111;&#114;&#103;">patrocinio@ixdarecife.org</a>.</p>
		</section>
		<?php }	?>	
	</div>
	<div id="ft-bar">
		<div class="centered group">
			<ul class="credits group">
				<li>
					<span class="credits-label ff-roboto">Realização</span>
					<a href="http://www.ixdarecife.org/" title="Ir para o site da IxDA Recife">
						<img src="<?php echo $baseUrl; ?>/img/ixda-recife-brand.png" height="35" width="84" alt="IxDA Recife">
					</a>
				</li>
				<li>
					<span class="credits-label ff-roboto">Organização</span>
					<a href="#">
						<img src="<?php echo $baseUrl; ?>/img/mkt-hppn-brand.png" height="35" width="127" alt="MKT HPPN">
					</a>
				</li>
			</ul>
			<p class="ff-roboto fs-12 c-gray">Interaction South America 2013 - Copyleft © 2013 todo conteúdo pode ser reproduzido desde que mencionado a fonte.<br>
			<span class="c-gray-light">Fale com a organização</span>: <a href="mailto: &#099;&#111;&#110;&#116;&#097;&#116;&#111;&#064;&#105;&#120;&#100;&#097;&#114;&#101;&#099;&#105;&#102;&#101;&#046;&#111;&#114;&#103;">contato@ixdarecife.org</a>.</p>
		</div>
	</div>
</footer>
<!--[if lt IE 9]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $baseUrl; ?>/js/jquery-2.0.0.min.js"><\/script>')</script>
<!--<![endif]-->
<script src="<?php echo $baseUrl; ?>/js/hover-dropdown.min.js"></script>
<script src="<?php echo $baseUrl; ?>/js/cycle.js"></script>
<?php if(is_single()||is_category("blog")){ ?>
<script src="<?php echo $baseUrl; ?>/js/jquery.sharrre.min.js"></script>
<?php } ?>
<script src="<?php echo $baseUrl; ?>/js/isa2013.fn.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>