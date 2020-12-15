<?PHP
include 'produit.php';
class PanierC {
function afficherPanier ($id_client){
        $sql="SELECT * From images i,panier p,produit p1 where id_client=$id_client and p1.produit_id=123 and images.produit_id=123";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    /*function calculerSalaire($employe){
        echo $employe->getNbHeures() * $employe->getTarifHoraire();
    }*/
    function ajouterProduit($panier){
        $sql="insert into panier (id_client,id_produit,qte) values (:id_client, :id_produit,:qte)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $id_client=$panier->getId_client();
        $id_produit=$panier->getId_produit();
        $qte=$panier->getQte();
        $req->bindValue(':id_client',$id_client);
        $req->bindValue(':id_produit',$id_produit);
        $req->bindValue(':qte',$qte);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    /*
    function supprimerEmploye($cin){
        $sql="DELETE FROM employe where cin= :cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierEmploye($employe,$cin){
        $sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
        $datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
        $req->bindValue(':cinn',$cinn);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nbH',$nb);
        $req->bindValue(':tarifH',$tarif);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererEmploye($cin){
        $sql="SELECT * from employe where cin=$cin";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercherListeEmployes($tarif){
        $sql="SELECT * from employe where tarifHoraire=$tarif";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
}

?>