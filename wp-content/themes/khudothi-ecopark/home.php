<?php
/*
 Template Name: Home
 */
 ?>
<?php get_header(); ?>
<main id="main">
	<div class="banner_home">
		<div class="img">
			<img src="<?php the_field('banner_home','option'); ?>" alt="<?php the_field('banner_home','option'); ?>" title="<?php the_field('banner_home','option'); ?>" />
		</div>
	</div>
	<?php $rows=get_field( 'section1', 'option'); if($rows) ?>
	<?php { ?>
	<section class="section1">
		<?php foreach($rows as $row) { ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="inner">
						<div class="sec_title">
							<h2 class="title bold"><?php echo  $row['title'] ?></h2>
						</div>
						<div class="sec_content">
							<div class="content-post">
								<?php echo  $row['content'] ?>
							</div>
							<div class="sec_link">
								<a href="#dang-ky"><i class="fa fa-download" aria-hidden="true"></i>Tải tài liệu dự án</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="video">
						<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo  $row['id_video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p class="name"><?php echo  $row['name_video'] ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="arrow_bot"></div>
	</section>
	<?php } ?>
	<section class="section2">
		<div class="container">
			<div class="img">
				<img src="<?php the_field('section2','option'); ?>" alt="<?php the_field('section2','option'); ?>" title="<?php the_field('section2','option'); ?>" />
			</div>
		</div>
	</section>
	<section class="section3">
		<div class="container">
			<div class="row flex">
				<div class="col-md-8">
					<h3 class="capt"><?php the_field('section3','option'); ?></h3>
				</div>
				<div class="col-md-4">
					<div class="sec_hotline center">
						<a href="tel:<?php the_field('hotline','option') ?>"><?php the_field('hotline','option') ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $rows=get_field( 'section4', 'option'); if($rows) ?>
	<?php { ?>
	<section class="section4">
		<?php foreach($rows as $row) { ?>
		<div class="container">
			<h2 class="title center"><?php echo  $row['title'] ?></h2>
			<div class="img">
				<img src="<?php echo  $row['img'] ?>" alt="<?php echo  $row['img'] ?>" title="<?php echo  $row['img'] ?>" />
			</div>
		</div>
		<?php } ?>
	</section>
	<?php } ?>
	<?php $chas = get_field('section5','option');
	if($chas) { ?>
	<section class="section5">
		<div class="container">
			<div class="row">
				<?php foreach ($chas as $cha) { ?>
				<div class="col-md-6">
					<div class="item">
						<h3 class="title center uppe"><?php echo $cha['title'];  ?></h3>
						<div class="img">
							<img src="<?php echo $cha['img'];  ?>" alt="<?php echo $cha['img'];  ?>" title="<?php echo $cha['img'];  ?>" />
						</div>
						<div class="content">
							<?php
						    if($cha['list_text']) {
						    foreach ($cha['list_text'] as $con) { ?>
							<div class="text"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $con['text']; ?></div>
							<?php } } ?>
						</div>
						<div class="link_down center">
							<div class="row row10">
								<div class="col-md-6 col-xs-6">
									<a href="#dang-ky">Tải tài liệu dự án<i class="fa fa-download" aria-hidden="true"></i></a>
								</div>
								<div class="col-md-6 col-xs-6">
									<a href="<?php echo $cha['link']; ?>"><?php echo $cha['text_link']; ?><i class="fa fa-download" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php $rows=get_field( 'section6', 'option'); if($rows) ?>
	<?php { ?>
	<section class="section6">
		<?php foreach($rows as $row) { ?>
		<div class="container">
			<div class="sec_title">
				<h2 class="title center"><?php echo  $row['title'] ?></h2>
			</div>
			<div class="text_head">
				<div class="content-post">
					<?php echo  $row['text_head'] ?>
				</div>
			</div>
			<?php $images = $row['gallery']; if( $images ):?>
			<div class="sec_content">
				<div class="row">
					<?php foreach( $images as $image ): ?>
					<div class="col-md-4">
						<div class="item">
							<h3 class="capt center uppe"><?php echo $image['title']; ?></h3>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>" title="<?php echo $image['url']; ?>" />
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif;?>
		</div>
		<?php } ?>
	</section>
	<?php } ?>
	<?php $chas = get_field('section7','option');
	if($chas) { ?>
	<?php foreach ($chas as $cha) { ?>
	<section class="section7" id="dang-ky">
		<div class="container">
			<div class="sec_title">
				<h2 class="title center"><?php echo $cha['title'];  ?></h2>
			</div>
			<div class="sec_content">
				<div class="row">
					<div class="col-md-8">
						<div class="inner">
							<div class="row">
								<?php
							    if($cha['list']) {
							    foreach ($cha['list'] as $con) { ?>
								<div class="col-md-6">
									<div class="item clearfix">
										<div class="icon">
											<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
										</div>
										<div class="box">
											<h3 class="capt"><a href="<?php echo $con['link']; ?>"><?php echo $con['capt']; ?></a></h3>
											<span class="sub"><?php echo $con['sub']; ?></span>
										</div>
									</div>
								</div>
								<?php } } ?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form">
							<h3 class="capt uppe center"><?php echo $cha['title_form'];  ?></h3>
							<?php echo do_shortcode('[contact-form-7 id="48" title="Tải tài liệu"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } } ?>
	<?php
	$term = get_field('section8','option');
	if(( $term )): ?>
	<section class="section8">
		<div class="container">
			<div class="sec_title">
				<h2 class="title center"><?php echo get_cat_name($term); ?></h2>
			</div>
			<div class="sec_content">
				<div class="row">
					<?php       $args=array(
					  'cat' => $term,
					  'posts_per_page'=> 6, 
					 'orderby' => 'ID',
					      'order' => 'DESC'
					  );
					  $postnew = new wp_query( $args );
					  if( $postnew->have_posts() ) {
					  while( $postnew->have_posts() ) {
					  $postnew->the_post(); ?>
					<div class="col-md-6">
						<div class="news_index clearfix">
							<div class="img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
								<a href="<?php the_permalink(); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</div>
							<div class="box">
								<div class="info">
									<h3 class="capt bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="desc"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></div>
								</div>
								<div class="meta clearfix">
									<div class="cats">
										<?php   $categories = get_the_category();
										  if ( ! empty( $categories ) ) {
										echo '<a class="post-cat" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
										}?>
									</div>
									<div class="author"><a href=""><?php the_author(); ?></a></div>
									<div class="date"><?php the_time('d M, Y'); ?></div>
								</div>
							</div>
						</div>
					</div>
					<?php }  }?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
