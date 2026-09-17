@props([
'title' => 'welcome'
])
<!DOCTYPE html>
<html lang="en" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    <script>
        const savedTheme = localStorage.getItem('theme'); 

        if (savedTheme) 
            { 
                document.documentElement.setAttribute('data-theme', savedTheme); 
            }
    </script>
</head>

<body>
    <x-nav />
    <main class="mt-6">
        {{ $slot }}
    </main>

    <!-- Theme controller -->
    <script>
        // Listen for changes on all theme controllers
        document.querySelectorAll('.theme-controller').forEach((controller) => {

            controller.addEventListener('change', function () {

                const theme = this.checked ? 'coffee' : 'dracula';

                // Change the theme
                document.documentElement.setAttribute('data-theme', theme);

                // Save the theme
                localStorage.setItem('theme', theme);

                // Keep all theme toggles synchronized
                document.querySelectorAll('.theme-controller').forEach((toggle) => {
                    toggle.checked = this.checked;
                });

            });

        });


        // Get the current theme
        const currentTheme =
            document.documentElement.getAttribute('data-theme');


        // Set the toggle state based on the current theme
        document.querySelectorAll('.theme-controller').forEach((toggle) => {

            toggle.checked = currentTheme === 'coffee';

        });
    </script>

</body>
</html>