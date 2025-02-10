<?php require 'views/layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-primary">🐶 Lista zwierząt</h1>
</div>

<?php require 'views/animal/search.php'; ?>

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-warning">
            <tr>
                <th>Imię</th>
                <th>Gatunek</th>
                <th>Status adopcyjny</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
            <tr>
                <td class="fw-bold"><?= htmlspecialchars($animal['name']) ?></td>
                <td><?= htmlspecialchars($animal['species']) ?></td>
                <td>
                    <?php 
                        $statusClass = match ($animal['adoption_status']) {
                            'Available' => 'badge bg-success', // Zielony dla dostępnych
                            'Adopted' => 'badge bg-secondary', // Szary dla adoptowanych
                            'Reserved' => 'badge bg-warning text-dark', // Żółty dla zarezerwowanych
                            default => 'badge bg-light text-dark'
                        };
                    ?>
                    <span class="<?= $statusClass ?>"><?= htmlspecialchars($animal['adoption_status']) ?></span>
                </td>
                <td>
                    <a href="/animal?action=show&id=<?= $animal['id'] ?>" class="btn btn-sm btn-info">
                        🔍 Szczegóły
                    </a>
                    <a href="/animal?action=edit&id=<?= $animal['id'] ?>" class="btn btn-sm btn-warning">
                        ✏️ Edytuj
                    </a>
                    <a href="/animal?action=delete&id=<?= $animal['id'] ?>" 
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Czy na pewno chcesz usunąć to zwierzę?')">
                        🗑️ Usuń
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require 'views/layout/footer.php'; ?>
