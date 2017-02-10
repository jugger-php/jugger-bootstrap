<?php

namespace jugger\bootstrap;

class InfoButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'info';
        parent::__construct($content, $params);
    }
}
