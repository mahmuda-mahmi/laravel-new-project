<x-layout>
    <div class="mx-auto mt-10 w-full max-w-xl px-6">
        <form action="/ideas/{{ $idea->id }}" method="POST" class="mt-6">
            @csrf
            @method('PATCH')
            <div>
            <label for="description" class="block text-sm font-medium text-gray-500 dark:text-gray-200">
                Edit Your Idea
            </label>

            <textarea
                id="description"
                name="description"
                rows="3"
                class="mt-2 w-full textarea"
            >{{ $idea -> description }}</textarea>
            <x-form.error name="description" />
            </div>
            <div class="mt-6 flex items-center justify-start gap-x-6">
                <button 
                    type="submit" 
                    class="btn btn-soft btn-primary"
                >Update</button>
                <button 
                    type="submit"
                    form="delete-idea-form" 
                    class="btn btn-soft btn-error"
                >Delete</button>
            </div>
        </form>

        <form id="delete-idea-form" action="/ideas/{{ $idea->id }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>