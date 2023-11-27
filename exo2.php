<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tableau en php</title>   

    </head>
    <body>
        <?php
            //tableau associatif
            $tab= array(array("id"=>1, "nom"=>"FALL", "prenom"=>"MAIMOUNA"),
                            array("id"=>2, "nom"=>"DIOP", "prenom"=>"FATOU"),
                            array("id"=>3, "nom"=>"Ndiaye", "prenom"=>"BABACAR"));
       foreach($tab as $ligne) {
       // echo "$ligne";

        
        
       foreach($ligne as $nm=>$info){
        echo $nm.':'.$info."<br/>";
    }  
}  
       ?>
    </body> 
</html>

