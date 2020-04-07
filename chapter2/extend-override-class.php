<?php

class User
{
    var $firstName;
    var $lastName;
    var $userName;
    var $isAdmin = false;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends User
{
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }
}

class Admin extends User
{
    var $isAdmin = true;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName . ' (Admin)';
    }
}

$u = new User;
$u->firstName = 'Hakim';
$u->lastName = 'Sembiring';

$a = new Admin;
$a->firstName = 'Admin';
$a->lastName = 'Istrator';

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Baru';
$c->city = 'Cirebon';
$c->country = 'Indonesia';

echo $u->fullName() . "<br />";
// echo $u->location() . "<br />";

echo $a->fullName() . "<br />";

echo $c->fullName() . "<br />";
echo $c->location() . "<br />";

echo get_parent_class($u) . "<br />";
echo get_parent_class($c) . "<br />";

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass User <br />";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br />";
