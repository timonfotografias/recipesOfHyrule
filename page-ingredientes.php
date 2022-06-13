<?php get_header();?>

<main class="row">

<h1 class="title"><?php pll_e("Ingredientes");?></h1>
    <div class="listaingredientes">
                    

    
    <?php  
    // get all the categories from the database  
    $cats = get_categories();  

    // loop through the categories  
    foreach ($cats as $cat) {  
        // setup the category ID  
        $cat_id= $cat->term_id;
        $cat_image = get_field('image', $cat);
        //print_r($cat_image);
        $image_url = $cat_image['url'];
    ?>
        
        <a class="enlaceingrediente" href="<?php echo get_category_link( $cat->term_id ); ?>">
            <div class="ingrediente">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $cat->name; ?>">
                <div class="nombreingrediente">
                    <h3><?php echo $cat->name; ?></h3>
                </div>
            </div>
        </a>
    <?php } ?>


    </div>
</main>

<?php get_footer();?>