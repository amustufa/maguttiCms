<?php

namespace App\View\Components\Website\Partials;

use Illuminate\View\Component;

class PageContent extends Component
{

    public $article;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($article)
    {
        //
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.website.partials.page-content');
    }
}
