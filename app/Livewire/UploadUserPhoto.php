<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadUserPhoto extends Component
{
    use WithFileUploads;

    public $model;

    #[Validate('nullable|image|max:11000')]
    public $photo;

    public function render()
    {
        return view('livewire.upload-user-photo');
    }
}
