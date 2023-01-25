<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseCreate extends Component
{
    public $name;
    public $desctiption;
    public $price; 

    public $selectedDays = [];

    public $days = [
        'Monday',
        'Tuesday',
        'Wednsday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ];

    protected $rules = [
        'name' => 'required|unique:courses,name',
        'description' => 'required',
        'price' => 'required',

    ];

    public function formSubmit(){
        $this->validate();

        $course = Course::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' =>auth()->user()->id
        ]);

        foreach($this->selectedDays as $day){

        }
    }

    public function render()
    {
        return view('livewire.course-create');
    }
}
