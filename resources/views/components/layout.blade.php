@props([
'title' => 'welcome'
])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script>
        const savedTheme = localStorage.getItem('theme') || 'coffee';

        document.documentElement.setAttribute('data-theme', savedTheme);
    </script>
</head>

<body>
    <x-nav />
    <main class="mt-6">
        {{ $slot }}
    </main>

    <!-- Theme controller -->
    <script>
        const themeControllers = document.querySelectorAll('.theme-controller');

        themeControllers.forEach((controller) => {
            controller.addEventListener('change', function () {

                const theme = this.checked ? 'dracula' : 'coffee';

                document.documentElement.setAttribute('data-theme', theme);

                localStorage.setItem('theme', theme);

                themeControllers.forEach((toggle) => {
                    toggle.checked = this.checked;
                });
            });
        });


        const currentTheme =
            document.documentElement.getAttribute('data-theme') || 'coffee';

        themeControllers.forEach((toggle) => {
            toggle.checked = currentTheme === 'dracula';
        });
    </script>

</body>
</html>