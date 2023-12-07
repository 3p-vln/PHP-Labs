<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class LivingBeing
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract public function displayInfo();
    }

    class Animal extends LivingBeing
    {
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

        public function displayInfo()
        {
            echo "Name: {$this->name},<br> Classification: {$this->classification},<br> Limbs: {$this->numLimbs},<br> Offspring: {$this->numOffspring}<br>";
        }
    }

    class Plant extends LivingBeing
    {
        public $type;
        public $color;

        public function __construct($name, $type, $color)
        {
            parent::__construct($name);
            $this->type = $type;
            $this->color = $color;
        }

        public function displayInfo()
        {
            echo "Name: {$this->name},<br> Type: {$this->type},<br> Color: {$this->color}<br>";
        }
    }

    $animal = new Animal("Monkey", "Mammal", 4, 3);
    $animal->displayInfo();
    echo "<br>";

    $plant = new Plant("Rose", "Flower", "Red");
    $plant->displayInfo();
    ?>
</body>

</html>