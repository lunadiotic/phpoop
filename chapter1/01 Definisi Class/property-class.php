<?php

class Student
{
    var $name;
    var $country = 'None';
}

// new Student; Harus di assign untuk bisa digunakan
$student1 = new Student;
$student1->name = 'Hakim';

$student2 = new Student;
$student2->name = 'Luna';

echo $student1->name . "<br />";
echo $student2->name . "<br />";

$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Properti milik object: ";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if (property_exists('Student', 'name')) {
    echo "Properti name tersedia";
} else {
    echo "Properti name tidak tersedia";
}
