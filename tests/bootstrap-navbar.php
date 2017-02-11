<?php

use PHPUnit\Framework\TestCase;

class NavbarTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            new Navbar([
                'brand' => 'My brand',
                'fixed' => true,
                'nav' => new Nav([
                    'items' => [
                        new Link('Test1'),
                        new Link('Test2'),
                        new Link('Test3'),
                    ],
                ]),
            ]),
            "<nav class='navbar navbar-light navbar-toggleable-md bg-faded fixed-top'>".
            "<button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbar-nav-id-1' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>".
            "<span class='navbar-toggler-icon'></span>".
            "</button>".
            "<h1 class='navbar-brand mb-0'>My brand</h1>".
            "<div class='collapse navbar-collapse' id='navbar-nav-id-1'>".
            "<ul class='navbar-nav mr-auto'>".
            "<li class='nav-item'><a class='nav-link' href='#'>Test1</a></li>".
            "<li class='nav-item'><a class='nav-link' href='#'>Test2</a></li>".
            "<li class='nav-item'><a class='nav-link' href='#'>Test3</a></li>".
            "</ul>".
            "</div>".
            "</nav>"
        );

        $this->assertEquals(
            new Navbar([
                'id' => 'test',
                'class' => 'navbar navbar-inverse navbar-toggleable-sm bg-inverse',
                'brand' => new Link('My brand'),
                'nav' => new Nav([
                    'items' => [
                        new Link('Test1'),
                    ],
                ]),
                'text' => 'Navbar text',
            ]),
            "<nav id='test' class='navbar navbar-inverse navbar-toggleable-sm bg-inverse'>".
            "<button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbar-nav-id-2' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>".
            "<span class='navbar-toggler-icon'></span>".
            "</button>".
            "<a class='navbar-brand' href='#'>My brand</a>".
            "<div class='collapse navbar-collapse' id='navbar-nav-id-2'>".
            "<ul class='navbar-nav mr-auto'>".
            "<li class='nav-item'><a class='nav-link' href='#'>Test1</a></li>".
            "</ul>".
            "<span class='navbar-text'>Navbar text</span>".
            "</div>".
            "</nav>"
        );
    }
}
