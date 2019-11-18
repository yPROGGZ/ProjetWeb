<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>BACK OFFICE</title>
    <link rel="stylesheet" href="api/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="favicon.png" />
    <script src="api/scriptBackOffice.js"></script>
</head>

<body class="body_backoffice">
    <div class="wrapper">
        <h1>GESTION ET ADMINISTRATION</h1>
        <div class="container">
            <div class="events">
                <div class="addEvent">
                    <div>
                        <h2>Ajouter un événement :</h2>
                    </div>
                    <div>
                        Nom de l'événement : <input type="text" id="nameAE" />
                    </div>
                    <div>
                        Description de l'événement : <input type="text" id="descAE" />
                    </div>
                    <div>
                        Date de l'événement : <input type="date" id="dateAE" />
                    </div>
                    <div>
                        Prix d'entrée de l'événement : <input type="number" id="priceAE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddEvent()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteEvent">
                    <div>
                        <h2>Supprimer un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idDE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteEvent()" value="Envoyer" />
                    </div>
                </div>
                <div class="editEvent">
                    <div>
                        <h2>Modifier un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idEE" />
                    </div>
                    <div>
                        Nom de l'événement : <input type="text" id="nameEE" />
                    </div>
                    <div>
                        Description de l'événement : <input type="text" id="descEE" />
                    </div>
                    <div>
                        Date de l'événement : <input type="date" id="dateEE" />
                    </div>
                    <div>
                        Prix d'entrée de l'événement : <input type="number" id="priceEE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditEvent()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="addProduct">
                    <div>
                        <h2>Ajouter un produit :</h2>
                    </div>
                    <div>
                        Nom du produit : <input type="text" id="nameAP" />
                    </div>
                    <div>
                        Description du produit : <input type="text" id="descAP" />
                    </div>
                    <div>
                        Prix du produit : <input type="number" id="priceAP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddProduct()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteProduct">
                    <div>
                        <h2>Supprimer un produit :</h2>
                    </div>
                    <div>
                        ID du produit : <input type="number" id="idDP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteProduct()" value="Envoyer" />
                    </div>
                </div>
                <div class="editProduct">
                    <div>
                        <h2>Modifier un produit :</h2>
                    </div>
                    <div>
                        ID du produit : <input type="number" id="idEP" />
                    </div>
                    <div>
                        Nom du produit : <input type="text" id="nameEP" />
                    </div>
                    <div>
                        Description du produit : <input type="text" id="descEP" />
                    </div>
                    <div>
                        Prix du produit : <input type="number" id="priceEP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditProduct()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <div class="flags">
                <div class="flagProduct">
                    <div>
                        <h2>Signaler un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idFP" />
                    </div>
                    <div>
                        <form>
                            <select size="2" id="typeFP">
                                <option>Signaler</option>
                                <option>Enlever le signalement</option>
                            </select>
                        </form>
                        <!--Type de signalement : <input type="number" id="typeFP" />-->
                    </div>
                    <div>
                        <input type="button" onclick="sendFormFlagEvent()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <div class="articles">
                <div class="addArticles">
                    <div>
                        <h2>Ajouter un article :</h2>
                    </div>
                    <div>
                        Nom de l'article : <input type="text" id="nameAA" />
                    </div>
                    <div>
                        Contenu de l'article : <input type="text" id="contentAA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddArticle()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteArticle">
                    <div>
                        <h2>Supprimer un article :</h2>
                    </div>
                    <div>
                        ID de l'article : <input type="number" id="idDA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteArticle()" value="Envoyer" />
                    </div>
                </div>
                <div class="editArticle">
                    <div>
                        <h2>Modifier un article :</h2>
                    </div>
                    <div>
                        ID de l'article : <input type="number" id="idEA" />
                    </div>
                    <div>
                        Nom de l'article : <input type="text" id="nameEA" />
                    </div>
                    <div>
                        Contenu de l'article : <input type="text" id="contentEA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditArticle()" value="Envoyer" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>