<?php
	if(!isset($_SESSION)){
	    session_start();
	}
	include 'requests/connexionBdd.php';

	$requete = $bdd->prepare("SELECT * FROM  goodie_vetements WHERE Ville = :ville");

	        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);

	        $requete->execute();  

	        foreach ($requete->fetchAll() as $x) {

	        	echo '<div class="col-md-3">
	                    <!-- bbb_deals -->
	                    <div class="bbb_deals">
	                        <a href="panier.php?action=add" class="panier"></a>
	                        <div class="bbb_deals_slider_container">
	                            <div class=" bbb_deals_item">
	                                <div class="bbb_deals_image"><img class="image_article" src=' . $x['Link'] . '
	                                        alt=""> 
	                                        <a href="fonctions_panier.php?action=firstadd&amp;id_prod='.$x['Id'].'&amp;designation='.$x['Designation'].'&amp;prix='.$x['Prix'].'&amp;taille='.$x['Taille'].'&amp;ville='.$x['Ville'].'&amp;link='.$x['Link'].'&amp;quantite='.$x['Quantite'].'" class="panier" style="display: none;">
	                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a></div>
	                                <div class="bbb_deals_content">
	                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
	                                        <div class="bbb_deals_item_category"><a href=""></a></div>
	                                    </div>
	                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
	                                        <a href="panier.php?action=add" class="panier">
	                                            <div class="bbb_deals_item_name">'.$x['Designation'].'</div>
	                                        </a>
	                                        <div class="bbb_deals_item_price ml-auto">'.$x['Prix'].'€</div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>';
	            }   
?>
