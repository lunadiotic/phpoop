<?php

class Student
{
    var $first_name;
    var $last_name;
    var $country = 'None';

    function sayHello()
    {
        return 'Hello, World!';
    }

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

// new Student; Harus di assign untuk bisa digunakan
$student1 = new Student;
$student1->first_name = 'Hakim';
$student1->last_name = 'Sembiring';

$student2 = new Student;
$student2->first_name = 'Luna';
$student2->last_name = 'Lovegood';

echo $student1->fullName() . "<br />";
echo $student2->fullName() . "<br />";

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello() tersedia";
} else {
    echo "Method sayHello() tidak tersedia";
}
