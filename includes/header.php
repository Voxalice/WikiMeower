<header><img src="/includes/wikimeower_logo.png"><h5><?php
  $rnd = array(
		# Random header text
		'Did you know that Meower currently contains over 9,400 blocks?', 'Fun fact: Meower was once named ScratchConnect!',
		'The Meower collab has survived for over a year now!',
	);
	$rnd_k = array_rand($rnd);
  echo $rnd[$rnd_k]; ?></h5></header>