<?php

use PHPUnit\Framework\TestCase;

class CarouselTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            new Carousel([
                'id' => 'test',
                'data' => [
                    'ride' => 'carousel',
                ],
                'items' => [
                    [
                        'src' => 'img-link.ext',
                    ],
                    new Img('img-link.ext', [
                        'class' => 'my-class',
                        'alt' => 'Carousel Item',
                    ]),
                    [
                        'src' => 'img-link.ext',
                        'caption' => new EmptyTag("<h3>Title</h3><p>Content</p>"),
                    ]
                ],
                'indicators' => true,
            ]),
            "<div id='test' data-ride='carousel' class='carousel slide'>".
            '<ol class="carousel-indicators">'.
            '<li data-target="#test" data-slide-to="0" class="active"></li>'.
            '<li data-target="#test" data-slide-to="1"></li>'.
            '<li data-target="#test" data-slide-to="2"></li>'.
            '</ol>'.
            '<div class="carousel-inner" role="listbox">'.
            '<div class="carousel-item active">'.
            '<img class="d-block img-fluid" src="img-link.ext">'.
            '</div>'.
            '<div class="carousel-item">'.
            '<img class="my-class" src="img-link.ext" alt="Carousel Item">'.
            '</div>'.
            '<div class="carousel-item">'.
            '<img class="d-block img-fluid" src="img-link.ext">'.
            '<div class="carousel-caption d-none d-md-block">'.
            '<h3>Title</h3>'.
            '<p>Content</p>'.
            '</div>'.
            '</div>'.
            '</div>'.
            '<a class="carousel-control-prev" href="#test" role="button" data-slide="prev">'.
            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'.
            '<span class="sr-only">Previous</span>'.
            '</a>'.
            '<a class="carousel-control-next" href="#test" role="button" data-slide="next">'.
            '<span class="carousel-control-next-icon" aria-hidden="true"></span>'.
            '<span class="sr-only">Next</span>'.
            '</a>'.
            "</div>"
        );

        $this->assertEquals(
            new Carousel([
                'items' => [
                    [
                        'src' => 'img-link.ext',
                    ],
                    [
                        'active' => true,
                        'src' => 'img-link.ext',
                    ],
                ],
                'indicators' => true,
            ]),
            "<div id='carousel-id-1' data-ride='carousel' class='carousel slide'>".
            '<ol class="carousel-indicators">'.
            '<li data-target="#carousel-id-1" data-slide-to="0"></li>'.
            '<li data-target="#carousel-id-1" data-slide-to="1" class="active"></li>'.
            '</ol>'.
            '<div class="carousel-inner" role="listbox">'.
            '<div class="carousel-item">'.
            '<img class="d-block img-fluid" src="img-link.ext">'.
            '</div>'.
            '<div class="carousel-item active">'.
            '<img class="d-block img-fluid" src="img-link.ext">'.
            '</div>'.
            '</div>'.
            '<a class="carousel-control-prev" href="#carousel-id-1" role="button" data-slide="prev">'.
            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'.
            '<span class="sr-only">Previous</span>'.
            '</a>'.
            '<a class="carousel-control-next" href="#carousel-id-1" role="button" data-slide="next">'.
            '<span class="carousel-control-next-icon" aria-hidden="true"></span>'.
            '<span class="sr-only">Next</span>'.
            '</a>'.
            "</div>"
        );
    }
}
