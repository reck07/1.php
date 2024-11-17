<html>
    <body>
    <?php
    /* the function is called when the object stops working  */
        class Fruit {

            public $name;
            public $color;

            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            } 
            function __destruct() {
                echo "the Fruit is {$this->name} and the color is {$this->color}.";
            }
        }
$strawberry = new Fruit("Strawberry","Pink");
?>
</body>
</html>