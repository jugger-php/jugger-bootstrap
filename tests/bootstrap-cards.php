<?php

use PHPUnit\Framework\TestCase;

class CardsTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(
            Card::widget([
                'inverse' => true,
                'title' => 'Title',
                'header' => 'Заголовок',
                'footer' => 'Подвальчик',
                'img' => 'src-to-img.ext',
                'subtitle' => 'Sub Title',
                'content' => 'Content block',
                'links' => [
                    new Link('Test1'),
                    new LinkButton('Test2', '#', [
                        'type' => 'primary',
                    ]),
                ],
            ]),
            "<div class='card card-inverse'>".
            "<div class='card-header'>Заголовок</div>".
            "<img class='card-img' src='src-to-img.ext'>".
            "<div class='card-block'>".
            "<h4 class='card-title'>Title</h4>".
            "<h6 class='card-subtitle mb-2 text-muted'>Sub Title</h6>".
            "<p class='card-text'>Content block</p>".
            "<a href='#' class='card-link'>Test1</a>".
            "<a href='#' class='btn btn-primary'>Test2</a>".
            "</div>".
            "<div class='card-footer'>Подвальчик</div>".
            "</div>"
        );

        $this->assertEquals(
            Card::widget([
                'id' => 'test',
                'class' => 'card card-inverse card-primary',
                'img' => new Img('src-to-img.ext', [
                    'class' => 'card-img-top',
                ]),
                'title' => 'Title',
                'subtitle' => new EmptyTag('Sub Title'),
                'content' => new Div('Content block'),
            ]),
            "<div id='test' class='card card-inverse card-primary'>".
            "<img class='card-img-top' src='src-to-img.ext'>".
            "<div class='card-block'>".
            "<h4 class='card-title'>Title</h4>".
            "<h6 class='card-subtitle mb-2 text-muted'>Sub Title</h6>".
            "<p class='card-text'><div>Content block</div></p>".
            "</div>".
            "</div>"
        );
    }
}
