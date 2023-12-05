<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FormSignIn extends Component
{
  #[Validate('required')]
   public $name = '';

  #[Validate('required')]
  public $password = '';
  public $remember = false;

  public function signIn() 
  {
    $this->validate();

    if (Auth::attempt(['name' =>$this->name, 'password' => $this->password], $this->remember)) 
    {
      session()->regenerate();

      $this->redirect('/');
    }else 
    {
      session()->flash('response', 'Name Or Password Invalidates.');

      $this->redirectRoute('signIn');
    }
  }

  public function render()
  {
    return view('livewire.form-sign-in');
  }
}
