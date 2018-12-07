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
  public static  function say(){
       echo "Here are my thoughts !";
    }
}
class Blogger extends Person{
    const cats=50;
  }
  echo Blogger::say();
  echo Blogger::cats;
    
 

    ?>


    </p>
</body>
</html>