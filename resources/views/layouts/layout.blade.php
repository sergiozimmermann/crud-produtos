<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Alternar as cores das linhas da tabela */
        .table tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
            /* cor de fundo clara */
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
            /* cor de fundo escura */
        }

        /* Estilizando o efeito de hover */
        .table tbody tr:hover {
            background-color: #d6d8db;
            /* cor de fundo no hover */
            cursor: pointer;
            /* mudando o cursor para pointer */
        }
    </style>
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>