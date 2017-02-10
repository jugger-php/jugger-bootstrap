<?php

use PHPUnit\Framework\TestCase;

class TypographTest extends TestCase
{
    public function testDisplay()
    {
        $this->assertEquals(
            new Display('Header'),
            "<h1 class='display-1'>Header</h1>"
        );
        $this->assertEquals(
            new Display('Header', 1),
            "<h1 class='display-1'>Header</h1>"
        );
        $this->assertEquals(
            new Display('Header', 2),
            "<h1 class='display-2'>Header</h1>"
        );
        $this->assertEquals(
            new Display('Header', 3),
            "<h1 class='display-3'>Header</h1>"
        );
        $this->assertEquals(
            new Display('Header', 4),
            "<h1 class='display-4'>Header</h1>"
        );
        // options
        $this->assertEquals(
            new Display('Header', 1, [
                'data-id' => 'value',
            ]),
            "<h1 class='display-1' data-id='value'>Header</h1>"
        );
    }

    public function testLead()
    {
        $this->assertEquals(
            new Lead('Content'),
            "<p class='lead'>Content</p>"
        );
        $this->assertEquals(
            new Lead('Content', [
                'id' => 'test',
            ]),
            "<p class='lead' id='test'>Content</p>"
        );
    }

    public function testBlockquotes()
    {
        $this->assertEquals(
            new Blockquotes('Content'),
            "<blockquote class='blockquote'>Content</blockquote>"
        );
        $this->assertEquals(
            new Blockquotes('Content', [
                'id' => 'test',
            ]),
            "<blockquote class='blockquote' id='test'>Content</blockquote>"
        );
        $this->assertEquals(
            new Blockquotes('Content', [
                'id' => 'test',
                'footer' => 'Footer text',
            ]),
            "<blockquote class='blockquote' id='test'>Content<footer class='blockquote-footer'>Footer text</footer></blockquote>"
        );
        $this->assertEquals(
            new Blockquotes('Content', [
                'id' => 'test',
                'reverse' => true,
            ]),
            "<blockquote class='blockquote blockquote-reverse' id='test'>Content</blockquote>"
        );
    }
}
