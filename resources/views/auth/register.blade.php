<x-layout>
    <form action="/register" method="POST">
        @csrf
        <fieldset class="mx-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6">
            <legend class="fieldset-legend">Register</legend>

            <label class="label" for="name">Name</label>
            <input type="name" class="input" name="name" placeholder="Your Name" required />

            <label class="label" for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required />

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
    <h5 class="text-center mt-4">Already have an account? <a href="/login" class="link link-primary">Login here</a></h5>
    
</x-layout>