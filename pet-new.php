<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Animal
    {
        protected $classification;
        protected $limbs;
        protected $offspringCount;

        public function __construct($classification, $limbs, $offspringCount)
        {
            $this->classification = $classification;
            $this->limbs = $limbs;
            $this->offspringCount = $offspringCount;
        }

        public function __destruct()
        {
            echo "<br>";
            echo "Object destroyed. Goodbye, {$this->classification}!\n";
        }

        public function displayInfo()
        {
            echo "Classification: {$this->classification}\n";
            echo "<br>";
            echo "Limbs: {$this->limbs}\n";
            echo "<br>";
            echo "Offspring Count: {$this->offspringCount}\n";
            echo "<br>";
        }
    }

    class Pet extends Animal
    {
        protected $name;

        public function __construct($classification, $limbs, $offspringCount, $name)
        {
            parent::__construct($classification, $limbs, $offspringCount);
            $this->name = $name;
        }

        public function displayInfo()
        {
            parent::displayInfo();
            echo "Name: {$this->name}\n";
            echo "<br>";
        }
    }

    $animal = new Animal("Cat", 4, 2);
    $animal->displayInfo();
    echo "<br>";

    $pet = new Pet("Dog", 4, 3, "Buddy");
    $pet->displayInfo();

    ?>

</body>

</html>