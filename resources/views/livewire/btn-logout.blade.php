<div class="relative w-11/12">
	<button class="flex items-center gap-1" id="btn-profile">
   {{ auth()->user()->name }}
  <img src="{{ asset('./bx-chevron-down.svg') }}" />
</button>
	
	<ul id="profile" class="bg-gray-200 rounded px-1 py-3 absolute w-full top-8 flex flex-col gap-3 hidden">
		<li wire:click="logout" class="cursor-pointer">Logout</li>
	</ul>

	<script>
		const btnProfile = document.querySelector('#btn-profile')
		const profile = document.querySelector('#profile')

		btnProfile.addEventListener('click', () => profile.classList.toggle('hidden'))

		document.addEventListener('click', (e) => {
			if (!(e.target === btnProfile || e.target === btnProfile.children[0]))
				profile.classList.add('hidden')
		})
	</script>
</div>