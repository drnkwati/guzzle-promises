<?php
namespace GuzzleHttp\Promise\Tests;

use GuzzleHttp\Generators\AbstractGenerator;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\Promise\RejectionException;

class FunctionsTestGenerator13 extends AbstractGenerator
{
    private $_promises;

    public function __construct($promises)
    {
        $this->_promises = $promises;
    }

    public function resume($position)
    {
        if ($position === count($this->_promises) + 1) {

            return null;
        }

        if ($position === 0) {

            return array(new FulfilledPromise('foo!'));
        }

        return array($this->_promises[($position - 1)]);
    }
}

//yield new P\FulfilledPromise('foo!');
//foreach ($promises as $promise) {
//    yield $promise;
//}