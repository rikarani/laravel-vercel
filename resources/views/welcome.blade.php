<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-gray-950 dark:text-gray-300">
  <div class="h-dvh grid place-items-center">
    <div>
      <img src="{{ asset('img/profile.jpg') }}" alt="Placeholder" class="size-36 mx-auto block rounded-full">
      <h1 class="mt-3 text-6xl font-semibold">Hello World</h1>
      <div class="mt-3" x-data="{ count: 0 }">
        <p class="text-center text-3xl font-medium">Count is <span x-text="count"></span></p>
        <div class="mt-3 flex justify-center gap-3">
          <button x-on:click="count = 0" type="button" class="rounded-lg border-2 border-gray-700 px-6 py-2 text-lg font-medium hover:bg-gray-700">Reset</button>
          <button x-on:click="count = count + 1" type="button" class="rounded-lg border-2 border-gray-700 bg-gray-700 px-6 py-2 text-lg font-medium">Increment</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
