<?php
    class TrafficLight{
        public string $red ="";
        public string $yellow = "";
        public string $green = "";

        public function setState($state){
            switch ($state) {
                default:
                case 0:
                    $this->red = "red";
                    $this->yellow = "black";
                    $this->green = "black";
                    break;
                case 1:
                    $this->red = "red";
                    $this->yellow = "yellow";
                    $this->green = "black";
                    break;
                case 2:
                    $this->red = "black";
                    $this->yellow = "black";
                    $this->green = "green";
                    break;
                case 3:
                    $this->red = "black";
                    $this->yellow = "yellow";
                    $this->green = "black";
                    break;
            }
            return ($state + 1) % 4;
        }

}