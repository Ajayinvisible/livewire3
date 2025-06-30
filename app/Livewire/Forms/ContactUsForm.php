<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactUsForm extends Form
{
    #[Rule('required|email|max:255')]
    public $email;

    #[Rule('required|min:10|max:255')]
    public $subject;

    #[Rule('required|min:10|max:500')]
    public $message;

    public function sendEmail()
    {
        sleep(2); // Simulate email sending delay
    }
    
}
