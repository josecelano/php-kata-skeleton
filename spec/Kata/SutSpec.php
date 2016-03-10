<?php

namespace spec\Kata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SutSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kata\Sut');
    }
}
