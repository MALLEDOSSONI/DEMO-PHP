<?php
$notes = [10,20,30,60];
$sum = array_sum($notes);
$count = count($notes);
array_push($notes,8,8,9);
print_r($notes);
/*
$mot = readline("Veuillez entrer un mot :");
$reverse = strtolower(strrev($mot));
if(strtolower($mot)===$reverse){
    echo "Ce mot  est pas un palyndrome";

}else{
    echo "Ce mot n est pas un palyndroime";
}
/*$creneaux = [];
while(true){
    $debug = (int)readline("Heure d\'ouverture :");
    $fin = (int)readline("Heure de fermeture :");
    if($debug>=$fin){
        echo "Le creneaux ne peut pa etre enregistre car l heur d'ouverture est superieur";
    }else{
        $creneaux[] = [$debug,$fin];
        $action = readline("Voulez vous enregistrer un nouveau creneau (o/n):");
        if($action === 'n'){
            break;
        }
    }
}
$heure = (int)readline("A au elle heure voulez vous visiter le magasin");
$creneauTrouve = false;
foreach($creneaux as $creneau){
    if($heure>=$creneau[0] && $heure <= $creneau[1]){
        $creneauTrouve = true;
        break;
    }
}
if($creneauTrouve){
    echo'le magasin ser ouvert';
}else{
    echo'desole, le magasin sera ferme';
}
print_r($creneaux);
/*$notes = [];


while(true){
    $action = readline('Entrer une nouvelle note (ou\'fin\' pour terminer la saisie) :');
    if($action=='fini'){
        break;
    }else{
        $notes[] = (int)$action;
    }
    }
    foreach($notes as $note){
        echo "-$note \n";
    }
//$notes =[10,15,16];
/*
$eleves = [
    'CM2'=>['Jean','Marc','Jean','Marion'],
    'CM1'=>['Emilie','Marcelin']
];
foreach($eleves as $classe => $listEleves){
     echo "la classe $classe:\n";
     foreach($listEleves as $eleve){
        echo "- $eleve\n";
     }
     echo"\n";
}*/
//for($i = 0;$i<10;$i+=2){
//    echo "- $i\'n";
//}

/*
if((9<$heure && $heure <=12) || (14<=$heure && $heure<=17)){
    echo "le magasin sera ouvert";

}else{
    echo"le magasin sera ferme";
}
*/
/*
VRAI && VRAI = VRAI
VRAI && FAUX = faux
FAUX && FAUX = FAUX


VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX
*/
/*switch($action){
    case 1:
        echo "j'attaque";
        break;
    case 2 :
        echo "je defends";
        break;
} */ 

//////////////////////////////////////////////////////////////////////////////////////
/*generateur de numero sur la facture*/

<?php
$date = date('YmdHis');
$date =(float)$date; /*force le type*/
echo $date;
echo '
';

//tu peux concaténer le timestamp
//echo time();
echo '<hr> Avec la concanètation
';
echo $date2=$date.'_'.time();
echo '<hr>';
//mais tu auras un string

//verifier si la facture existe
$link=mysql_connect('localhost','root','') or  die('? serveur');
$db=mysql_select_db('mabase') or  die('? base');
$sql="select * factures where id='$date'";
$query=mysql_query($sql) or  die('? query');
if(mysql_num_rows($query)>0){
$nb_fact = $date;
} else {
echo 'pas de facture presente';
/* ... */
}   
mysql_close($link);      
?>
