<?php get_header();?>


<main>
  <h1 class="title"><?php pll_e("Todas las recetas");?></h1>

  
  
  <div class="lista-recetas">
    
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
  <div class="nav-previous alignleft">
  <?php next_posts_link('Anteriores');?>
  </div>
  <div class="nav-next alignright">
  <?php previous_posts_link('Siguientes');?>
  </div>

</main>
<?php get_footer();?>