<x-layout>
    <div class="mx-auto mt-6 w-full px-6">
        <form action="/ideas" method="POST" class="mt-6">
            @csrf
            <fieldset class="mx-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6">
                <legend class="fieldset-legend">New Idea</legend>

                <label class="label" for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    class="textarea mt-4 @error('description') textarea-error @enderror"
                ></textarea>

                <x-form.error name="description" />

                <button class="btn btn-neutral mt-4">Create</button>
            </fieldset>
        </form>
    </div>
</x-layout>