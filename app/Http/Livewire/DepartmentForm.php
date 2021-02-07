<?php

namespace App\Http\Livewire;

use App\Department;
use Livewire\Component;

class DepartmentForm extends Component
{
    public $name = 'Accounting';
    public $success = FALSE;

    public function submit()
    {
        Department::create(['name' => $this->name]);
        $this->success = TRUE;
    }

    public function mount($departmentId = null)
    {
        if($departmentId){
            $this->name = Department::findorfail($departmentId)->name;
        }
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
