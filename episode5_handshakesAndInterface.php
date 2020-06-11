<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewsletterSubscriptionController
{
//    public function store($newsletter)  // first solution was using 'duck typing'. In duck typing, an object's suitability is determined by the presence of certain methods and properties, rather than the type of the object itself
    public function store(Newsletter $newsletter)   // type as Interface not a Class -> so i can pass any class that implement interface and has this method
    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new CampaignMonitor());