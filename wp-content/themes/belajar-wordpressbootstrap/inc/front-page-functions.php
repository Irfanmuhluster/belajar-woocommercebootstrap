<?php


    function custom_loop_category2($wp_customize)
    {
    
        $wp_customize->add_section('woocommerce1-kategori-section', array(
            'title' => 'Tampilkan Daftar Kategori',
            'priority' => 14,
        ));
    
        $wp_customize->add_setting('kategori-display', array(
            'default'        => true,
        ));
    
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'kategori-display-control', array(
            'label' => 'Tampilkan bagian ini?',
            'section' => 'woocommerce1-kategori-section',
            'settings' => 'kategori-display',
            'type' => 'checkbox'
        )));
    
        # code...
    }
    
    function just_category () {
        // // Get all product categories
        $product_category_terms = get_terms( array(
            'taxonomy'   => "product_cat",
            'hide_empty' => 1,
        ));
    
        foreach($product_category_terms as $term){
            // Get the term link (if needed)
            $term_link = get_term_link( $term, 'product_cat' );
    
            ## -- Output Example -- ##
            // woocommerce_subcategory_thumbnail( $term )
            // The link (start)
            echo '
            <div class="kategori-box">';
            woocommerce_subcategory_thumbnail( $term);
                echo '<div class="overlay-box">
                        <div class="text">
                            <a class="text-white" href="' . $term_link . '">'.$term->name.'</a>
                        </div>
                    </div>
            </div>';
        }
    }
    
    
    add_action('show_custom_loop_category', 'just_category');
    add_action('customize_register', 'custom_loop_category2');
    

?>