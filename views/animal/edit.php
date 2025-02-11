<?php require 'views/layout/header.php'; ?>

<h1>Edytuj zwierzę</h1>

<form action="/?action=edit&id=<?= $animal['id'] ?>" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Imię</label>
        <input type="text" class="form-control" id="name" name="name" 
               value="<?= htmlspecialchars($animal['name']) ?>" required>
    </div>
    
    <div class="mb-3">
        <label for="species" class="form-label">Gatunek</label>
        <input type="text" class="form-control" id="species" name="species" 
               value="<?= htmlspecialchars($animal['species']) ?>" required>
    </div>
    
    <div class="mb-3">
        <label for="adoption_status" class="form-label">Status adopcyjny</label>
        <select class="form-control" id="adoption_status" name="adoption_status" required>
            <option value="Available" <?= $animal['adoption_status'] === 'Available' ? 'selected' : '' ?>>Dostępny</option>
            <option value="Adopted" <?= $animal['adoption_status'] === 'Adopted' ? 'selected' : '' ?>>Zaadoptowany</option>
            <option value="Reserved" <?= $animal['adoption_status'] === 'Reserved' ? 'selected' : '' ?>>Zarezerwowany</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Opis</label>
        <textarea class="form-control" id="description" name="description" rows="3"><?= htmlspecialchars($animal['description']) ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    <a href="/" class="btn btn-secondary">Anuluj</a>
</form>

<?php require 'views/layout/footer.php'; ?>
