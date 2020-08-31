<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2x1"> What next you need TO-DO </h1>
        <x-alert/>
        <form method="post" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded" />
            <input type="submit" value="Create" class="p-2 border rounded" />
        </form>
    </div>
</body>
</html>