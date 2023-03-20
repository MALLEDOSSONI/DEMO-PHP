<?php
//$notes =[10,15,16];
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
}
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

