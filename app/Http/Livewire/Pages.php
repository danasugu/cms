<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $slug;
    public $title;
    public $content;
    public function render()
    {
        return view('livewire.pages');
    }
}
