<div>
    @foreach ($posts as $post)
        <div class="bg-white rounded-lg p-4 shadow-lg mt-5 text-gray-700">
            <div class="flex flex-col">
                <span class="text-gray-500 text-sm">{{ $post->user->name }}</span> <span class="text-gray-400 text-xs">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div class="mt-4 text-base">
                @if($updateStateId !== $post->id)
                {!! $post->body !!}
                @endif

                @if ($updateStateId === $post->id)
                    <textarea wire:model="body" id="body" class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:ring-2"></textarea>
                    <button wire:click="update({{ $post->id }})" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-500 mt-2">Save</button>
                @endif
            </div>
            <div class="flex justify-end">
                <button wire:click="showUpdateForm({{ $post->id }})" class="bg-green-600 text-gray-100 rounded font-bold px-2 py-1 hover:bg-green-400">Edit</button>

                <button onclick="return confirm('Are you sure about that?') || event.stopImmediatePropagation()" wire:click="delete({{ $post->id }})" class="bg-red-600 text-gray-100 rounded font-bold px-2 py-1 ml-2 hover:bg-red-400">Delete</button>
            </div>
        </div>
    @endforeach
</div>
