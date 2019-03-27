<?php
function my_child_theme_credits() {
	echo 'Дополнительный текст подвала';
}
add_action( 'unite_credits', 'my_child_theme_credits' );