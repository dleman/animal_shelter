<?php require 'views/layout/header.php'; ?>

<h1>Dodaj nowe zwierzę</h1>

<form action="/?action=create" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Imię</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    
    <div class="mb-3">
        <label for="species" class="form-label">Gatunek</label>
        <input type="text" class="form-control" id="species" name="species" required>
    </div>
    
    <div class="mb-3">
        <label for="adoption_status" class="form-label">Status adopcyjny</label>
        <select class="form-control" id="adoption_status" name="adoption_status" required>
            <option value="Available">Dostępny</option>
            <option value="Adopted">Zaadoptowany</option>
            <option value="Reserved">Zarezerwowany</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Opis</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Dodaj</button>
    <a href="/" class="btn btn-secondary">Anuluj</a>
</form>

<?php require 'views/layout/footer.php'; ?>
