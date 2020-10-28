<div class="table-responsive ">
  <table class="table table table-striped">
  <thead>
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
