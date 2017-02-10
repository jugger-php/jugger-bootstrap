<?php

namespace jugger\bootstrap;

class SecondaryButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'secondary';
        parent::__construct($content, $params);
    }
}
