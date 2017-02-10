<?php

namespace jugger\bootstrap;

class WarningButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'warning';
        parent::__construct($content, $params);
    }
}
