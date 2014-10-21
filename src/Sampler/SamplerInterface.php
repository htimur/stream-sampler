<?php

namespace Sampler;

/**
 * Interface SamplerInterface
 *
 * @package Sampler
 * @author  Timur Khamrakulov <timur.khamrakulov@gmail.com>
 */
interface SamplerInterface
{
    /**
     * @param int $length
     *
     * @return array
     */
    public function getSample($length);
}
