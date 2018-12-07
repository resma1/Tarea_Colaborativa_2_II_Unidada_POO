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
    

class Vehicle{
    public function hank(){
    return "HONK HONK";
      } 
    } //cierre class Vehicle
  
    class Bicycle extends Vehicle{
        public function hank(){
            return "Beep beep";
        } 
    } 
 $bicycle=new Bicycle();
 echo $bicycle->hank();

    ?>


    </p>
</body>
</html>