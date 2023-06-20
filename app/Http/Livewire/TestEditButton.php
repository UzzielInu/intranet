<?php

namespace App\Http\Livewire;

use App\Models\AdministrativeUnit;
use Livewire\Component;

class TestEditButton extends Component
{
    public function send()
    {
        return redirect()->to('administrativeUnit/create');
    }
}
