<!--
THIS FILE ISN'T SUPPOSED TO BE MODIFIED!!
YOU CAN'T EDIT A PAGE HERE!!

To make a new page, please create a .php file in /wiki
by duplicating the template.php file.

The page will work as soon as it's created.

The code for this shell page is inside lines 15-37.
-->

<!DOCTYPE html>

<html>
  <head>
    <title>WikiMeower</title>
		<link rel="stylesheet" href="/includes/wm.css" />
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

		<div id="page"><?php
			if ($_GET['wiki']) {
				if (file_exists('wiki/' . $_GET['wiki'] . '.php')) {
					include 'wiki/' . $_GET['wiki'] . '.php';
				} else {
					include 'wiki/404.php';
				}
			} else {
				include 'wiki/start.php';
			}
		?><br></div>
		
		<?php include 'includes/footer.php'; ?> 
  </body>
</html>

<!-- You very likely don't want to modify this.
Scroll up! -->