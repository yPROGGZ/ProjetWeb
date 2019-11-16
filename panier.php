<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>PANIER</title>
</head>

<body class="body_panier">

    <main class="main_panier">

        <form class="retour_arriere">
            <input class="button_retour" type="button" value="Retour" onclick="history.go(-1)">
        </form>
        <div class="table">
            <div class="wrap">

                <div class="row item">
                    <img class="image" src="assets/images/sweat.png">
                    <span class="name">Sweat BDE CESI REIMS</span>
                    <span class="price">40 €</span>
                    <div class="quantity">
                        <button class="minus-btn" type="button" name="button">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" name="name" value="1">
                        <button class="plus-btn" type="button" name="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <span><select class="size" name="size_product">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select></span>
                    <span class="action">
                        <a href="#" class="del"><i class="fa fa-trash"></i></a>
                    </span>
                </div>

                <div class="row item">
                    <img class="image" src="assets/images/sweat.png">
                    <span class="name">Sweat BDE CESI REIMS</span>
                    <span class="price">40 €</span>
                    <div class="quantity">
                        <button class="minus-btn" type="button" name="button">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" name="name" value="1">
                        <button class="plus-btn" type="button" name="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <span><select class="size" name="size_product">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select></span>
                    <span class="action">
                        <a href="#" class="del"><i class="fa fa-trash"></i></a>
                    </span>
                </div>

                <div class="row item">
                    <img class="image" src="assets/images/sweat.png">
                    <span class="name">Sweat BDE CESI REIMS</span>
                    <span class="price">40 €</span>
                    <div class="quantity">
                        <button class="minus-btn" type="button" name="button">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" name="name" value="1">
                        <button class="plus-btn" type="button" name="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <span><select class="size" name="size_product">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select></span>
                    <span class="action">
                        <a href="#" class="del"><i class="fa fa-trash"></i></a>
                    </span>
                </div>
            </div>
        </div>

        <div class="total-price">Prix total: 120 €</div>
        <div class="payer">PAYER</div>

    </main>

    <?php
            include 'cookies.php';
        ?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.12.3.js" integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
    crossorigin="anonymous"></script>
<script src="assets/js/panier.js"></script>

</html>