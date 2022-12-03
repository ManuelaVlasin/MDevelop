<?php

namespace App\Http\Livewire\Components\Cards;

use Livewire\Component;

class FilterCard extends Component
{
    public string $header;
    public $options;
    public bool $open = true;
    public string $callbackFunction;
    public $selectedOptions;

    public function render()
    {
        return view('livewire.components.cards.filter-card');
    }

    public function mount($header = 'Filter', $options = [], $callbackFunction = ''){
        $this->header = $header;
        $this->options = $options;
        $this->callbackFunction = $callbackFunction;
        $this->selectedOptions = [];
    }

    public function toggleTab(){
        $this->open = !$this->open;
    }

    public function selectOption($value)
    {
        if(isset($this->selectedOptions[$value]))
        {
            unset($this->selectedOptions[$value]);
        }
        else
        {
            $this->selectedOptions[$value] = $this->options[$value];
        }
        if($this->callbackFunction !== '')
        {
            $this->emit($this->callbackFunction, $this->selectedOptions);
        }
    }
}
