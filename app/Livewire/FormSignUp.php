<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormSignUp extends Component
{
  #[Validate('required|min:4|max:30|unique:users')]
  public $name = '';

  #[Validate('required|min:6|max:28|same:confirmPassword')]
  public $password = '';

  public $confirmPassword = '';
  public $remember = false;

  public function signUp() 
  {
    $this->validate();

    $user = new User;
    $user->name = $this->name;
    $user->password = Hash::make($this->password);
    $user->save();

    Auth::login($user, $this->remember);
    $this->redirect('/');
  }

  public function render()
  {
    return view('livewire.form-sign-up');
  }
}
