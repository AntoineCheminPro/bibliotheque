<div class="table-responsive ">
  <div class="row">
    7<form action="" method="post" class="col-6">
      <select class="custom-select col-4" id="select" name="CategorySelect">
        <option>aucun</option>
        <?php 
        foreach($booksCategories as $key => $booksCategorie){
          ?>
          <option value="<?php echo $booksCategorie?>"><?php echo $booksCategorie?></option>
          <?php
        }
        ?>
      </select>
      <button type="submit" class="btn btn-primary">Tri par genre</button>
    </form>
    <?php
    if (isset($_POST["dispo"]) && ($_POST["dispo"]=="tag")){
      ?>  
      <form action="" method="post" class="col-4">
        <button type="submit" href="index.php" class="btn btn-primary">retour</button>
      </form>
      <?php
    }
    else{?>
      <form action="" method="post" class="col-4">
        <button type="submit" name="dispo" value="tag" class="btn btn-primary">disponible</button>
      </form>
      <?php
    }
    ?>
  </div>
  <table class="table table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Category</th>
      <th scope="col">Parution</th>
      <th scope="col">usager</th>
      <th scope="col">fiche</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      foreach ($books as $key => $book){
          ?>
        <tr>
        <th scope="row"><?php echo $book->getId(); ?></th>
        <td><?php echo $book->getTitle(); ?></th>
        <td><?php echo $book->getAuthor(); ?></td>
        <td><?php echo $book->getCategory(); ?></td>
        <td><?php echo $book->getPublication_date(); ?></td>
        <td><?php echo ($book->getUser_id() !==0)?$book-> getUser_id():""; ?></td>
        <form method="post" id="singleBook" name="singleBook">
          <td><a type="submit" name="singleBook" href="book.php?<?php echo "id=".$book->getId();?>">Voir</a></td>
        </form>
      </tr>
      <?php } ?>
    
    
  </tbody>
</table>
</div>
