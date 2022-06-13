<?php get_header();
$filtro = new WP_Query(array('posts_per_page' => 4));
?>

            <header class="row">
                <div class="col-12">
                    
                    
                    <div class="titular"><h1><?php bloginfo('description');?></h1></div>
                    <div class="avisobajar"><a href="#main"><?php pll_e("Baja para continuar");?></a></div>
                </div>
            </header>
            <main class="row">
                <div class="col-12">
                    <a name="main"></a>


                    <?php
                    $i = 1;
                    if($filtro->have_posts()){

                        while($filtro->have_posts()){
                            $filtro->the_post();
                            $imagen = get_the_post_thumbnail_url();
                            if($i){?>



                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-sm-5">
                                        <img class="card-img" src="<?=$imagen?>" alt="<?php the_title();?>">
                                    </div>
                                    <div class="col-sm-7" id="texto-tarjeta">
                                        <div class="d-none d-sm-block card-body">
                                            <h5 class="card-title"><?php the_title();?></h5><br>
                                            <p class="card-text"><?php the_excerpt();?></p><br>
                                            <a href="<?php the_permalink();?>" class="btn btn-primary"><?php pll_e("Ver receta");?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <?php
                                $i--;
                                }else{?>




                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-sm-7" id="texto-tarjeta">
                                            <div class="d-none d-sm-block card-body">
                                                <h5 class="card-title"><?php the_title();?></h5><br>
                                                <p class="card-text"><?php the_excerpt();?></p><br>
                                                <a href="<?php the_permalink();?>" class="btn btn-primary"><?php pll_e("Ver receta");?></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <img class="card-img" src="<?=$imagen?>" alt="<?php the_title();?>">
                                        </div>
                                    </div>
                                </div>




                                <?php
                                $i++;
                                }?>
                            <?php
                        }

                        wp_reset_postdata();

                    }else{
                        pll_e("Todavía no hay recetas");
                    }
                    ?>


                    
                </div>
            </main>
            <?php get_footer();?>