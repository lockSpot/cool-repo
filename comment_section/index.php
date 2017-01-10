<?php
	date_default_timezone_set('America/Detroit');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>title of document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<iframe src="" name="videoframe"> <p>iframes are not supported by your browser.</p></iframe>

<?php
echo "<form method='POST' action='".setcomments($conn)."'>
	<input type='hidden' name='uid' value='Anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message'></textarea><br>
	<button name='commentSubmit' type='submit'>Comment</button>
</form>";

getComments($conn);

?>


</body>
</html>