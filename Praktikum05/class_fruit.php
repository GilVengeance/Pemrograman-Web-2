<?php
class Fruit{
    //variable
    public $name,
           $warna;

    //konstruk       
    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }

    //method
    public function intro(){
        echo "<br/>Ini adalah buah {$this->name} dan warna buah ini {$this->warna}";
    }
}

//anak class
class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Apakah aku buah atau beri?";
    }
}

//object
$buah = new Strawberry('Strawberry', 'Merah');
$buah->message();
$buah->intro();

?>