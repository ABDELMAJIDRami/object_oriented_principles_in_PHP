<?php

class AchievementBadge
{
    public $title;
    public $description;
    public $points;
}

class Team
{
    protected $name;

//    protected $members = [];
    protected $members;

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }
    public function members()
    {
        return $this->members;
    }
    public function add($name)
    {
        $this->members[] = $name;   //append to array
    }
    public function cancel()
    {

    }
    public function manager()
    {

    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}


//$acme = new Team('Acme', ['John Doe', 'Rami Abdel Majid']);
//
//$acme->add('batata');
//$acme->add('test');
//var_dump($acme->members());

$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Rami Abdel Majid'),
]);

var_dump($acme->members());

