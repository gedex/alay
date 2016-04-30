<?php

namespace Gedex\Alay;

class AlayTest extends \PHPUnit_Framework_TestCase
{
    protected static $testCases = [
        'saya keren' => 's4y4 k3r3n',
        'minta donk!' => 'm1nt4 d0nk!',
    ];

    public function testToAlay() {
        foreach (self::$testCases as $input => $expected) {
            $this->assertEquals($expected, Alay::toAlay($input));
        }
    }

    public function testNormalize() {
        foreach (self::$testCases as $expected => $input) {
            $this->assertEquals($expected, Alay::normalize($input));
        }
    }
}
