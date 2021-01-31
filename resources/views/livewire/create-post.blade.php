<div>
    <label for="body" class="block text-sm font-medium text-gray-700 mb-3">Body Post</label>
    <textarea wire:model="body" id="body" placeholder="Post something cool..." class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:ring-2"></textarea>
    <div class="flex justify-end">
        <button wire:click="createPost" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-500 mt-2">Submit</button>
    </div>
</div>
