<?php

namespace App\Http\Livewire\Costumer;

use Livewire\Component;

class CostumerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.costumer.costumer-dashboard-component')->layout('layouts.base');
    }
}
