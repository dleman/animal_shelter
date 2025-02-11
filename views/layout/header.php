<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schronisko dla zwierząt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #ffcc80 !important; /* Ciepły kolor */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #6d4c41 !important; /* Brązowy akcent */
        }
        .btn-custom {
            background-color: #ffa726;
            border: none;
            color: white;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #fb8c00;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/animal">🐾 Schronisko</a>
            <div class="d-flex gap-2">
                <a href="/" class="btn btn-custom">📋 Lista zwierząt</a>
                <a href="/?action=create" class="btn btn-custom">➕ Dodaj zwierzę</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
