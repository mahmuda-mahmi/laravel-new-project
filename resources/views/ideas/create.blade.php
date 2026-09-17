<x-layout>
    <div class="mx-auto mt-6 w-1/2 px-6">
        <form action="/ideas" method="POST" class="mt-6">
            @csrf
            <div>
            <label for="description" class="block text-sm font-medium text-gray-500 dark:text-gray-200">
                Create A New Idea 
            </label>

            <textarea
                id="description"
                name="description"
                rows="3"
                class="textarea mt-4 w-3/4 @error('description') textarea-error @enderror"
            ></textarea>

            <x-form.error name="description" />

            <p class="mt-6 text-sm text-gray-400">
                Have any idea you want to save later?
            </p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="btn btn-soft btn-primary">Save</button>
            </div>
            </div>
            
        
        </form>
    </div>
</x-layout>