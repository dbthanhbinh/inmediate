<?php
// [bartag foo="foo-value"]
function barfaq_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'group' => $group,
    ), $atts );

    $terms = get_terms( 'group' );
    $termSlug = $a['group'];

    if (!empty($terms)) {
        foreach ( $terms as $term ) {
            if($term->slug == $termSlug) {
                // Set up our standard query args.
                $query_args = array(
                    'post_type'         => 'faq',      
                    'posts_per_page'    => 30,
                    'tax_query'         => array(
                        array(
                            'taxonomy'  => 'group',
                            'field'     => 'slug',
                            'terms'     => array( $termSlug ),
                            'operator'  => 'IN'
                        )
                    )
                );

                // New query just for the tax term we're looping through
                $q = new WP_Query( $query_args );
                $html = '';
                if ( $q->have_posts() ) {
                    $html .= '<h3 class="faq-title"> '.$term->name.' </h3>';    
                    $html .= '<ul class="faq">';
                    while ( $q->have_posts() ) : $q->the_post();                        
                        $html .= '<li class="q"><i class="fa-item fa fa-plus"></i> '. get_the_title() .'</li>';
	                    $html .= '<li class="a">'.get_the_content().'</li>';

                    endwhile;
                    $html .= '</ul>';
                } // end have_posts()
            }
        }
    }
    return $html;
}
add_shortcode( 'faq', 'barfaq_func' );
