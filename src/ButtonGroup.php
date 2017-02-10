<?php

namespace jugger\bootstrap;

use jugger\ds\Ds;
use jugger\html\ContentTag;
use jugger\bootstrap\ItemsTrait;

class ButtonGroup extends ContentTag
{
    use ItemsTrait;

    public function __construct(array $params = [])
    {
        $this->class = 'btn-group';
        $this->role = 'group';
        $params = Ds::arr($params);

        if ($params['vertical']) {
            $this->class = "btn-group-vertical";
        }
        if (in_array($params['size'], ['sm', 'lg'])) {
            $this->class .= " btn-group-{$params['size']}";
        }
        if ($params['items']) {
            $this->addItems($params['items']);
        }

        $params->remove('vertical', 'size', 'items');
        parent::__construct('div', '', $params->toArray());
    }
}
