<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyTasks | @yield('title')</title>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body>
  <header class="h-14 flex items-center">
    <nav class="w-11/12 mx-auto flex justify-between">
      <a href="/">Logo</a>

      <ul class="flex gap-3">
        <li>
          <a href="{{ route('signUp') }}" class="border-2 border-blue-600 rounded font-medium py-1 px-2 hover:bg-blue-600 hover:text-white transition-all transition-300">
            Sign Up
          </a>
      </li>
        <li>
          <a href="" class="border-2 border-blue-600 rounded font-medium py-1 px-2 bg-blue-600 text-white hover:text-black hover:bg-transparent transition-all transition-300">
            Sign In
          </a>
        </li>
      </ul>
    </nav>
  </header>
  @yield('content')
  @livewireScripts
</body>
</html>