<x-layout>
    <form action="/login" method="POST">
        @csrf
        <fieldset class="mx-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6">
            <legend class="fieldset-legend">Login</legend>

            <label class="label" for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required />
            <x-form.error name="email" />

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required />
            <x-form.error name="password" />

            <button class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
    <h5 class="text-center mt-4">New here? <a href="/register" class="link link-primary">Create an account</a></h5>
    
</x-layout>