<?php
# session
session_start();
$_SESSION["user"] = "Inscription";
$_id_session = session_id();
$_COOKIE['PHPSESSID'] = null;

# compter les visiteur

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
 } else {
    $_SESSION['count']++;
 }

# class pour le formulaire
    class Form{
        public string $title = "Formulaire d'inscription";
        public string $lang = "fr";
        public string $css = "./css/main.css";
        
    }
    $_form = new Form; 

    $_date = new DateTime();
?>

<!DOCTYPE html>
<html lang="<?= $_form->lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_form->title ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="./font_outrun/stylesheet.css">
    <link rel="stylesheet" href="<?= $_form->css ?>">
</head>
<body>
    <header>
        <h1><?= $_form->title." ".$_SESSION['count'] ?></h1>
    </header>
    <?= $_COOKIE['PHPSESSID']; ?>
    <main>
        <?php
            include_once __DIR__."/src/form.inc.php";
            
            
        ?>
        <pre>
            <?php
            /*print $_SERVER['PHP_SELF'];
              print_r($_SERVER);
               $str = "<© W3Sçh°°¦§>";
               echo "test ".htmlentities($str);*/
            ?>
        </pre>
   
    </main>
    <footer>
        <?php
            print "<strong>&copy; - PHP - ".$_date->format("Y")."</strong>";
        ?>
    </footer>
    <?php
        //include_once "./src/tab_php.inc.php";
    ?>
    <pre>
<?php
    session_destroy();
?>
    
 
</body>
</html>