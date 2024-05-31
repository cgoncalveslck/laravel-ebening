<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </meta>
    <title>
        Wall nuts
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-t h-screen from-gray-700 to-gray-800 container mx-auto">
    <main class="pt-5">
        <div class="shadow-lg shadow-xl shadow-slate-950/50 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th style="width:15%" scope="col" class="px-6 py-3">
                            Sound name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preview
                        </th>
                        <th style="width:5%" scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $files)
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $files['name'] }}
                            </th>
                            <td class="px-6 py-4">
                                <audio preload="metadata" controls class="w-full">
                                    <source src={{ $files['url'] }} type="audio/mpeg" />
                                </audio>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <div class="absolute bottom-5 container mx-auto shadow-md bg-transparent text-white">
        <div class="bg-gray-800 rounded-xl p-2">
            <div id="form-wrapper">
                <form id="form" enctype="multipart/form-data" class="flex items-center gap-4" action="/upload"
                    method="post">
                    @csrf
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only"
                        for="file-upload">
                        Upload File
                    </label>
                    <input required name="file" type="file" id="file-upload"
                        class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-slate-700 hover:file:bg-slate-300" />
                    <button type="submit"
                        class="py-2 px-5 ml-4 text-sm font-medium text-gray-900 focus:outline-none rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
