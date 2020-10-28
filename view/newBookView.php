<form action="" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titre">
        </div>
            <div class="form-group col-md-5">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Auteur">
        </div>
        <div class="form-group col-md-2">
            <label for="publication_date">Publié le</label>
            <input type="text" class="form-control" name="publication_date" id="publication_date" placeholder="date">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="category">Catégorie</label>
            <select id="category" name="category" class="form-control">
                <option value="" selected>Choose...</option>
                <option value="#">...</option>
            </select>
        </div>
        <div class="form-group col-md-6">
                <label for="category">Ajouter une catégorie</label>
                <input type="text" class="form-control" name="category" id="category" placeholder="Nouvelle catégorie">
        </div>
    </div>

        <div class="form-group col-12">
            <label for="summary">Résumé</label>
            <textarea class="form-control" name="summary" id="summary" rows="5"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>