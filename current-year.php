<?php
function year_shortcode () {
	return date("Y");
}
add_shortcode ('copyright-year', 'year_shortcode');