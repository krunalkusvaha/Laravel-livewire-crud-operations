<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Actions\EmailContactLeadAction;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';
    public int $preferred = 0;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:4',
        'phone' => 'nullable|min:4|required_if:preferred,1',
        'message' => 'nullable',
        'preferred' => 'required|min:0|max:1'
    ];

    public function submit()
    {
        $validated = $this->validate();

        (new EmailContactLeadAction)($validated);
    }

    protected $messages = [
        'phone.required_if' => 'We need a number to call when the preferred way of contact is by phone.',
    ];
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
