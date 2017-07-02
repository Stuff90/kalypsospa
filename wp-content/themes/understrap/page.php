<?php

get_header();


if (is_front_page()) {
  get_template_part( 'page-templates/landing');
} else {
  get_template_part( 'page-templates/generic');
}

get_footer();
?>
