<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StudentEdit extends Component
{
    public $studentId;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $nim = '';

    #[Validate('required')]
    public $study_program = '';

    public function mount($id)
    {
        $student = Student::findOrFail($id);

        $this->studentId = $student->id;
        $this->name = $student->name;
        $this->nim = $student->nim;
        $this->study_program = $student->study_program;
    }

    public function update()
    {
        $this->validate();

        $student = Student::findOrFail($this->studentId);

        $student->update(
            $this->only(['name', 'nim', 'study_program'])
        );
        
        flash()->success('Student updated successfully.');
    }

    public function render()
    {
        return view('livewire.student-edit');
    }
}
