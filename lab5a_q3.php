<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 6; 
        $width = 4;
        $area = calculateArea($length, $width);

        echo "The area of rectangle with a width of $width and $length is $area";
    ?>
</body>
</html>
