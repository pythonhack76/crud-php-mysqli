<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aggiungi Studente</title>
  </head>
  <body>
   <div class="container mt-5">

  <?php include('message.php');  ?>


       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                   <h4>
                           <a href="index.php" class="btn btn-primary float-end mt-2">FrontEnd</a>
                       </h4>
                       <h4>Aggiungi Studente
                           <a href="index.php" class="btn btn-danger float-end">Indietro</a>
                       </h4>
                   </div>
                   <div class="card-body">
                       <form action="code.php" method="POST">

                           <div class="mb-3">
                               <label>Nome Studente</label>
                           <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                               <label>Email Studente</label>
                           <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                               <label>Telefono Studente</label>
                           <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="mb-3">
                               <label>Corso Studente</label>
                           <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">

                                <button type="submit" name="save_student" class="btn btn-primary">Aggiungi Studente</button>
                        </div>
                           
</div>
                   
                   </div>
               </div>
           </div>
       </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>