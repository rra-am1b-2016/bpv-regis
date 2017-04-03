<?php
   
?>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">BPV bedrijven</div>
  <div class="panel-body">
    <p>Hieronder is een overzicht van alle potentiele BPV bedrijven die zijn verzameld door: <?php echo $_SESSION["id"] . "@student.mboutrecht.nl"; ?></p>
  </div>

  <!-- Table -->
  <table class="table table-hover">
      <thead>
         <tr>
            <th>Bedrijf</th>
            <th>Straat</th>
            <th>Plaats</th>
            <th>Contactpersoon</th>
            <th>Mobile</th>
            <th>Status</th>
         </tr>
      </thead>
      <tbody id="data">
         
      <tbody>
   </table>
   <div class="alert alert-danger" role="alert" id="error_nothing_found">
     Geen records gevonden
   </div>

</div>


