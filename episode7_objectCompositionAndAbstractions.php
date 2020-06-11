<?php

class Subscription
{
    private Gateway $gateway;

//    public function __construct(StripeGateway $gateway) // pointer to another class: object composition
    public function __construct(Gateway $gateway) // abstraction (subscription doesn't care about gateway type)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        // find stripe customer
        $this->gateway->findCustomer();

    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {

    }
}

interface Gateway
{
    public function findCustomer();

    public function findSubscriptionByCustomer();
    }

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

new Subscription(new StripeGateway());
new Subscription(new BraintreeGateway());
