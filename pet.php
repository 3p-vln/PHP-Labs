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
        public $classification;
        public $numLimbs;
        public $numOffspring;

        private $privateProperty;

        public function __construct()
        {
            $this->privateProperty = "Private property.<br><br>";
        }

        public function set($property, $value)
        {
            $this->$property = $value;
        }

        public function get($property)
        {
            return $this->$property;
        }

        public function show($property)
        {
            echo $this->$property;
        }

        public function search($property, $value)
        {
            if ($this->$property == $value) {
                echo "$property: $value";
            } else {
                echo "$property: No match found.";
            }
        }

        private function privateMethod()
        {
            echo "Private method.";
        }

        public function callPrivateMethod()
        {
            $this->privateMethod();
        }

        public function showPrivateProperty()
        {
            echo $this->privateProperty;
        }

        public static function show_objects($objects)
        {
            foreach ($objects as $object) {
                echo "Classification: " . $object->classification . ", Limbs: " . $object->numLimbs . ", Offspring: " . $object->numOffspring . "<br>";
            }
        }
    }

    $animal1 = new Animal();
    $animal1->set('classification', 'Monkey');
    $animal1->set('numLimbs', 4);
    $animal1->set('numOffspring', 3);

    $animal2 = new Animal();
    $animal2->set('classification', 'Hourse');
    $animal2->set('numLimbs', 4);
    $animal2->set('numOffspring', 2);

    $animal3 = new Animal();
    $animal3->set('classification', 'Snake');
    $animal3->set('numLimbs', 0);
    $animal3->set('numOffspring', 1000);

    $animal4 = new Animal();
    $animal4->set('classification', 'Parrot');
    $animal4->set('numLimbs', 2);
    $animal4->set('numOffspring', 3);

    $animal5 = new Animal();
    $animal5->set('classification', 'Pig');
    $animal5->set('numLimbs', 4);
    $animal5->set('numOffspring', 20);

    $animal3->callPrivateMethod();

    $animal3->showPrivateProperty();

    $animalArray = array($animal1, $animal2, $animal3, $animal4, $animal5);

    Animal::show_objects($animalArray);

    echo "<br>";
    $animal1->show('classification');
    echo "<br>";
    $animal1->search('numLimbs', 4);
    echo "<br>";
    echo "<br>";
    $animal2->show('classification');
    echo "<br>";
    $animal2->search('numOffspring', 4);
    echo "<br>";
    echo "<br>";
    $animal3->show('classification');
    echo "<br>";
    $animal3->search('classification', 'Snake');
    echo "<br>";
    echo "<br>";    ?>

</body>

</html>