<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Article : Affichage de l'article</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php 
        $id = htmlspecialchars($_POST['article']);
        $bdd = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '');
        $recv = $bdd->query('SELECT * FROM article');
        $selectArticleFromBddOk = False;

        $data = array();
        while(!$selectArticleFromBddOk)
        {
            $data = $recv->fetch();
            if($data['id'] == $id)
            {
                $selectArticleFromBddOk = True;
            }
        }
        $recv->closeCursor();
        ?>

        <h1><?php echo $data['title'] ?></h1>
        
        <p><?php echo $data['author'] . '<br><br>' . $data['content'] ?></p>
    </body>
</html>