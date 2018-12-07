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
    

    class Person
    {
        public $isAlive = true;
        public $firstname;
        public $lastname;
        public $age;
	
        public function __construct($firstname, $lastname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
			
		} // cierre constr
        public function greet()
    {
        return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you!";
		}//cierre greet
	
} //cierre class

        $teacher = new Person ("boring", "12345", 12345);
        $student = new Person ("Phillip", "Souter", 27);
	
        echo ($teacher->isAlive);
echo $teacher->greet();
echo $student->greet();




    
    ?>


    </p>
</body>
</html>