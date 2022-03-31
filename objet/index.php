<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Objet</h1>

    <h2>Instanciation</h2>
    <?php 
        function my_var_dump($var) {
            echo "<pre style='background-color: orange; border: 2px solid black'>";
            print_r($var);
            echo "</pre>";
        }

        include_once("user.class.php");
        $user1 = new User("Dupond", "email@mail.com", "DUP");
        $user2 = new User("Durant", "email2@mail.com", "DUR");
        $user3 = new User("Duboit", "email3@mail.com", "DUB");
        $user4 = new User("1234", "1234@mail.com", "123");

        //$user1->pseudo = "Dupont"; Si la propriété pseudo était public
        $user1->setPseudo("Dupont"); // On passe par un setter car propriété private
        $user1->setEmail("phgiraud@cogitium.com");
        $user2->setPseudo("Durand");
        $user3->setPseudo("Dubois");
        $user4->setPseudo("123456789");
        
        if ($user1->envoyerEMail("Création du user")) {
            echo "<p>Mail envoyé !</p>";
        } else {
            echo "<p>Mail non envoyé !</p>";
        }
        
        my_var_dump($user1);

        $user1->bloquer();

        my_var_dump($user1);
        my_var_dump($user2);
        my_var_dump($user3);
        my_var_dump($user4);
    ?>

    <h2>Héritage</h2>

    <?php
        include_once("admin.class.php");
        $admin = new Admin("Admin1", "admin1@mail.com", "ADM");
        my_var_dump($admin);
        $admin->supprimerUser($user2);
    ?>

</body>
</html>