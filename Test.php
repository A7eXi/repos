<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h1>
<div>
<?php
$users = ["Яблоко", "Апельсин", "Банан", "Груша"];
$num = count($users);
for($i=0; $i < $num; $i++)
{
    echo "$users[$i] <br />";
}
?>
</div>
</body>
</html>


