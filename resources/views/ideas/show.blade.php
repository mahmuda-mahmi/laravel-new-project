<x-layout>
    <div class="card bg-neutral p-6 mx-auto mt-10 w-1/2">
        <div class="text-gray-500 dark:text-gray-200">
            <h2 class="font-bold">Update Your Ideas?</h2>
            <div class="mt-6">
                {{ $idea -> description }}
            </div>
        </div>
        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-soft btn-primary">Edit</a>
            <button 
                type="submit"
                form="delete-idea-form" 
                class="btn btn-soft btn-error"
            >Delete</button>
        </div>
    </div>


    <form id="delete-idea-form" action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('DELETE')
    </form>
    

</x-layout>