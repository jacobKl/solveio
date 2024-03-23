<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/output.css', 'resources/js/app.ts'])
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased">
        <header class="text-gray-600 body-font shadow mb-5">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="40px" height="40px" viewBox="0 0 412.287 412.287"
                    xml:space="preserve">
                    <g>
                        <path d="M380.546,110.125L211.552,1.586c-3.293-2.115-7.515-2.115-10.807,0L31.744,110.081c-2.866,1.84-4.6,5.014-4.598,8.42
                            l0.041,180.039c0.002,3.476,1.806,6.699,4.767,8.519l168.961,103.75c1.605,0.986,3.419,1.479,5.233,1.479
                            c1.814,0,3.629-0.491,5.232-1.479L380.352,307.1c2.96-1.818,4.766-5.043,4.767-8.519l0.023-180.039
                            C385.143,115.137,383.409,111.965,380.546,110.125z M206.147,25.627l61.936,39.629l-61.936,39.627l-61.934-39.627L206.147,25.627z
                            M50.197,291.254v-63.938l60.692,36.848l0.01,64.377L50.197,291.254z M110.899,237.623l-60.703-37.285v-64.74l60.703,38.842
                            V237.623z M63.22,116.834l59.186-37.869l59.186,37.869l-59.186,37.869L63.22,116.834z M133.908,174.44l60.705-38.844v64.742
                            l-60.705,37.285V174.44z M133.938,277.927l40.348,25.815l-40.348,24.783V277.927L133.938,277.927z M194.642,379.952l-50.232-30.854
                            l50.232-30.847V379.952z M206.138,297.04l-62.076-38.765l62.076-38.592l62.076,38.733L206.138,297.04z M217.653,379.952v-61.645
                            l50.194,30.812L217.653,379.952z M278.358,328.571l-40.388-24.805l40.388-25.842V328.571z M278.388,237.67l-60.703-37.287v-64.736
                            l60.703,38.842V237.67z M230.708,116.879l59.186-37.867l59.186,37.867l-59.186,37.869L230.708,116.879z M362.104,291.3
                            l-60.705,37.286v-63.17l60.705-37.983V291.3z M362.104,200.383l-60.705,37.287v-63.182l60.705-38.844V200.383z"/>
                    </g>
                </svg>
                    <span class="ml-3 text-xl">Solveio</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="/dashboard">Dashboard</a>
                </nav>
                <a href="/solve" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Solve
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
        </header>

        @yield('content')
    </body>
</html>
