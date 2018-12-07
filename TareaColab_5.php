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
    

    class Dog{
        public $numLegs=4;
        public $name;
    
        public function __construct($name){
            $this->name=$name;
            }  
        public function bark(){
            return "Woofl";
                } 
        public function greet(){
            return "I am a dog named". $this->name;
             }         
                
        } // CIERRE DE LA CLASE dog
    
    
    $dog1=new Dog("Barker");
    $dog2=new Dog("Amigo");
    
    echo $dog1->bark();
    echo $dog2->greet(); 
    ?>


    </p>
</body>
</html>