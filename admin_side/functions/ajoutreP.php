<?php
function ajouterP($id_P){
     if(require("../connexion/connexion.php")){
    $A=$conn->prepare("SELECT * FROM produit WHERE idproduit IN (".implode(',', $id_P).")");
                                      $A->execute();
                                      $data=$A->fetchAll(PDO::FETCH_OBJ);
                                      return $data;
                                     

       

                                
     }
  }
  ?>