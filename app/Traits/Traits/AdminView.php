<?php

namespace App\Traits\Traits;

trait AdminView
{
    protected $path_view;

    public function setPath(string $path) {
        $this->path_view = $path;
    }

    public function view(string $path, array $param = []) {
        return view($this->path_view.".{$path}", $param);
    }
}
