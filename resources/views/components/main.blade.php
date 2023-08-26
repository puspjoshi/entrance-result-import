<!doctype html>
<head>

    <title>University Result system</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="w-full">

    <aside class="fixed top-0 left-0 w-64 h-screen p-4">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/admin/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li><a href="/admin/marks" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Marks</span>

                    </a>

                </li>
                <li>
                    <a href="/admin/marks/create" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">Add Marks</a>
                </li>
                <li>
                <a href="/admin/marks/import" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">Import Marks</a>
                </li>

                <li>
                    <a href="/admin/settings" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">Settings</a>
                </li>

            </ul>
        </div>
    </aside>
    <div class="sm:ml-64 flex flex-col h-screen">
        <div class="h-10 bg-blue-600 w-full">
            <ul class="text-white flex float-right align-baseline space-x-3 pr-1.5">
                <li class="align-middle">
                    <a href="">Profile</a>
                </li>
                <li class="align-middle">
                    <a href="/logout">Logout</a>
                </li>
            </ul>
        </div>
        <div class="bg-gray-300 flex-grow">{{ $slot }}</div>
        <div class="h-10 bg-blue-500 text-center">
            <span class="text-center">&copy; copyright 2023</span>
        </div>
    </div>
</div>

@if(session()->has('success'))
    <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"><p>{{ session('success') }}</p></div>
@endif

</body>
