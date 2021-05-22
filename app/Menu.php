<?php

namespace App;

class Menu extends MenuComponent {

    private array $menu_components;

    function __construct(private string $title) {
        $this->menu_components = [];
    }

    public function add(MenuComponent $menu_component) {
        $this->menu_components[] = $menu_component;
    }

    public function render() : string {
        $result = PHP_EOL . $this->title . PHP_EOL;
        foreach ($this->menu_components as $menu_component) {
            $result .= $menu_component->render();
        }
        return $result . PHP_EOL;
    }
}
