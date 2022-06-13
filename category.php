<?php get_header();?>


<main>
  <h1 class="title"><?php single_cat_title(); ?></h1>

  
  
  <div class="categoria_ingredientes">
    
    <?php while(have_posts()){
      the_post();
      $imagen = get_the_post_thumbnail_url();
      ?>
      <div class="card">
        <img src="<?=$imagen?>" alt="<?php the_title();?>" title="<?php the_title();?>" class="card-img-top">
        <div class="card-body">
          <p class="card-title"><?php the_title();?></p>
          <a href="<?php the_permalink();?>" class="btn btn-primary card-btn"><?php pll_e("Ver receta");?></a>
        </div>
      </div>
    <?php }?>
    
  </div>

</main>
<?php get_footer();?>