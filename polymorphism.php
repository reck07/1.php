<html>
    <body>
    <?php
    /*  1.parent class - A base class that is inherited from another class
        2.child class - A subclass that inherits from another class
    */
        class Fruit {

            public $name;
            public $color;

            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            public function intro() {
                echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
            }
        }

    class Cherry extends Fruit {
        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro() {
            echo "this fruit is {$this->name}, the color is {$this->color}, and the weigth is {$this->weight} gram.";
        }
    }

    $cherry= new Cherry("cherry","bright pink", 20);
    $cherry->intro();
?>
</body>
</html>