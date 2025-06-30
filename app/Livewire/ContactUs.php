<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Component;

class ContactUs extends Component
{
    public ContactUsForm $form;

    // Method to handle form submission
    public function submitForm()
    {
        $this->form->validate();

        // sending email
        $this->form->sendEmail();

        session()->flash('success', 'Your message has been sent successfully to admin!');

        $this->form->reset();
    }


    public function render()
    {
        return view('livewire.contact-us');
    }
}
