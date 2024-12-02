<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area of a Rectangle</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4;
        $height = 2;

        $area = calculateArea($width, $height);
    ?>

    <p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $height; ?> is <?php echo $area; ?></p>
</body>
</html>
