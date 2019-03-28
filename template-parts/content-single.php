<?php 
if ( in_category('category1') ) { 
	get_template_part( './template-parts/content', "single-category1" ); }
if ( in_category('category2') ) { 
	get_template_part( './template-parts/content', "single-category2" );
 }?>