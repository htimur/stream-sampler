<?php

namespace Tests\Sampler;

use Sampler\ReservoirSampler;

class ReservoirSamplerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReservoirSampler
     */
    private $sampler;

    protected function setUp()
    {
        $this->sampler = new ReservoirSampler(new \ArrayIterator([0,1,2,3,4,5,6,7,8,9,]));
    }

    public function testSampleGeneration()
    {
        $this->assertCount(1, $this->sampler->getSample(1));
        $this->assertCount(4, $this->sampler->getSample(4));
        $this->assertCount(5, $this->sampler->getSample(5));
    }
}
