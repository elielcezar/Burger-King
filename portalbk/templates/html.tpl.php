<!DOCTYPE html>
<html>
<head>


<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php if ($is_front):  ?>
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"-->
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php print $GLOBALS['base_path']; ?>sites/all/themes/detroitbr/img/favicon.png">

<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800" rel="stylesheet">
<!-- /GOOGLE FONT-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
