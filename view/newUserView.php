<form action="" method="post">
    
    <div class="form-row">
        <div class="form-check offset-1 col-2">
            <input class="form-check-input" type="radio" name="sex" id="sex" value="h">
            <label class="form-check-label" for="sex1">
                Monsieur
            </label>
        </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sex" value="f">
            <label class="form-check-label" for="sex2">
                Madame
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="firstname">Nom</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Nom">
        </div>
            <div class="form-group col-md-5">
            <label for="lastname">Prenom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Prenom">
        </div>
        <div class="form-group col-md-2">
            <label for="birth_date">Date de naissance</label>
            <input type="text" class="form-control" name="birth_date" id="birth_date" placeholder="date">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="adress">Adresse</label>
            <input type="text" class="form-control" name="adress" id="adress" placeholder="Adresse">
        </div>
        <div class="form-group col-md-2">
            <label for="city_code">Code postal</label>
            <input type="text" class="form-control" name="city_code" id="city_code" placeholder="code postal">
        </div>
            <div class="form-group col-md-5">
            <label for="city">Ville</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Ville">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Telephone</label>
            <input type="tel" class="form-control" id="inputphone" name="phone" placeholder="0612345678" patern="[0-9]{10}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>