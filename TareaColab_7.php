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
    

    class Shape{
	
        public $hasSides=true;
              
        } //cierre class Shape
      
        class Square extends Shape{
            
            } //cierre class Shape
    $square=new Square();
            
         if(property_exists($square,"hasSides")){
         echo "I have sides!";
                  
            
        }

    </p>
</body>
</html>