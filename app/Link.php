<?php

namespace App;

class Link extends MenuComponent {

    function __construct(private string $title, private string $link) {}

    public function render() : string {
        return "<a href='{$this->link}'>{$this->title}</a>";
    }
}
