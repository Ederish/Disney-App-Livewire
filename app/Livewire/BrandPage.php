<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class BrandPage extends Component
{
    public $brand;
    public $brandArray;

    public function mount(Request $request)
    {
        $this->brand = $request->route('brand');
        $this->brandArray = $this->getBrandArray($this->brand);
    }

    public function getBrandArray($brand)
    {
        switch ($brand) {
            case 'disney':
                return ["/img/disney-bg.jpg", "/img/disney.png", "7067611", "5905", "338"];
            case 'pixar':
                return ["/img/pixar-bg.jpg", "/img/pixar.jpg", "7067603", "7067605", "7067606"];
            case 'marvel':
                return ["/img/marvel-bg.jpg", "/img/marvel.png", "1271", "3204", "7067552"];
            case 'starwars':
                return ["/img/star-wars-bg.jpg", "/img/star-wars.png", "7067607", "8136", "7067607"];
            case 'national':
                return ["/img/national-geographic-bg.jpg", "/img/national-geographic.png", "7067613", "7067613", "7067613"];
            default:
                abort(404);
        }
    }

    public function render()
    {
        return view('livewire.brand-page', ['brandArray' => $this->brandArray]);
    }
}
