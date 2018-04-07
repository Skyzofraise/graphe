<!-- 1. Vérification que le fichier est bien sur le serveur -->
<!-- 2. Vérification que l'image ne dépasse pas la taille maximum fixée -->
<?php
	function transfert(){
		$ret 		= false;
		$img_blob	= '';
		$img_size 	= '';
		$img_type	= '';
		$img_name	= '';
		$img_color	= '';
		$size_max	= 250000;
		$ret 		= is_uploaded_file($_FILES['fic']['tmp_name']);

		if(!$ret){
			// Le fichier n'est pas sur le serveur
			echo "Problème de transfert";
			return false;
		}	else 	{
			// Le fichier a bien été reçu
			$img_taille = $_FILES['fic']['size'];
			if($img_taille > $taille_max){
				echo "Fichier trop gros !";
				return false;
			}

			$img_type 	= $_FILES['fic']['type'];
			$img_nom	= $_FILES['fic']['name'];

			include ("connexion.php");

			$img_blob = file_get_contents ($_FILES['fic']['tmp_name']);

			$req = "INSERT INTO images (" .
										"img_name, img_size, img_type, img_color, img_blop" .
										") VALUES (" .
										"'" . $img_name . "'," .
										"'" . $img_size . "'," .
										"'" . $img_type . "'," .
										"'" . $img_color . "'," .
										"'" . $img_blop . "'," ;
			$ret = mysql_query ($req) or die (mysql_error ());
        	return true;
		}
	}
?>