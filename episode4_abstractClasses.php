<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();  // in laravel: class_basename() helper fct

        // FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));  // replace each capital letter with space+capital letter - trim to remove the space at beginning
    }

     public function icon()
     {
         return strtolower(str_replace(' ', '-', $this->name())).'.png';    // concatenate
     }

     // we want to put a condition: if you want to extend from achievementType, you also need to declare a qualifier
     abstract public function qualifier($user);
        // in the past, an Exeption is written so when this method is called it will throw an error if not overwritten by an inherited class
        // now the solution is to declare it as abstract with no content


}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}

$achievement = new FirstBestAnswer();
 echo  $achievement->icon();