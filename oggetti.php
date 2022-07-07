<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ------- //
            // OGGETTI //
            // ------- //

            class Rettangolo {
                public $b;
                public $h;

                public function __construct($b, $h) {
                    $this->b = $b;
                    $this->h = $h;
                }

                public function get_area() {
                    return $this->b * $this->h;
                }
            }

            $rettangolo = new Rettangolo(10, 5);
            echo "L'area è di " . $rettangolo->get_area();
            echo "<br>";

            class Servizio {
                public $count;

                public function __construct() {
                }

                public static function get_servizio() {
                    $servizio = new static();
                    $servizio->count = 2;
                    return $servizio;
                }
            }

            $servizio = Servizio::get_servizio();
            echo $servizio->count;
            echo "<br>";
        ?>
    </body>
</html>
