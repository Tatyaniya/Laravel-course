<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
  <main>
    <div class="container mx-auto py-10">
      @yield('content')
    </div>
  </main>
</body>
</html>