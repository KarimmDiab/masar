<?php

namespace App\Livewire\Sectors;

use Livewire\Component;
use App\Models\Sector;  

class SectorEdit extends Component
{
    public $sector, $name;

    public function mount($id)
    {
        $this->sector = Sector::findOrFail($id);
        $this->name = $this->sector->name;

    }

    public function render()
    {
        return view('livewire.sectors.sector-edit');
    }

    public function editSector()
    {
        $this->validate([
            'name' => 'required|string|max:255',
           
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم لا يمكن أن يتجاوز 255 حرفًا.',
        ]);

        // تحديث القيم:
        $this->sector->name = $this->name;

        $this->sector->save();


        return to_route('sectors.index')->with('success', 'تم تعديل اسم القطاع بنجاح');
    }
}
