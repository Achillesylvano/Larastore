 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SmartStore</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

 </head>

 <body class="bg-white">

     <!-- Header Navbar -->
     @include('layouts.navigation')

     <!-- Tab Menu -->
     @yield('menu')
     <div class="flex flex-col min-h-screen">

         @yield('content')

         <!-- Footer -->
         @include('layouts.footer')

     </div>
 </body>

 </html>
