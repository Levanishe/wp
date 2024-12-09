<?php get_header();
the_post(); ?>
<h1><?php the_title() ?></h1>
<p></p>
<?php echo get_avatar(get_postdata($post->ID)["Author_ID"]) ?>

<?php the_content(); ?>

<div class="footer-ava">
  <?php get_post(get_postdata($post->date)["Post_data"]) ?>
  <?php get_post() ?>
</div>


<?php get_footer() ?>