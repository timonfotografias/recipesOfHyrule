<?php get_header();?>


<main class="row">
    <?php while(have_posts()){
    the_post();?>
    <article class="col-12">
        <div class="row titulo_post_receta">
            <div class="col-12">
                <h1><?php the_title();?></h1>
            </div>
            <div class="col-12">
                <p><?php pll_e("Se prepara con: ");?> 


                    <?php $the_post_id = get_the_ID(); $article_terms = wp_get_post_terms($the_post_id, ['category']);
                    if(empty($article_terms) || ! is_array($article_terms)){
                        return;
                    }
                    foreach($article_terms as $key=>$article_term){?>
                        <a href="<?php echo esc_url(get_term_link($article_term));?>" class="etiqueta">
                        <?php echo esc_html($article_term->name);?>
                        </a>
                    <?php } ?>
                </p>
            </div>
        </div>

        <div class="row contenido_post_receta">
            <div class="col-sm-4 col-12 foto_receta">
            <?php the_post_thumbnail('thumbnail', array('class' => 'imagenReceta'));?>
            </div>
            <div class="col-sm-8 col-12" style="align-self: center;">
                <p><?php the_content();?></p>
            </div>
        </div>
    </article>
    <?php }?>

</main>



<?php get_footer();?>