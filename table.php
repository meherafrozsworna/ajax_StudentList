<?php

$data = $_REQUEST['q'];

class Student {
  public $id;
  public $name;
  public $score;

  public function  __construct($id, $name, $score) {
    $this->id = $id;
    $this->name = $name;
    $this->score = $score;
  }
}
$class5[] = new Student(1,"Roni",35); 
$class5[] = new Student(2,"koli",45); 
$class5[] = new Student(3,"Gopi",50);  

$class6[] = new Student(1,"Mala",67); 
$class6[] = new Student(2,"Joni",34); 
$class6[] = new Student(3,"Mitu",27);
$class6[] = new Student(3,"Binu",70);

$class7[] = new Student(1,"Shimul",12); 
$class7[] = new Student(2,"Kona",90); 
$class7[] = new Student(3,"Shimu",40);
$class7[] = new Student(2,"kobba",55); 
$class7[] = new Student(3,"Mili",34);


if($data == "5"){
    foreach ($class5 as $student) {
            echo "<tr>";
            echo "<td><div class=\"custom-control custom-checkbox\"><input type=\"checkbox\" class=\"check_box\" id=\"checkbox\" value= \"$student->score\" ></div> </td>";
            echo "<td>" . $student->id . "</td>";
            echo "<td>" . $student->name . "</td>";
            echo "<td>" . $student->score . "</td>";
            echo "</tr>";
    
    }
}

if($data == "6"){
    foreach ($class6 as $student) {
            echo "<tr>";
            echo "<td><div class=\"custom-control custom-checkbox\"><input type=\"checkbox\" class=\"check_box\" id=\"checkbox\" value= \"$student->score\" ></div> </td>";
            echo "<td>" . $student->id . "</td>";
            echo "<td>" . $student->name . "</td>";
            echo "<td>" . $student->score . "</td>";
            echo "</tr>";
    
    }
}

if($data == "7"){
    foreach ($class7 as $student) {
            echo "<tr>";
            echo "<td><div class=\"custom-control custom-checkbox\"><input type=\"checkbox\" class=\"check_box\" id=\"checkbox\" value= \"$student->score\" ></div> </td>";
            echo "<td>" . $student->id . "</td>";
            echo "<td>" . $student->name . "</td>";
            echo "<td>" . $student->score . "</td>";
            echo "</tr>";
    
    }
}




?>