<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class TabPanel extends Component
{
    public $movieData = [];
    public $credits = [];
    public $recommendations=[];
    public $id;

    public function mount($id)
    {
        $this->obtenerDatos($id);
    }

    public function obtenerDatos($id)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key=a6304e3aeae5ada05e23b5e4bbbb9eff&language=es-MX&page=1");
        $getCredits = Http::get("https://api.themoviedb.org/3/movie/{$id}/credits?api_key=a6304e3aeae5ada05e23b5e4bbbb9eff");
        $getrecommendations = Http::get("https://api.themoviedb.org/3/movie/{$id}/recommendations?api_key=a6304e3aeae5ada05e23b5e4bbbb9eff&language=es-MX&page=1");

        if ($response->successful() && $getCredits->successful()) {
            $this->movieData = $response->json();
            $this->credits = $getCredits->json();
            $this->recommendations = $getrecommendations->json();
        } else {
            $this->movieData = [];
            $this->credits = [];
            $this->recommendations =[];
        }
    }

    public function render()
    {
        return view('livewire.tab-panel');
    }
}
