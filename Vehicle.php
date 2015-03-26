<?php

    namespace Company\Vehicles;
    
    trait Constructors {
        public static function vehicleProperties($d, $w) {
            $temp = new self();
            $temp->doors = $d;
            $temp->wheels = $w;
            
            return $temp;
        }
        
        public static function changeDoors($n) {
            $temp = new self();
            $temp->doors = $n;
            
            return $temp;
        }
        
        public static function changeWheels($n) {
            $temp = new self();
            $temp->wheels = $n;
            
            return $temp;
        }
    }
    trait Movement {
        
        public $accel;
        public $decel;
        
        public function acceleration( ) {
            //return $this->distance/$this->time;
            return "Can accelerate";
        }

        public function deceleration( ) {
            //return -($this->distance/$this->time);
            return "Can decelerate";
        }
    }
    
    trait Headlights {
        
        public $headlight;
        
        public function checkHeadlights( ) {
            return "Headlights are functional";
        }
    }

    trait WindshieldWipers {
        
        public $windshieldWipers;
        public function checkWindshieldWipers(){
            return "Wipers are functional";
        }
    }

    
    class Vehicle {

        protected $doors;
        protected $wheels;

        public function __construct() {
            $this->doors = null;
            $this->wheels = null;
        }

        public function __get($name) {
            
            return $this->$name;

        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        /*public function getDoors() {
            return $this->doors;
        }

        public function setDoors($d) {
            $this->doors = $d;
        }

        public function getWheels() {
            return $this->wheels;
        }

        public function setWheels($w) {
            $this->wheels = $w;
        }*/

        public function __toString() {
            return "This is a vehicle";
        }

    }

    class Car extends Vehicle {

        use Constructors, Movement, Headlights, WindshieldWipers;

        public function __construct () {
            parent::__construct();
            $this->doors = 4;
            $this->wheels = 4;
        }

        public function __toString() {
            $out = "This is a car."
            . "<br/>Doors: ". $this->doors
            . "<br/>Wheels: ". $this->wheels
            . "<br/>Headlights: ".$this->checkHeadlights()
            . "<br/>Wipers: ".$this->checkWindshieldWipers()
            . "<br/>Acceleration: ".$this->acceleration()
            . "<br/>Deceleration: ".$this->deceleration()
            . "<br/>-----------------------------------------<br/>";
            return $out;
        }

    }

    class Truck extends Vehicle {

        protected $loadingGate;

        use Constructors, Movement, Headlights, WindshieldWipers;

        public function __construct () {
            parent::__construct();
            $this->doors = 2;
            $this->wheels = 4;
            $this->loadingGate = false;
        }

        public function __toString() {
            $out = "This is a truck."
            . "<br/>Doors: ". $this->doors
            . "<br/>Wheels: ". $this->wheels
            . "<br/>Headlights: ".$this->checkHeadlights()
            . "<br/>Wipers: ".$this->checkWindshieldWipers()
            . "<br/>Acceleration: ".$this->acceleration()
            . "<br/>Deceleration: ".$this->deceleration()
            . "<br/>Loading Gate: ";
            $out .= $this->loadingGate ? "True" : "False";
            $out .= "<br/>-----------------------------------------<br/>";
            return $out;
        }

    }

    class Motorcycle extends Vehicle {

        protected $sideCart;

        use Constructors, Movement, Headlights;

        public function __construct () {
            parent::__construct();
            $this->doors = 0;
            $this->wheels = 2;
            $this->sideCart = false;
        }

        public function __toString() {
            $out = "This is a motorcycle"
            . "<br/>Wheels: ". $this->wheels
            . "<br/>Headlights: ".$this->checkHeadlights()
            . "<br/>Acceleration: ".$this->acceleration()
            . "<br/>Deceleration: ".$this->deceleration()
            . "<br/>Side Cart: ";
            $out .= $this->sideCart ? "True" : "False";
            $out .= "<br/>-----------------------------------------<br/>";
            
            return $out;
        }

    }
    
?>