<x-layout>

<form action="/ideas" method="POST" class="mt-6">
    @csrf
    <div class="max-w-xl">
    <label for="idea" class="block text-sm font-medium text-gray-100">
        New Idea
    </label>

    <textarea
        id="idea"
        name="idea"
        rows="3"
        class="mt-2 block w-full rounded-md border border-gray-600 bg-gray-800 px-3 py-1.5 text-gray-100 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
    ></textarea>

    <p class="mt-2 text-sm text-gray-400">
        Have any idea you want to save later?
    </p>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-500">Save</button>
    </div>
    
    <div class="mt-6 text-white">
        <h2 class="font-bold">Your Ideas</h2>
        <ul class="mt-6">
            @foreach($ideas as $idea)
                <li class="text-sm">{{ $idea }}</li>
            @endforeach
        </ul>
    </div>
</form>


</x-layout>