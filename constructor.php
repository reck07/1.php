<html>
    <body>
    <?php
    /* it allows an individual to allot an object properties while the object creation */
        class Fruit {

            public $name;
            public $color;

            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            } 
            function get_name() {
                return $this->name;
            }
            function get_color() {
                return $this->color;
            } 
        }
$strawberry = new Fruit("Strawberry","Pink");
echo $strawberry->get_name();   
echo "<br>";
echo $strawberry->get_color();
?>
</body>
</html>