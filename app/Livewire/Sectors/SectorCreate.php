<?php

namespace App\Livewire\Sectors;

use App\Models\Sector;
use Livewire\Component;

class SectorCreate extends Component
{
    public $sector , $name;

    public function render()
    {
        return view('livewire.sectors.sector-create');
    }

    
    public function addSector()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم لا يجب أن يزيد عن 255 حرفًا.',
        ]);


        Sector::create([
            'name' => $this->name,
            
        ]);

        return to_route('sectors.index')->with('success', 'تم إنشاء قطاع جديد بنجاح');
    }
}
