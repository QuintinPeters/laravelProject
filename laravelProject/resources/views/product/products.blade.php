<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webshop | products</title>
    @vite('resources/css/app.css')

</head>

<body class="antialiased box-border overflow-x-hidden">
    <x-header />
    <div class="grid grid-cols-[8%_1fr_8%] min-h-screen">
        <div class="col-start-2 flex justify-around mt-3 flex-wrap flex-row">
            <x-product-field :products="$products" />
            
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
