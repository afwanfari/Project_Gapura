<div>
    <!-- resources/views/livewire/contact-form.blade.php -->
    <div>
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mb-6">
                <label for="name" class="pb-1 text-xs uppercase tracking-wide font-bold">Your Name</label>
                <input type="text" id="name" wire:model="name"
                    class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="pb-1 text-xs uppercase tracking-wider font-bold">Your Email</label>
                <input type="email" id="email" wire:model="email"
                    class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="message" class="pb-1 text-xs uppercase tracking-wider font-bold">Your Message</label>
                <textarea id="message" wire:model="message" rows="5"
                    class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0"></textarea>
                @error('message')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="w-full bg-sky-600 text-white px-6 py-3 font-xl rounded-md">Send
                    Message</button>
            </div>
        </form>
    </div>

</div>
