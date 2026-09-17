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
    <div class="mx-auto mt-6 w-full max-w-xl ">
        <p class="font-bold text-7xl">No Ideas Yet?!</p>
        <a href="/ideas/create" class="mt-4 btn btn-soft btn-primary">Create a new one</a>
    </div>
        
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