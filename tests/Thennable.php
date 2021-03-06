<?php
namespace GuzzleHttp\Promise\Tests;

use GuzzleHttp\Promise\Promise;

class Thennable
{
    private $nextPromise = null;

    public function __construct()
    {
        $this->nextPromise = new Promise();
    }

    public function then($res = null, $rej = null)
    {
        return $this->nextPromise->then($res, $rej);
    }

    public function resolve($value)
    {
        $this->nextPromise->resolve($value);
    }
}
