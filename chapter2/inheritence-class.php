<?php

class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends User
{
}

$u = new User;
$u->firstName = 'Hakim';
$u->lastName = 'Sembiring';

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Baru';

echo $u->fullName() . "<br />";
echo $c->fullName() . "<br />";

echo get_parent_class($u) . "<br />";
echo get_parent_class($c) . "<br />";

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass User <br />";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br />";
