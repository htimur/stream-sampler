<?php

namespace Sampler;

/**
 * Class ReservoirSampler
 *
 * @package Sampler
 * @author  Timur Khamrakulov <timur.khamrakulov@gmail.com>
 */
class ReservoirSampler implements SamplerInterface
{
    /**
     * @var \Traversable
     */
    private $iterator;

    /**
     * @param \Traversable $iterator
     */
    public function __construct(\Traversable $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * @param int $length
     *
     * @return array
     */
    public function getSample($length)
    {
        $reservoir = [];
        $i         = 0;

        foreach ($this->iterator as $item) {
            if ($i < $length) {
                $reservoir[$i] = $item;
            } else {
                $random = (int)mt_rand(0, $i);
                if ($random < $length) {
                    $reservoir[$random] = $item;
                }
            }

            $i++;
        }

        return $reservoir;
    }
}
