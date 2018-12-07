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
    

class Person{
    public $isAlive=true;
     public $firstname;
     public $lastname;
     public $age;
     
     public function _construct($firstname,$lastname,$age){
         $this->firsname=$firstname;
         $this->lastname=$lastname;
         $this->age=$age;



    }
}
$teacher=new Person("boring","12345",12345);
$student=new Person("Roger","Escobar",34);

echo $teacher->$age;
echo $student->$age;



    
    ?>


    </p>
</body>
</html>