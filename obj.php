<html>
    <body>
        <h1> the fruit program</h1>
        <?php 
        /* it is an instance of a class where as, a class creates instances of the same kind of object */
            class Fruit {

                public $name;
                public $color;

            function set_name($name) {
                $this->name = $name;
            }

            function get_name() {
                return $this->name;
            }
    }
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name("apple");
    $banana->set_name("banana");

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>

    </body>
</html>