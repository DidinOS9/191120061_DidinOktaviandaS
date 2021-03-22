<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1-DOS</title>
</head>
<body>
    <?php
        //declarate class
            class Car {
            //properties
            public $comp;
            public $color = 'beige';
            public $hasSunRoof = true;
                
            //method = hello
            public function hello()
            {
                return "beep";
            }
        }

            //Membuat Instance
            $bmw = new Car();
            $mercedes = new Car ();

            //Get values
            echo $bmw -> color; //beige
            echo "<br	/>";
            echo $mercedes -> color; //beige
            echo "<hr	/>";

            //Set Values
            $bmw -> color = 'blue';
            $bmw -> comp = "BMW";
            $mercedes -> comp = "Mercedes Benz";

            //Get Values
            echo $bmw -> color; //blue
            echo "<br />";
            echo $mercedes -> color; //beige
            echo "<br />";
            echo $bmw -> comp; //BMW
            echo "<br />";
            echo $mercedes -> comp; //Mercedes Benz
            echo "<hr />";
            
            //methods get a beep 
            echo $bmw -> hello(); //beep
            echo "<br />";
            echo $mercedes -> hello(); //beep

    ?>

</body>
</html>