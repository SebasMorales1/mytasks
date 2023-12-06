<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BtnLogout extends Component
{
  public function logout() {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();

    $this->redirect('/');
  }

  public function render()
  {
      return view('livewire.btn-logout');
  }
}
