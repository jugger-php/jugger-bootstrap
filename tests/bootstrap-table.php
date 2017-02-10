<?php

use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function getHeaders()
    {
        return [
            'head1',
            'head2',
            'head3',
        ];
    }

    public function getItems()
    {
        return [
            [
                'cell11',
                'cell12',
                'cell13',
            ],
            [
                'cell21',
                'cell22',
                'cell23',
            ],
            [
                'cell31',
                'cell32',
                'cell33',
            ],
        ];
    }

    public function testBase()
    {
        $this->assertEquals(
            new Table([
                'head' => [
                    'items' => $this->getHeaders(),
                ],
                'body' => [
                    'items' => $this->getItems(),
                ],
            ]),
            "<table class='table'>".
            "<thead>".
            "<tr><th>head1</th><th>head2</th><th>head3</th></tr>".
            "</thead>".
            "<tbody>".
            "<tr><td>cell11</td><td>cell12</td><td>cell13</td></tr>".
            "<tr><td>cell21</td><td>cell22</td><td>cell23</td></tr>".
            "<tr><td>cell31</td><td>cell32</td><td>cell33</td></tr>".
            "</tbody>".
            "</table>"
        );

        $this->assertEquals(
            new Table([
                'inverse' => true,
                'head' => [
                    'inverse' => true,
                    'items' => $this->getHeaders(),
                ],
            ]),
            "<table class='table table-inverse'>".
            "<thead class='thead-inverse'>".
            "<tr><th>head1</th><th>head2</th><th>head3</th></tr>".
            "</thead>".
            "</table>"
        );

        $this->assertEquals(
            new Table([
                'class' => 'table table-bordered table-striped table-hover',
                'caption' => 'Заголовок',
            ]),
            "<table class='table table-bordered table-striped table-hover'><caption>Заголовок</caption></table>"
        );
    }
}
