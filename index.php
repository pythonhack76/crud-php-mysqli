<?php
    session_start(); 
    //connessione al database
    require 'dbcon.php';
    require 'functions.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>CRUD Manager </title>
  </head>
  <body>
    <h1>Logo</h1>
    <div class="container mt-4">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4>Dettaglio Studente
                    <a href="student-create.php" class="btn btn-primary float-end">Aggiungi Studente</a>
                </h4>
            </div>
            <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
    <tr>

    <th>Id </th>
    <th>Nome Studente</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Corso</th>
    <th>Azione</th>
    </tr>
            </thead>
            <tbody>
                <?php

            $query = "SELECT * FROM studenti";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)

            {
                foreach($query_run as $studente)
                {
                    //echo $studente['name'];
                    ?>
            <tr>
                <td><?= $studente['id']; ?></td>
                <td><?= $studente['name']; ?></td>
                <td><?= $studente['email']; ?></td>
                <td><?= $studente['phone']; ?></td>
                <td><?= $studente['course']; ?></td>
                <td>
                    <a href="view.php?id=<?= $studente['id']; ?>" class="btn btn-info btn-sm">Vedi</a>
                    <a href="edit.php?id=<?= $studente['id']; ?>" class="btn btn-success btn-sm">Edita</a>
                    <a href="delete.php?id=<?= $studente['id']; ?>" class="btn btn-danger btn-sm">Cancella</a>
                </td>
            </tr>
                    <?php
                }

            } 
            else 
            {
                echo "<h5>Nessun record trovato!</h5>";
            }

?>
                <tr>

                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
            </div>
            
        </div>
    </div>

</div>
        </div>
    </div>

<?php include('footer.php'); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>