<?php 
// Single Cursos
if (get_post_type() == 'produto') :
    get_template_part('single', 'produtos');
endif;
?>