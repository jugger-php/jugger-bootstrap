<?php

use PHPUnit\Framework\TestCase;

class CardsTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(
            Card::widget([
                'title' => 'Title',
                'subtitle' => 'Sub Title',
                'content' => 'Content block',
                'links' => [
                    new Link('Test1'),
                    new LinkButton('Test2', '#', [
                        'type' => 'primary',
                    ]),
                ],
            ]),
            "<div class='card'>".
            "<div class='card-block'>".
            "<h4 class='card-title'>Title</h4>".
            "<h6 class='card-subtitle mb-2 text-muted'>Sub Title</h6>".
            "<p class='card-text'>Content block</p>".
            "<a href='#' class='card-link'>Test1</a>".
            "<a href='#' class='btn btn-primary'>Test2</a>".
            "</div>".
            "</div>"
        );
    }
}
