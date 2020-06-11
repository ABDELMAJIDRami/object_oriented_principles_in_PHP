<?php
/**
class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

// "is a": a specialtyCoffeeMaker can make a coffee
class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

(new CoffeeMaker())->brew();
(new SpecialityCoffeeMaker())->brew();
(new SpecialityCoffeeMaker())->brewLatte();
 */

class Collection
{
    protected array $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
//        return array_sum(array_map(function ($item) use ($key) {
//            return $item->$key;
//        }, $this->items));
//        return array_sum(array_map(fn($item) => $item->$key, $this->items));
        return array_sum(array_column($this->items, $key));
    }
}

// "VideoCollection" is a "Collection"
class VideoCollection extends Collection
{
    public function length() {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideoCollection([
    new Video('some video', 100),
    new Video('some video 1', 200),
    new Video('some video 3', 300),
]);

//var_dump($videos->sum('length'));
//echo $videos->sum('length');
var_dump($videos->length());
echo $videos->length();