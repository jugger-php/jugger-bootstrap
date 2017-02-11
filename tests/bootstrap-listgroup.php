<?php

use PHPUnit\Framework\TestCase;

class ListGroupTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            new ListGroup([
                'id' => 'test',
                'items' => [
                    'any content',
                    new Link('Test'),
                    [
                        'active' => true,
                        'content' => new Button('Hahaha'),
                    ],
                    [
                        'disabled' => true,
                        'content' => new Button('Hahaha'),
                    ],
                ],
            ]),
            "<ul id='test' class='list-group'>".
            "<li class='list-group-item'>any content</li>".
            "<li class='list-group-item'><a href='#'>Test</a></li>".
            "<li class='list-group-item active'><button class='btn' type='button'>Hahaha</button></li>".
            "<li class='list-group-item disabled'><button class='btn' type='button'>Hahaha</button></li>".
            "</ul>"
        );

        $this->assertEquals(
            new ListGroup([
                'links' => [
                    new Link('Test1'),
                    [
                        'active' => true,
                        'content' => new Link('Test2'),
                    ],
                    [
                        'disabled' => true,
                        'content' => new Link('Test3'),
                    ],
                ],
            ]),
            "<ul class='list-group'>".
            "<a class='list-group-item list-group-item-action'>Test1</a>".
            "<a class='list-group-item active'>Test2</a>".
            "<a class='list-group-item list-group-item-action disabled'>Test3</a>".
            "</ul>"
        );
    }
}
