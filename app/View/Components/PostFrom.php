<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostFrom extends Component
{

    public $post;
    public $name = '';
    public $detail = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post->name = $post->name;
        $this->post->detail = $post->detail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-from');
    }
}
