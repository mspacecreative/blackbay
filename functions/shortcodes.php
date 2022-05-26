<?php

// RESIDENTIAL LISTINGS
function residentialListings() {
    ob_start();
    get_template_part('includes/residential-listings-map');
    return ob_get_clean();
}
add_shortcode( 'residential_map', 'residentialListings' );

// UPCOMING PROJECT LISTINGS
function upcomingProjects() {
    ob_start();
    get_template_part('includes/upcoming-projects');
    return ob_get_clean();
}
add_shortcode( 'upcoming_projects', 'upcomingProjects' );