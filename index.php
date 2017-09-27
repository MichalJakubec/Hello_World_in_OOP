<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Chessboard</title>
        <style>
             body {
      color: #00FF00;
      background-color: #000000;
  }
        </style>
    </head>
    <body>
        <?php
        class Speaker
        {
            public $greeting;
            
            public function __construct($greeting)
            {
                $this->greeting = $greeting;
            }
            
            public function sayHello()
            {
                echo("Hello World");
            }
        }
        
        $speaker = new Speaker(" to everybody!!!");
        echo($speaker->greeting . $speaker->sayHello());
        
        ?>
    </body>
</html>