<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM studenti WHERE id='$student_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Studente eliminato con successso";
        header("Location: index.php");
        exit(0);

    } 
    else
     {

        $_SESSION['message'] = "Studente NON ELIMINATO";
        header("Location: index.php");
        exit(0);

    }

}

//aggiornamento con update degli articoli
if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    echo $name; 

    $query = "UPDATE studenti SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Studente aggiornato con successo!";
        header("Location: index.php");
        exit(0); 
    }
    else
    {

        $_SESSION['message'] = "Studente non aggiornato correttamente";
        header("Location: index.php");
        exit(0); 
    }

}


//inserimento degli articoli
if(isset($_POST['save_student']))
{

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO studenti (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Studente creato con successo";
        header("Location: student-create.php");
        exit(0); 
    }
    else
     {
        $_SESSION['message'] = "Errore: non ho creato un nuovo studente!";
        header("Location: student-create.php");
        exit(0); 

    }
   



}


?>