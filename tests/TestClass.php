<?php
namespace Tests\Ecailles\CallableObject;

class TestClass
{
    public static function classMethodWithParameters($parameter1, $parameter2)
    {
        return [$parameter1, $parameter2];
    }

    public static function classMethodWithoutParameters()
    {
    }

    public function instanceMethodWithParameters($parameter1, $parameter2)
    {
        return [$parameter1, $parameter2];
    }

    public function instanceMethodWithoutParameters()
    {
    }
}
