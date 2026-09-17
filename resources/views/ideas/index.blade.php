<x-layout>
    @if($ideas -> count())
        <div class="mx-auto mt-6 w-full px-6 ">
            <div class="mx-auto w-full max-w-xl">
                <h2 class="font-bold">Your Ideas</h2>
                <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                    @foreach($ideas as $idea)
                        <x-idea-card href="/ideas/{{ $idea->id }}">
                            {{ $idea -> description }}
                        </x-idea-card>
                    @endforeach
                </ul>
            </div>
            <div class="mt-6 mx-auto w-full max-w-xl">
                <h2>Want to create a new idea?</h2>
                <a href="/ideas/create" class="btn btn-soft btn-primary mt-3">Create Now </a>
            </div>
        </div>
    
    @else
        <p class="mx-auto mt-6 w-full max-w-xl ">No Ideas Yet?! <a href="/ideas/create" class="underline">Create a new one</a></p>
    @endif

</x-layout>

<!-- <div class="alert">
        <span>
            No Ideas Yet?!
        </span>

        <a href="/ideas/create" class="link">
            Create a new one
        </a>
    </div> -->
    <!-- <a  class="link link-hover text-base"></a>   -->
<!-- <div class="card-actions justify-end">
            <button class="btn btn-primary">Accept</button>
            <button class="btn btn-ghost">Deny</button>
        </div> -->