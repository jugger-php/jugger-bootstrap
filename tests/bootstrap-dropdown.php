<?php

use PHPUnit\Framework\TestCase;
use jugger\bootstrap\Dropdown;

class DropdownTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            Dropdown::widget([
                'id' => 'test',
                'class' => 'dropdown show',
                'button' => 'Test Label',
                'header' => 'Header Items',
                'items' => [
                    '<span>Link1</span>',
                    new Link('Link2', '#'),
                    null, // devider
                    new Link('Link3'),
                ],
            ]),
            "<div id='test' class='dropdown show'>".
            "<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Test Label</button>".
            "<div class='dropdown-menu'>".
            "<h6 class='dropdown-header'>Header Items</h6>".
            "<a class='dropdown-item' href='#'><span>Link1</span></a>".
            "<a class='dropdown-item' href='#'>Link2</a>".
            "<div class='dropdown-divider'></div>".
            "<a class='dropdown-item' href='#'>Link3</a>".
            "</div>".
            "</div>"
        );

        $this->assertEquals(
            Dropdown::widget([
                'align-right' => true,
                'dropup' => true,
                'split' => true,
                'button' => new Link('Test Label', '#', [
                    'class' => 'btn btn-secondary',
                ]),
                'items' => [
                    new Link('Test1'),
                    new Link('Test2'),
                    new Link('Test3'),
                ],
            ]),
            "<div class='dropdown dropup'>".
            "<a href='#' class='btn btn-secondary'>Test Label</a>".
            "<button type='button' class='btn btn-secondary dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span class='sr-only'>Toggle Dropdown</span></button>".
            "<div class='dropdown-menu dropdown-menu-right'>".
            "<a class='dropdown-item' href='#'>Link1</a>".
            "<a class='dropdown-item' href='#'>Link2</a>".
            "<a class='dropdown-item' href='#'>Link3</a>".
            "</div>".
            "</div>"
        );
    }
}
