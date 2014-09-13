<!DOCTYPE html>
<html>
<head>
	<title>Backoffice - Fondation Marocaine de l'étudiant</title>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php  
	header("Content-Type: application/vnd.ms-word");
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past - so must always re-read
	header("content-disposition: attachment;filename=Annexe.doc"); //this will be the name of the file the user downloads
	echo $content_for_layout;
?>
</body>

</html>
