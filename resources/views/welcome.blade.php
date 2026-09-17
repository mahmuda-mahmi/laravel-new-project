<x-layout>

    <section class="mx-auto flex w-full max-w-7xl items-center px-6 py-16 sm:px-8 lg:px-12">

        <div class="grid w-full items-center">

            <!-- Hero Text -->
            <div class="w-full max-w-2xl">

                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                    Hello, Welcome to IdeaHub
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-gray-600 dark:text-gray-400">
                    A hub to store and create any ideas you have in mind. You can create, edit, and delete your ideas as you wish. Start by creating a new idea or viewing your existing ideas.
                </p>

                <!-- Buttons -->
                <div class="mt-7 flex flex-wrap gap-4">

                    <a
                        href="ideas"
                        class="inline-flex items-center gap-3 rounded-lg border px-5 py-3 text-sm font-semibold transition"
                    >
                        View Your Ideas
                        <span class="text-lg">→</span>
                    </a>

                    <a
                        href="ideas/create"
                        class="inline-flex items-center gap-3 rounded-lg border px-5 py-3 text-sm font-semibold
                        transition"
                    >
                        Create New Idea
                        <span class="text-lg">→</span>
                    </a>

                </div>

            </div>
        </div>

    </section>

</x-layout>