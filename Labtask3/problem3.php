<html>
<head>
<title>problem3</title>
</head>
<body>

<?php
 $length=10;
 $width=5;
 if($length==$width)
	 echo"The shape is a Square";
 else 
{
    $area=$length*$width;
    echo "Area of the rectangle is: ".$area; 
    $perimeter=2*($length + $width); 
    echo "<br>Perimeter of the rectangle is: ".$perimeter;
}
 
?>
</body>
</html>