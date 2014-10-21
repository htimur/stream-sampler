<?php

namespace Iterator;

/**
 * Class StreamIterator
 *
 * @package Iterator
 * @author  Timur Khamrakulov <timur.khamrakulov@gmail.com>
 */
class StreamIterator implements \IteratorAggregate
{
    /**
     * @var string
     */
    private $url;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $stream = fopen($this->url, 'r');
        if (!$stream) {
            throw new \Exception();
        }

        while ($line = fgets($stream)) {
            yield $line;
        }

        fclose($stream);
    }
}
