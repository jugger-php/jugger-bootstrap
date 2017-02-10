<?php

namespace jugger\bootstrap;

class DangerButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'danger';
        parent::__construct($content, $params);
    }
}
