<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WTD</title>
</head>
<body class="bg-gray-100">

    <div class="text-left p-8">
        <h1 class="text-3xl font-black italic">DarijaTranslate</h1>
        <h1 class="text-lg text-gray-500">There is only Darija here</h1>
    </div>
    <div class="pt-4">
            {{ $slot }}
    </div>
    
    
</body>
</html>