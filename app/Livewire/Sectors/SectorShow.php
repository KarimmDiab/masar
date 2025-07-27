<?php

namespace App\Livewire\Sectors;

use App\Models\Sector;
use Livewire\Component;

class SectorShow extends Component
{
    public $sector, $name;

    public function mount($id)
    {
        $this->sector = Sector::findOrFail($id);
        $this->name = $this->sector->name;
       
    }
    public function render()
    {
        return view('livewire.sectors.sector-show');
    }
}
