<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv=“pragma” content=“no-cache” />
	<meta http-equiv=“Expires” content=”-1” />
	<meta http-equiv=“CACHE-CONTROL” content=“NO-CACHE” />
	<TITLE>Projet CodeIgniter Test</TITLE>
	<script src="<?=base_url();?>js/jquery.js"></script>
	<script src="<?=base_url();?>js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>js/unslides.js"></script>
	<script src="<?=base_url();?>js/jquery.event.move.js"></script>
	<script src="<?=base_url();?>js/jquery.event.swipe.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php
if (isset($js))
{

	foreach ($js as $key => $value) {
?>
	<script src="<?=base_url();?>js/<?=$value;?>" ></script>
<?php
	}
}
?>	
	<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet">
	<link href="<?=base_url();?>css/main.css" rel="stylesheet">
<?php
if (isset($css))
{

	foreach ($css as $key => $value) {
?>
	<link href="<?=base_url();?>css/<?=$value;?>" rel="stylesheet">
<?php
	}
}
?>

</head>
<body>