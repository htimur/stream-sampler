<?php

namespace Tests\Iterator;

use Iterator\StreamIterator;
use org\bovigo\vfs\vfsStream;

class StreamIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testIterator()
    {
        $content = <<<EOT
0
1
2
3
4
5
6
7
8
9
EOT;
        $root = vfsStream::setup('root');
        $file = vfsStream::newFile('test')->withContent($content)->at($root);

        $iterator = new StreamIterator($file->url());
        $result = [];

        foreach ($iterator as $item) {
            $result[] = (int)$item;
        }

        $this->assertEquals([0,1,2,3,4,5,6,7,8,9], $result);
    }
}
