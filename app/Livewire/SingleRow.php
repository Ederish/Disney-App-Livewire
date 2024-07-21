<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SingleRow extends Component
{
    public $datos = [];
    public $list;

    public function mount($list)
    {
        $this->obtenerDatos($list);
    }

    public function obtenerDatos($list)
    {
        $response = Http::get("https://api.themoviedb.org/3/list/{$list}?api_key=a6304e3aeae5ada05e23b5e4bbbb9eff&language=es-MX");

        if ($response->successful()) {
            $this->datos = $response->json();
        }
    }
    public function render()
    {
        return view('livewire.single-row');
    }
}