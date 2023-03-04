<?php

class test
{
    public function MethodTest()
    {
        return __FUNCTION__;
    }
}

$test = new test();
echo $test->MethodTest();
