<!DOCTYPE html>
<html>

<?php
  ob_start();
  require_once('function.php');
  set_language("index.php");
  if($_COOKIE['lang']=="en"){
    $text_content = english();
  }
  
  if($_COOKIE['lang']=="pl"){
    $text_content = polski();
  }
?>

	<head>
		<title>
			<?php echo $text_content[0]; ?>
		</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="script.js"></script>
		<script src="script_index.js"></script>
		<script>
			let lang = <?= json_encode($text_content) ?>;

		</script>

		<meta name="theme-color" content="#000" />
	</head>

	<body>
		<div id="courtain">
			<div style="margin: 0 auto; width: auto; text-align: center; line-height: 100vh;">
			</div>
		</div>
		<div id='belka'>
			<span id="zegarek"></span>
			<button class='przyciski_belka przyciski_menu_belka' disabled><?= $text_content[1] ?></button>
			<button class='przyciski_belka przyciski_menu_belka' disabled><?php echo $text_content[2]; ?></button>
		</div>
		<div class="main_top">
			<div style="position: relative; top: 35%; height: 75px;">
				<button id='przycisk_main_top'><span style="top: 10px; position: relative;"><?php echo $text_content[3]; ?></span><br><span class="animacja_przycisk_main_top">T</span></button>
			</div>
		</div>
		<div class="main">
			<div id="form_main">
				<div class="form_main_columns">
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[16] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" min="2" class="przycisk_form" placeholder="<?= $text_content[16] ?>">
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[17] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" min="2" class="przycisk_form" placeholder="<?= $text_content[17] ?>">
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[20] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" min="1" class="przycisk_form" placeholder="<?= $text_content[20] ?>">
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[21] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" min="0" class="przycisk_form" placeholder="<?= $text_content[21] ?>">
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[22] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" class="przycisk_form" placeholder="<?= $text_content[22] ?>"><br>
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[29] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="number" min="1" class="przycisk_form" placeholder="<?= $text_content[16] ?>">
						</div>
					</div>
					<div style="text-align: center; width: 100%;">
						<div style="display: inline-block; width: 49%;">
							<?= $text_content[25] ?>
						</div>
						<div style="display: inline-block; width: 49%;">
							<input type="radio" class="przycisk_form_check" id="draw_yes" name="draw">
							<?= $text_content[26] ?>
								<input type="radio" class="przycisk_form_check" id="draw_no" name="draw">
								<?= $text_content[27] ?>
						</div>
					</div>
					<input disabled type="text" class="przycisk_form" placeholder="<?= $text_content[18] ?>"><br>
					<button class="przycisk_form_small"><?= $text_content[19] ?></button>
				</div>
				<div class="form_main_columns">
					<h2>
						<?= $text_content[24] ?> | <span id="number_of_teams_current">0</span>/<span id="number_of_teams_total">0</span></h2>
					<h2>
						<span id="number_of_groups_each">0</span>
						<?= $text_content[31] ?> <span id="number_of_groups_one">0</span><span id="number_of_groups_one_text"><?= $text_content[32] ?></span> </h2>
				</div>
				<button id="przycisk_form_start"><?= $text_content[30] ?></button>
				<button id="przycisk_form_random"><?= $text_content[44] ?></button>
			</div>
		</div>

		<div class="main_top">
			<div style="position: relative; top: 30%;">

			</div>
		</div>

		<div class="main">
			<h2 id="before_start">
				<?= $text_content[45] ?>
			</h2>
			<main id="tournament">
			</main>
		</div>

		<div id="cookies_warning">
			<?php echo $text_content[13]; ?> <a id="cookies_accept" class="link_option"><b><?php echo $text_content[14]; ?></b></a>
			<?php echo $text_content[15]; ?>
		</div>

		<div id="footer">
			<div id="copyright">
				<span style="color: rgb(156, 159, 163);">&copy 2018</span> Michał Pochopień <br>
				<a href="?l=pl">PL</a> | <a href="?l=en">ENG</a>
				<?php $location = "index.php"; change_lang($location); ?>
			</div>

			<div id="social_bar">
				<a class="social_icon" href="https://www.facebook.com/profile.php?id=100000771247530"></a>
				<a class="social_icon" href="https://www.instagram.com/m_pochopien/"></a>
				<a class="social_icon" href="https://twitter.com/m_pochopien"></a>
				<a class="social_icon" href="https://github.com/Wyimaginowany"></a>
				<a class="social_icon" href="https://www.linkedin.com/in/mpochopien/"></a>
			</div>
		</div>
	</body>

</html>
