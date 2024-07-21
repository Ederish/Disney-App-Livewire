<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DetailPage extends Component
{
    public function render()
    {
        return view('livewire.detail-page');
    }
}