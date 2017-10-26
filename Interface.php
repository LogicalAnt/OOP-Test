<?php
   interface TroopsInterface{
        public function health();
        public function target();
  }
   

       class HogRider implements TroopsInterface
       {
           
           public function health ()
           {
                return 100;
           }
           public function target ()
           {
                return "Building";
           }
              
       }

       class Minion implements TroopsInterface
       {
           
           public function health ()
           {
                return 70;
           }

           public function target ()
           {
                return "Air and ground";
           }
              
       }


      
       class Troops
       {
           private $troops;
           function __construct(TroopsInterface $troops)
           {
               $this->troops= $troops;
           }
           public function details()
           {
                echo $this->troops->health().PHP_EOL;
                echo $this->troops->target().PHP_EOL;
           }
           
       }

       
       (new Troops(new HogRider))->details();
       (new Troops(new Minion))->details();
    
?>
