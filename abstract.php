<?php

   abstract class SingerProp
   {
   		protected $name, $genre;
   		abstract function canScream($param);
   		
   		public function name($name){
   			$this->name = $name;
   			return $this;
   		}
   		public function genre($genre){
   			$this->genre = $genre;
   			return $this;
   		}
   }


   class Singer extends SingerProp
   {
   		private $ability;
	   	public function canScream ($param)
	   	{
	   		$this->ability = $param ? "oooh yeah\n" : "nono\n";
	   		return $this;
	   	}
	   	
	   	public function details(){
	   		echo $this->name.PHP_EOL;
	   		echo $this->genre.PHP_EOL;
	   		echo $this->ability.PHP_EOL;
	   		return $this;
	   	}
	   		   	   	   	
   }


   (new Singer)->name("Axl Rose")->genre("hard rock")->canScream(1)->details();
   (new Singer)->name("Justin dickon")->genre("baby")->canScream(0)->details();
   
?>
