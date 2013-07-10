<?php

$TODAY = date("Y/m/d");

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>IRC Log</title>

</head>

<body>
<h1>誰在聊天</h1>

<div style="text-align:center; vertical-align:middle;">
<iframe src="http://irclogs.ubuntu.com/<?php echo $TODAY; ?>/%23ubuntu-tw.html" width="900" height="600" style="border: 0;"></iframe>
</div>
<br />

</body>
</html>
