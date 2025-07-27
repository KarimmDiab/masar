<?php

namespace App\Livewire\Sectors;


use Livewire\Component;
use App\Models\Sector;

class SectorIndex extends Component
{
    public function render()
    {
        $sectors = Sector::get();
        return view('livewire.sectors.sector-index', compact('sectors'));
    }

    public function delete($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();

        session()->flash('success', 'تم حذف القطاع بنجاح');
    }
}
