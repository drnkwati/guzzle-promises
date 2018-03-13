<?php
namespace GuzzleHttp\Promise\Tests;

use GuzzleHttp\Generators\AbstractGenerator;
use GuzzleHttp\Promise\Promise;

class CoroutineTestGenerator2 extends AbstractGenerator
{
    /**
     * @param int $position
     *
     * @return null|mixed
     */
    protected function resume($position)
    {
        if ($position === 1) {

            return null;
        }

        $promise = new Promise(function () use (&$promise) {
            $promise->reject(new \Exception());
        });

        return array($promise);
    }
}

//yield $promise = new Promise(function () use (&$promise) {
//    $promise->reject(new \Exception());
//});
