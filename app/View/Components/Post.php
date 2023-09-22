<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{   
    public $key;
    public $post;
    public $pageNo;

    /**
     * Create a new component instance.
     */
    public function __construct($key,$post,$pageNo)
    {
        $this->key = $key;
        $this->post= $post;
        $this->pageNo = $pageNo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
