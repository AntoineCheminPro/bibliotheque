<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="btn btn-danger" href="#">Supprimer</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $book->getTitle() . ", un livre de : " . $book->getAuthor() ?></h5>
    <p class="card-text"><?php echo $book->getCategory() . ", paru le : " . $book->getPublication_date() ?></p>
    <p class="card-text border"><?php echo $book->getSummary() ?></p>
<?php 
if ($book->getUser_id() !==0){
  ?>
  <p class="card-text">non disponible</p>
  <span>Prêté à : </span><a type="submit" name="singleUser" class="card-text" href="user.php?<?php echo "id=".$user->getId();?>"><?php echo $user->getFirstname() . " " . $user->getLastname()?></a>
  <form action="" method="post">
    <input type="submit" class="btn btn-success text-white mx-2 my-0" name="bookStatusSwitch" value="Restituer"></input>
  </form>
  <?php 
}
else{
  ?>
<form action="" method="post">
  <div class="form-group form-column col-md-5">
    <label for="user_id">Emprunteur</label>
    <input type="text" name="user_id" id="user_id"></input>
    <button class="btn btn-success text-white mx-2 my-0" type="submit">Valider</button>

  </div>
</form>  <?php 
}
?>
  </div>
</div>