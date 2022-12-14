<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
	<?php wp_body_open(); ?>
	<header>
		<div class="flex">
			<a href="/" id="aaronLogoLink">
				<h1>Aaron G. Miller <span>| Choreographer</span></h1>
			</a>
			<nav id="mainnav">
				<button id="hamburger" class="closed">
					<span class="line-1"></span>
					<span class="line-3"></span>
				</button>
				<ul>
					<li><a href="#workshops">Workshops</a></li>
					<li><a href="#about">About Me</a></li>
					<li><a href="#news">News</a></li>
				</ul>
			</nav>
		</div>
		<?php if(get_post_custom_values('hero-text')) : ?> 
		<div id="heroText">
			<h2><?php echo get_post_custom_values('hero-text')[0] ?></h2>
		</div>
		<?php endif; ?>
	</header>


	<main>
		<?php if (have_posts() && in_category("news")) : ?>
			<article id="news_full_wrapper">
				<h3>
					<?php the_title(); ?>
				</h3>
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail();
				}
				?>
				<div id="content"><?php the_content(); ?></div>
			</article>
		<?php endif; ?>
		<?php if (have_posts() && in_category("about_me")) : ?>
			<article id="news_full_wrapper">
				<h3>
					<?php the_title(); ?>
				</h3>
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail();
				}
				?>
				<div id="content"><?php the_content(); ?></div>
			</article>
		<?php endif; ?>
	</main>
	<?php get_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			MainNav.init();
		});
	</script>
	<?php wp_footer(); ?>
</body>

</html>