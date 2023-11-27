

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Literie 3000</title>
  
</head>

<body class="font-sans bg-gray-100 mx-">

    <header class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="/matelas">
                <img class="h-[100px]" src="/image/logo.png" alt="">
            </a>
        </div>
    </header>

    <main class="container mx-auto my-8 pt-10">
        
        @yield('content')
    </main>

    
    
    
</body>
<footer class="bg-blue-500 p-4 text-white mt-8">
   <div class="container mx-auto">
    <p>&copy; 2023 Literie 3000. Tous droits réservés.</p>

</footer>

</html>
