<?php
	require('../includes/includes.php');
	ob_start("sanitize_page");
	new Session(['ALL']);

	$seoArr['desc'] = 'A handy utility to generate random classes for Call of duty Infinite Warfare. This adds a new level of fun to the game by generating random classes for you to enjoy';
	$seoArr['keywords'] = 'Call of duty, cod, random class generator, rcg, free, mp, multiplayer, call of duty random class generator, COD infinite warfare RCG, infinite warfare, infinite warfare random class generator, infinity ward';

	$TotalClasses = getconfig ('Cached_IW_Class_Count');
?>
<?php require_once ('includes/pagesections/_top.php'); ?>
	<div class="row">
		<form name="myForm" class="col s12">
			<div class="row text-center">
				<div class="col s12 m9 l9">
					<h1>Infinite Warfare Random Class Generator</h1>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m9 l9">
					<div id='top' class="text-center">
						<?php require ('../includes/pagesections/ads/Ad_top.php'); ?>
						<?php require ('../includes/pagesections/dev_alert.php'); ?>
						<h2 class="smallH2">Designed to generate a random class for players to use in Infinite Warfare.</h2>
						<span>Some Features of this class generator are:</span><br>
						<span>
							All Weapons, Attachments, Perks, Lethals, Tacticals, Killstreaks, &amp; Rigs are included.<br>
							Links to every class generated<br>
							Fully Customizable!<br>
						</span>
						<div>We have generated over <span
								id="classCount"><?php echo number_format ($TotalClasses); ?></span> random classes for
							our users.
						</div>
					</div>
					<div class="text-center">
						<a class="waves-effect waves-light btn yellow accent-2" href="/<?php echo IW_Folder; ?>/class"
						   ng-disabled='myForm.$invalid'>
							<i class="material-icons left black-text">refresh</i>
							<span ng-show='myForm.$valid' class="black-text">Roll Class</span>
							<span ng-show='myForm.$invalid' class="black-text">Set Valid Player Level</span>
						</a>
					</div>
				</div>
				<div class="col s12 m3 l3 text-center">
					<?php require ('../includes/pagesections/ads/Ad_bottom.php'); ?>
					<div class="divider margin-bottom-10 margin-top-10"></div>
					<?php require_once ('../includes/pagesections/social/twitter_btn.php'); ?>
					<?php require_once ('../includes/pagesections/social/facebook_btn.php'); ?>
				</div>
			</div>
		</form>
	</div>
<?php require_once ('includes/pagesections/_bottom.php'); ?>