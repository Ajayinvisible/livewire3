<div>
    <div class="container flex flex-col justify-center items-center m-12">
        <div>
            <h1 class="text-3xl text-center font-bold mb-4">Contact Us</h1>
            <p class="mb-6 text-center">We would love to hear from you! Please fill out the form below to get in touch.
            </p>
        </div>
        <div class="w-1/3 bg-white p-6 rounded shadow-md border border-slate-700">
            @if (session()->has('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @elseif (session()->has('error'))
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
            <form wire:submit.prevent='submitForm'>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2 text-blue-600">Email</label>
                    <input wire:model="form.email" type="email" id="email" class="w-full p-2 border rounded"
                        placeholder="Enter your email">
                    @error('form.email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium mb-2 text-blue-600">Subject</label>
                    <input wire:model="form.subject" type="text" id="subject" class="w-full p-2 border rounded"
                        placeholder="Enter the subject">
                    @error('form.subject')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium mb-2 text-blue-600">Message</label>
                    <textarea wire:model="form.message" id="message" class="w-full p-2 border rounded" rows="4"
                        placeholder="Enter your message"></textarea>
                    @error('form.message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-start items-center">
                    <button wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed"
                        type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">Submit</button>
                    <div wire:loading class="ml-2">
                        <div role="status">
                            <svg aria-hidden="true"
                                class="inline w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
