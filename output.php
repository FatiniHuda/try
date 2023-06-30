<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// This won't work because of the quotes around specialH5!
//echo "<h5 class="specialH5">Hello World!</h5>"; 

// OK because we escaped the quotes!
echo "<h5 class=\"specialH5\">Hello World!</h5>"; 

// OK because use of apostrophe ‘ instead
echo "<h5 class='specialH5'>Hello World!</h5>"; 
?>

</body>
</html>