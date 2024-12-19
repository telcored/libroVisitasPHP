<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda personalizada</title>
    <style>
        mark {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a mi página</h1>
    <p>Esta es una página de ejemplo para demostrar cómo implementar una búsqueda personalizada.</p>

    <input type="text" id="searchInput" placeholder="Buscar...">
    <button id="searchButton">Buscar</button>
    <p id="result"></p>

    <script>
        document.getElementById('searchButton').addEventListener('click', function () {
            const searchInput = document.getElementById('searchInput').value;
            const bodyContent = document.body.innerHTML;
            const regex = new RegExp(searchInput, 'gi');
            const highlighted = bodyContent.replace(regex, `<mark>${searchInput}</mark>`);
            document.body.innerHTML = highlighted;
        });
    </script>
</body>
</html>
