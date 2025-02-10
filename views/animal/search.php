<form id="searchForm" action="/animal" method="GET" class="row g-3">
    <input type="hidden" name="action" value="search">
    <div class="col-auto">
        <input type="text" id="searchInput" name="name" class="form-control" placeholder="Szukaj po imieniu">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-secondary">Szukaj</button>
    </div>
</form>