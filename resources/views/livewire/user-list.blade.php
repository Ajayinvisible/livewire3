<div wire:poll class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">User List</h2>
        <div class="flex gap-2">
            <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search users..."  class="border rounded px-3 py-2">
            <button wire:click='update' class="bg-slate-800 text-white py-2 px-5 rounded">Click</button>
        </div>
    </div>

    <table class="min-w-full bg-white border border-gray-200 mb-5">
        <thead>
            <tr>
                <th class="px-6 py-3 border w-[8px]">ID</th>
                <th class="px-6 py-3 border">Name</th>
                <th class="px-6 py-3 border">Email</th>
                <th class="px-6 py-3 border w-[16px]">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->users as $key => $user)
                <tr>
                    <td class="px-6 py-4 border">{{ ++$key }}</td>
                    <td class="px-6 py-4 border">{{ $user->name }}</td>
                    <td class="px-6 py-4 border">{{ $user->email }}</td>
                    <td class="px-6 py-4 border">
                        <button wire:click="editUser({{ $user->id }})" class="text-blue-500 hover:underline"><i class="fa-regular fa-edit"></i></button>
                        <button wire:click="deleteUser({{ $user->id }})" class="text-red-500 hover:underline ml-2"><i class=" fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $this->users->links() }}
</div>
