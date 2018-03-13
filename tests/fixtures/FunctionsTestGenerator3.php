<?php
namespace GuzzleHttp\Promise\Tests;

use GuzzleHttp\Generators\AbstractGenerator;
use GuzzleHttp\Promise\FulfilledPromise;

class FunctionsTestGenerator3 extends AbstractGenerator
{
    public function resume($position)
    {
        if ($position === 2) {

            return null;
        }

        if ($position === 0) {

            return array(new FulfilledPromise(0));
        }

        throw new \Exception('a');
    }
}
