<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    trait MovementTrait
    {
        public function move()
        {
            echo "{$this->name} is moving.<br>";
        }
    }

    trait InfoTrait
    {
        public function displayInfo()
        {
            echo "Name: {$this->name}<br>";
        }
    }

    abstract class LivingBeing
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class Animal extends LivingBeing
    {
        use MovementTrait, InfoTrait;

        public $classification;
        public $numLimbs;
        public $numOffspring;

        public function __construct($name, $classification, $numLimbs, $numOffspring)
        {
            parent::__construct($name);
            $this->classification = $classification;
            $this->numLimbs = $numLimbs;
            $this->numOffspring = $numOffspring;
        }
    }

    class Plant extends LivingBeing
    {
        use InfoTrait;

        public $type;
        public $color;

        public function __construct($name, $type, $color)
        {
            parent::__construct($name);
            $this->type = $type;
            $this->color = $color;
        }
    }

    $animal = new Animal("Monkey", "Mammal", 4, 3);
    $animal->displayInfo();
    $animal->move();
    echo "<br>";

    $plant = new Plant("Rose", "Flower", "Red");
    $plant->displayInfo();
    ?>
</body>

</html>