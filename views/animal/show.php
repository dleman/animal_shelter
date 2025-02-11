<?php require 'views/layout/header.php'; ?>

<h1>Szczegóły zwierzęcia</h1>

<p><strong>Imię:</strong> <?= htmlspecialchars($animal['name']) ?></p>
<p><strong>Gatunek:</strong> <?= htmlspecialchars($animal['species']) ?></p>
<p><strong>Status adopcyjny:</strong> <?= htmlspecialchars($animal['adoption_status']) ?></p>
<p><strong>Opis:</strong> <?= htmlspecialchars($animal['description']) ?></p>

<a href="/" class="btn btn-secondary">Powrót</a>

<?php require 'views/layout/footer.php'; ?>
