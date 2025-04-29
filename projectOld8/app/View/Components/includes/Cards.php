<?php

namespace App\View\Components\includes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
    public $title;
    public $subTitle;
    public $description;

    public function __construct($title, $subTitle, $description)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description = $description;
    }
    public function render(): View|Closure|string
    {
        return view('components.includes.cards');
    }

    // component methods user defined
    public function addNumber($a)
    {
        return $a +40;
    }
}
