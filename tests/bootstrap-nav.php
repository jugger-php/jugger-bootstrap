<?php

use PHPUnit\Framework\TestCase;

class NavTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            new Nav([
                'id' => 'test',
                'items' => [
                    new Link('Test1'),
                    [
                        'content' => new Link('Test2'),
                        'active' => true,
                    ],
                    [
                        'content' => new Link('Test3'),
                        'disabled' => true,
                    ],
                    [
                        'content' => new Link('Test4'),
                        'dropdown' => new Dropdown([
                            'items' => [
                                new Link('Link1'),
                                new Link('Link2'),
                                new Link('Link3'),
                            ],
                        ]),
                    ],
                ],
            ]),
            "<ul id='test' class='nav'>".
            "<li class='nav-item'>".
            "<a class='nav-link' href='#'>Test1</a>".
            "</li>".
            "<li class='nav-item'>".
            "<a class='nav-link active' href='#'>Test2</a>".
            "</li>".
            "<li class='nav-item'>".
            "<a class='nav-link disabled' href='#'>Test3</a>".
            "</li>".
            "<li class='nav-item dropdown'>".
            "<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Test4</a>".
            "<div class='dropdown-menu'>".
            "<a class='dropdown-item' href='#'>Link1</a>".
            "<a class='dropdown-item' href='#'>Link2</a>".
            "<a class='dropdown-item' href='#'>Link3</a>".
            "</div>".
            "</li>".
            "</ul>"
        );

        $this->assertEquals(
            new Nav([
                'class' => 'nav nav-tabs',
            ]),
            "<ul class='nav nav-tabs'></ul>"
        );
    }
}
