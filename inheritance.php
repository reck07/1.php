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

        public function message() {
        echo "Is cheery a fruit or a berry?";
        }
    }
        $cherry = new Cherry ("Cherry", "red");
        $cherry->message();
        $cherry->intro();
?>
</body>
</html>