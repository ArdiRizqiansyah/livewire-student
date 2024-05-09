<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StudentCreate extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $nim = '';

    #[Validate('required')]
    public $study_program = '';

    public function save()
    {
        $this->validate();

        Student::create(
            // $this->only(['name', 'nim', 'study_program'])
            $this->all()
        );

        flash()->success('Student created successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.student-create');
    }
}
