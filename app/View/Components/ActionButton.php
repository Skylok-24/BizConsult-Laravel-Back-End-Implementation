<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color;
    public string $text;

    public function __construct(public string $href , public string $type)
    {
        if($type == 'create') {
            $this->color = 'primary';
            $this->text = __('keywords.add_new');
        }elseif($type == 'edit') {
            $this->color = 'success';
            $this->text = "<i class='fe fe-edit-2'></i>";
        }elseif($type == 'show'){
            $this->color = 'warning';
            $this->text = "<i class='fe fe-eye'></i>";
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
