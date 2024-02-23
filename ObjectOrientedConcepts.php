<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opps</title>
</head>
<body>
    <h3>Opps is about creating classes and objects. Classes serves a template and multiple objects can be creates using a class<br></h3>
    <h2>In short classes are templates for creating objects</h2><br>
    <h3>If car is a class then DODGE and Chevrolet are objects</h3>



    <?php
      
      echo "OPPS IN PHP(GTA V)<br>";
      class player
      {
          //properties
          public $name;
          public $speed = 5;
          public $running = false;
      
          //method
      
          function set_name($name)
          {
              $this->name = $name;
          }
      
          function get_name()
          {
              return $this->name;
          }

          function run()
          {
            $this ->running = true;
          }
          function stop()
          {
            $this -> running = false;
          }
      
      }
      
      //Game starts here

      //4 plyers ar there
      $player1 = new player();
      
      $player1->set_name("RONAK");
      echo $player1->get_name();
      echo "<br>";
      $player2 = new player();
      
      $player2->set_name("RAWNAK");
      echo $player2->get_name();
      echo "<br>";
      $player3 = new player();
      
      $player3->set_name("RUXK");
      echo $player3->get_name();
      echo "<br>";
      $player4 = new player();
      
      $player4->set_name("rnk");
      echo $player4->get_name();
      
      
      ?>
      



</body>
</html>