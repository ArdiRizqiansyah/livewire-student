<?php

namespace App\Livewire;

use App\Models\Student as ModelsStudent;
use Livewire\Component;

class Student extends Component
{
    public function delete($id)
    {
        ModelsStudent::find($id)->delete();

        flash()->success('Student deleted successfully.');
    }

    public function render()
    {
        $data = [
            'students' => ModelsStudent::paginate(10)
        ];

        return view('livewire.student', $data);
    }
}
