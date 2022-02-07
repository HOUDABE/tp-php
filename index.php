<?php include "./fonction.php" ?>  
<?php include "./utilisateur.php" ?>  


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
          <nav>

                    <a href="./index.php">Accueil</a>
                    <a href="./header.php">header</a>
                    <a href="./footer.php">Footer</a>
          </nav>


        
                <div class="header">
                            <div class="entreprise">
                                    <h2>MON ENTREPRISE</h2>
                                    <h3><?php adresse("3","rubriquie"); ?></h3>
                                    <h3><?php ville("Paris","75012"); ?></h3>
                                    
                                 </div>
                            <div class="facture">
                                    <h2><?php numFacture() ?></h2>
                                    <h3><?php dateJour() ?></h3>
                            </div>
                            <div class="client">
                                     <h2> ENTREPRISE CLiente </h2>
                                    <h3><?php adresse("5","rubriquie"); ?></h3>
                                    <h3><?php ville("Paris","75012"); ?></h3>
                            </div>
                               <button>Imprimer cette page </button>
                </div>
                <hr>
           
         
                <section class="table">

                        <table id="tables">
                                <tr>
                                            <th><?php echo $entete[0] ?></th>
                                            <th><?php echo $entete[1] ?></th>
                                            <th><?php echo $entete[2] ?></th>
                                            <th><?php echo $entete[3] ?></th>
                                            <th><?php echo $entete[4] ?></th>
                                            <th><?php echo $entete[5] ?></th>
                                </tr>  
                                <tr>
                                       <td><?php echo $produit[0]["Référence"] ?></td>
                                       <td><?php echo $produit[0]["Désignation"] ?></td>
                                       <td><?php echo $produit[0]["Prix unitaire(hors taxe)"] ?></td>
                                       <td><?php echo $produit[0]["Quantité"] ?></td>
                                       <td><?php echo $produit[0]["Prix total"] ?></td>
                                       <td><?php echo $produit[0]["Total TTC"] ?></td>
                                </tr>  
                                <tr>
                                       <td><?php echo $produit[1]["Référence"] ?></td>
                                       <td><?php echo $produit[1]["Désignation"] ?></td>
                                       <td><?php echo $produit[1]["Prix unitaire(hors taxe)"] ?></td>
                                       <td><?php echo $produit[1]["Quantité"] ?></td>
                                       <td><?php echo $produit[1]["Prix total"] ?></td>
                                       <td><?php echo $produit[1]["Total TTC"] ?></td>
                                </tr>  
                                <tr>
                                       <td><?php echo $produit[2]["Référence"] ?></td>
                                       <td><?php echo $produit[2]["Désignation"] ?></td>
                                       <td><?php echo $produit[2]["Prix unitaire(hors taxe)"] ?></td>
                                       <td><?php echo $produit[2]["Quantité"] ?></td>
                                       <td><?php echo $produit[2]["Prix total"] ?></td>
                                       <td><?php echo $produit[2]["Total TTC"] ?></td>
                                </tr>  
                                <tr>
                                       <td><?php echo $produit[3]["Référence"] ?></td>
                                       <td><?php echo $produit[3]["Désignation"] ?></td>
                                       <td><?php echo $produit[3]["Prix unitaire(hors taxe)"] ?></td>
                                       <td><?php echo $produit[3]["Quantité"] ?></td>
                                       <td><?php echo $produit[3]["Prix total"] ?></td>
                                       <td><?php echo $produit[3]["Total TTC"] ?></td>
                                </tr>   
                        </table>

                        <table class="table1">
                             <tr>
                                 <th>total</th>
                                 <th>TVA 20%</th>
                                 <th>Total</th>
                             </tr>
                             <br>
                             <tr>
                                       <td>326$</td>
                                       <td>65.2$</td>
                                       <td>391.2$</td>
                             </tr>

                        </table>


                        <br><br>
                        <hr>
                        <table>
                                          <tr>
                                                       <th><?php echo $entete1[0] ?></th>
                                                       <th><?php echo $entete1[1] ?></th>
                                                       <th><?php echo $entete1[2] ?></th>
                                                       <th><?php echo $entete1[3] ?></th>         
                     <                     </tr>
                                           <tr>
                                           <tr>
                                                        <td><?php echo $utilisateur[0]["nom"] ?></td>
                                                        <td><?php echo $utilisateur[0]["prenom"] ?></td>
                                                        <td><?php echo $utilisateur[0]["email"] ?></td>
                                                        <td><?php echo $utilisateur[0]["age"] ?></td>
                                           </tr>
                                           <tr>
                                                        <td><?php echo $utilisateur[1]["nom"] ?></td>
                                                        <td><?php echo $utilisateur[1]["prenom"] ?></td>
                                                        <td><?php echo $utilisateur[1]["email"] ?></td>
                                                        <td><?php echo $utilisateur[1]["age"] ?></td>
                                           </tr>
                                           <tr>
                                                        <td><?php echo $utilisateur[2]["nom"] ?></td>
                                                        <td><?php echo $utilisateur[2]["prenom"] ?></td>
                                                        <td><?php echo $utilisateur[2]["email"] ?></td>
                                                        <td><?php echo $utilisateur[2]["age"] ?></td2
                                           </tr>
                        </table>


               </section>
                    
         <footer>
             <a href="">Telephone :
         <?php
               footer("0773939593", "benradi.houda@gmail.com" ,"3 Avenue de la Rébrique " ,"PARIS");
             ?>
            </a>
         </footer>                      
              
         
</body>
</html>