<?php

namespace Furbook\Http\Views\Composers;

use Illuminate\View\View;
use Furbook\Breed;

class CatFormComposer
{
    /**
     * The user repository implementation.
     *
     * @var breeds
     */
    protected $breeds;

    /**
     * Create a new profile composer.
     *
     * @param  breeds  $breeds
     * @return void
     */
    public function __construct(Breed $breeds)
    {
        // Dependencies automatically resolved by service container...
        $this->breeds = $breeds;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //dd($this->breeds->pluck('name', 'id'));
        $view->with('breeds', $this->breeds->pluck('name','id'));
    }
}