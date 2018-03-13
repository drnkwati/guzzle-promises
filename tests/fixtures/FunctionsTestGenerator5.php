<?php
namespace GuzzleHttp\Promise\Tests;

use GuzzleHttp\Generators\AbstractGenerator;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\RejectedPromise;

class FunctionsTestGenerator5 extends AbstractGenerator
{
    private $_rej;

    public function __construct($rej)
    {
        $this->_rej = $rej;
    }

    public function resume($position)
    {
        if ($position === 2) {

            return null;
        }

        if ($position === 0) {

            return array(new FulfilledPromise(0));
        }

        return array($this->_rej);
    }
}
