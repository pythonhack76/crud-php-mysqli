<?php

if(isset($_SESSION['message'])) :
?>



<div class="alert alert-warning alert-dismissible fade show" role="alert">
<h4 class="alert-heading"><?php $_SESSION['message']; ?></h4>
<p>Un nuovo studente è stato aggiunto con successo. Complimenti!</p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
unset($_SESSION['message']);
endif;

?>