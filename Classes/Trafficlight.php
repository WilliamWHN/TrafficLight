<?php
    class TrafficLight{
        public bool $red;
        public bool $yellow;
        public bool $green;

        public function setState($state){
            switch ($state) {
                default:
                case 0:
                    $this->red = true;
                    $this->yellow = false;
                    $this->green = false;
                    break;
                case 1:
                    $this->red = true;
                    $this->yellow = true;
                    $this->green = false;
                    break;
                case 2:
                    $this->red = false;
                    $this->yellow = false;
                    $this->green = true;
                    break;
                case 3:
                    $this->red = false;
                    $this->yellow = true;
                    $this->green = false;
                    break;
            }
        }

}