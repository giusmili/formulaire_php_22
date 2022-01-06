
![image](./asset/a.png)

# Formulaire d'inscription
Quelque notion de contrôle formulaire en PHP
```php
if(isset($_POST["numero_de_serie"]) || isset($_POST["date"]) || isset($_POST["pays"])){
            //variables => GET
            $_number = $_POST["numero_de_serie"];
            $_date = $_POST["date"];
            $_pays = $_POST["pays"];
            //ternaire
            $_number &&  $_date && $_pays ? print '<p class="success">Numéro de série : '.$_number."<br>date : ".$_date."<br>Pays : ".$_pays."</p>" 
            : print '<p class="warning">Les champs sont tous obligatoires</p>';

    }
```
Indexer les variables par des super globales et tester si tous les champs sont renseignées