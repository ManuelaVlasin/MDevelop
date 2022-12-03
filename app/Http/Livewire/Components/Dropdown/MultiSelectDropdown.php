<?php

namespace App\Http\Livewire\Components\Dropdown;

use Livewire\Component;

class MultiSelectDropdown extends Component
{
    public $placeholder = '';
    public $options = [];
    public $callbackFunction = '';
    public $selectedOptions = [];

    public function render()
    {
        return view('livewire.components.dropdown.multi-select-dropdown');
    }

    public function mount($placeholder = 'Search', $options = null, $searchFunctionCallback = null)
    {
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->callbackFunction = $searchFunctionCallback;
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
        $this->emit($this->callbackFunction, $this->selectedOptions);
    }
}
