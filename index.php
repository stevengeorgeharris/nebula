<?php
/**
 * Main template loaded on root unless another page-template
 * is specified.
 *
 * @package nebula
 */

get_header();

get_template_part('template-parts/delete', 'me');

get_footer();
?>
