<div>
  <form wire:submit="signUp" class="border border-gray-700 mt-10 py-6 px-2 rounded shadow-md relative">
    <label class="font-medium text-gray-900">Name</label>
    @error('name')
      <span class="text-red-600 block text-xs font-semibold">{{ $message }}</span>
    @enderror
    <div class="mt-2 mb-4">
      <input type="text" class="w-full rounded p-1 border border-gray-900 focus-visible:border-transparent" wire:model="name">
    </div>

    <label class="font-medium text-gray-900">Password</label>
    @error('password')
      <span class="text-red-600 block text-xs font-semibold">{{ $message }}</span>
    @enderror
    <div class="mt-2 mb-4">
      <input type="password" class="w-full rounded p-1 border border-gray-900 focus-visible:border-transparent" wire:model="password">
    </div>

    <label class="font-medium text-gray-900">Confirm Password</label>
    <div class="mt-2 mb-4">
      <input type="password" class="w-full rounded p-1 border border-gray-900 focus-visible:border-transparent" wire:model="confirmPassword">
    </div>

    <div class="mt-2 mb-4 flex gap-4 items-center">
      <label class="font-medium text-gray-900">Remember Me</label>
      <input type="checkbox" wire:model="remember">
    </div>

    <button class="py-1 px-2 bg-blue-600 border-2 border-blue-600 rounded text-white hover:bg-transparent hover:text-black transition-all transition-300">
      Sign Up
    </button>

    <div wire:loading class="w-full bg-gray-700/90 absolute top-0 left-0 h-full"> 
      <div class="grid place-content-center h-full">
        <div class="flex gap-6">
          <div class="w-2 h-2 animate-pulse bg-white rounded-full"></div>
          <div class="w-2 h-2 animate-pulse bg-white rounded-full"></div>
          <div class="w-2 h-2 animate-pulse bg-white rounded-full"></div>
        </div>
      </div>
    </div>
  </form>
</div>