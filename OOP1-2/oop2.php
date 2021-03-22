<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2_DOS</title>
</head>
<body>
    <?php
        class Car {
            //properties
            public $comp;
            public $color = 'beige';
            public $hasSunRoof = true;

            //method = hello
            public function hello()
            {
                return "Beep I am a <i>" . $this -> comp .
                    "</i>, and I am <i>" . $this -> color;
            }
        }

        //create object di class
        $bmw = new Car();
        $mercedes = new Car();

        //Set values dari class properties.
        $bmw -> color = 'blue';
        $bmw -> comp = "BMW";
        $mercedes -> comp = "Mercedes Benz";

        //Call hello method untuk $bmw object.
        echo $bmw -> hello();
    ?>
</body>
</html>