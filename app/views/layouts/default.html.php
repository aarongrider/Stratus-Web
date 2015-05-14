<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Voice Cloud<?php echo $this->title(); ?></title>

    <?php echo $this->html->style(array('materialize.css', 'style.css')); ?>
	<?php echo $this->html->script(array('jquery-2.1.4.min.js', 'materialize.js')); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>
	<div class="container">

		<div class="content">
			<?php echo $this->content(); ?>
		</div>
    </div>
</body>
</html>