<?php
    class TrafficLight{
        public $red;
        public $yellow;
        public $green;
        public $hs;

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
                case 4:
                    $this->red = false;
                    $this->hs = true;
                    $this->green = false;
            }
        }

        public function changeState($state,$next){
            switch ($next){
                default:
                    return $state;
                case "true":
                    $state = ($state==4) ? 0 : ($state+1)%4;
                    return $state;
                case "false":
                    if($state == 0 || $state == 2){
                        return $state = 4;
                    }
                    else{
                        return $state;
                    }
            }
        }

        public function getTimeOut($state){
            switch ($state){
                default:
                    return false;
                case 0:
                    return 10000;
                case 1:
                case 3:
                    return 1000;
                case 2:
                    return 5000;
            }
        }

}