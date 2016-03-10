<?php

namespace Tests\Kata;

use Kata\Sut;

class SutTest extends BaseTestCase
{
    /** @test */
    public function
    it_should_instantiate_sut_class()
    {
        $sut = new Sut();
        $this->assertInstanceOf('\Kata\Sut', $sut);
    }
}
