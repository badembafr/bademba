<?php  include '../includes/host.php'  ?>


<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
$requete3 = $bdd->query("SELECT * FROM `config` WHERE id=5");
?>

<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
$requete = $bdd->query("SELECT * FROM `config` WHERE id=5");
$config = $requete->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurations PC - BaDemBa.fr</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../medias/favicon.ico" />
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/0cc17e4337.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../includes/navbar.php' ?>

    <section class="front">
        <div class="content">
            <div class="head">
                <h1>Configuration PC 1000€</h1>
                <p>Prêt à assembler votre propre PC et besoin d'inspiration pour commencer ? Explorez nos guides de montage, couvrant une variété d'utilisations et de budgets, pour vous lancer dans votre projet PC en toute confiance !</p>
                <div class="bouton">
                    <ul>
                        <li><i class="fa-solid fa-arrow-right"></i><a href="#pc">Voir la Configuration !</a></li>
                    </ul>
                </div>
            </div>
            <div class="PC">
                <?php while ($config3 = $requete3->fetch()): ?>
                <div class="insousbox">
                    <a href="<?php echo $config3['link-pc'] ?>">
                        <div class="imgb"><img src="<?php echo $config3['link-img'] ?>" alt=""></div>
                        <div><h2><i class="fa-solid fa-sheet-plastic"></i><?php echo $config3['titre'] ?> </h2></div>
                        <div><p><?php echo $config3['description'] ?></p></div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    

    <?php include '../includes/pc.php' ?>
    <?php include '../includes/categ.php' ?>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/toup.php' ?>
</body>
</html>
