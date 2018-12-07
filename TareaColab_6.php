<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice makes perfect</title>

</head>
<body>
    <p>
    <?php 
    

class Cat{
    public $isAlive=true;
    public $numLegs=4;

    public function __construct($name){
       $this->name=$name;
   } // cierre construct

   public function meow() {
        return "Meow meow";
} //cierre meon
            
    } //cierre class cat
    $CodeCat=new Cat("prueba");
    echo $CodeCat->meow();

    ?>


    </p>
</body>
</html>