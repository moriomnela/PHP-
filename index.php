<?php 
// if(file_exists(__DIR__. '/autoload.php')){
//     require_once __DIR__. '/autoload.php';
//   }

// //first practise
// $PHP = true;
// $msc = true;
// $height = 5.8;
// $income = 50000;

// if($height >= 5.5 && $income >= 50000 ){
//   echo"alhamdulillah kobol";
// }else{
//   echo"Raji na";
// }
$student = [
 "name"             => "Nela",
 "age"              =>  20,
 "father_name"      => "Nazrul Islam",
 "mother_name"      => "Rokeya Begum",
 "date_of_birth"    => "23-03-2004 10:10:20",
 "foods"            => ["Ilish","Meat","Khichori","Ice-Cream","Singara"],
 "isMarried"        => false,
 "roll"             => 05,
 "class"            =>"Five",
 "result"           => [
                        "Bangla"      => 87,
                        "English"     => 79,
                        "Math"        => 85,
                        "Religioous"  => 86,
                        "Science"     => 89,
                        "Final"       => [
                                       "gpa"   => 4.98,
                                       "Grade" => "A"
                                       ]
                       ] 
];
?>
<h1><?php echo  $student["name"]?></h1>
<p><?php echo $student["isMarried"] ? "Tomi bibahito" : "Obibahito";?></p>
<h3>Prio  khabar list</h3>
<ul>

</ul>
Bangla : <?php echo $student["result"]["Bangla"];?><br>
English : <?php echo $student ["result"]["English"]?><br>
GPA : <?php echo $student ["result"]["Final"]["gpa"]?>


?>