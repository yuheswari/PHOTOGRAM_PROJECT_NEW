<?php
class Mic {
    private $brand;
    private $model;
    private $light;

    public static function testfunction(){   //static function
        printf("This is a static function...");
    }

    public function __construct($brand) {
        $this->brand = $brand;
        printf("Constructing object....");
    }

    public function setLight($light) {
        $this->light = $light;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModelProxy() {
        return $this->model;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function add($a, $b) {
        return $a + $b;
    }
    public function __destruct() {
        printf("Destructing object....:brand:$this->brand..");
    }
}
    class DupMic{
        public static function testfunction(){
            printf("This is a static function...");
        }
    }

?>