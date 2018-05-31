<?php

$current_page = $_SERVER['PHP_SELF'];

$menu_items = array(
	'Contact' => 'contact.php',
	'Customer Information' => 'customer-information.php',
	'About' => 'about.php',
);

?>
<h3>Menu</h3>
<ul class="nav flex-column">
	<?php foreach ($menu_items as $label => $link) : ?>
		<li class="nav-item">
    <a class="nav-link<?php if ($current_page === $link) { echo ' active'; } ?>" href="<?php echo $link; ?>"><?php echo $label; ?></a>
  </li>
	<?php endforeach; ?>
</ul>