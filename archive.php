<?php
if(get_post_type() == "product"):
	get_template_part('archive', 'products');
endif;

echo get_post_type();