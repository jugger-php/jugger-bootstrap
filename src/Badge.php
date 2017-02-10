<?php

namespace jugger\bootstrap;

use jugger\ds\Ds;
use jugger\html\ContentTag;

class Badge extends ContentTag
{
    public function __construct(array $params)
    {
        $this->class = 'badge';
        $params = Ds::arr($params);
        $content = $params['content'] ?? '';

        if ($params['type']) {
            $this->class .= " badge-{$params['type']}";
        }
        if ($params['pill']) {
            $this->class .= " badge-pill";
        }

        $params->remove('type', 'pill', 'content');
        parent::__construct('span', $content, $params->toArray());
    }
}
