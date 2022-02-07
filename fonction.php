<?php
function footer(string $tel, string $email ,string $adresse ,string $ville){
    echo " " .$tel. "- Email :" .$email." - ".$adresse.".".$ville;
}
?>

<?php
function adresse(int $num ,string $avenue){
    echo " ".$num." avenue de la ".$avenue." .";
}
?>


<?php
function ville(string $ville ,int $codeVille){
    echo " ".$codeVille." ".$ville." .";
}
?>

<?php
function numFacture(){
    $numerofacture = mt_rand(1000,8000);
    echo("facture n°".$numerofacture."");
}
?>

<?php
function dateJour(){
    $jour = date("d-m-Y");
    echo("Date :".$jour."");
}
?>

<?php
 //******************tableau des produit************************
$entete= array("Référence","Désignation","Prix unitaire(hors taxe)" ,"Quantité","Prix total", "Total TTC");
$produit = array(
    array(
        "Référence" => "114" ,
        "Désignation" => "boisson" ,
        "Prix unitaire(hors taxe)" => mt_rand(1,10), 
        "Quantité" => "15" ,
        "Prix total" =>$produit[0]['Prix unitaire(hors taxe)']*$produit[0]['Quantité'] ,
        "Total TTC" => $produit[0]['Prix total'] * 0.2  
    ),

    array(
        "Référence" => "285" ,
        "Désignation" => "eau" ,
        "Prix unitaire(hors taxe)" => mt_rand(1,10), 
        "Quantité" => "6" ,
        "Prix total" => $produit[1]["Prix unitaire(hors taxe)"] * $produit[1]["Quantité"] ,
        "Total TTC" => $produit[1]["Prix total"] * 0.2  
    ),

    array(
        "Référence" => "190" ,
        "Désignation" => "gateau" ,
        "Prix unitaire(hors taxe)" => mt_rand(1,10), 
        "Quantité" => "20" ,
        "Prix total" => $produit[2]["Prix unitaire(hors taxe)"] * $produit[2]["Quantité"] ,
        "Total TTC" => $produit[2]["Prix total"] * 0.2  ,
    ),

    array(
        "Référence" => "274" ,
        "Désignation" => "viande" ,
        "Prix unitaire(hors taxe)" => mt_rand(1,10), 
        "Quantité" => "15" ,
        "Prix total" => $produit[3]["Prix unitaire(hors taxe)"] * $produit[3]["Quantité"] ,
        "Total TTC" => $produit[3]["Prix total"] * 0.2  
    ),
);





?>
