<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Article : Le formulaire administrateur</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>Formulaire administrateur</h1>

            <p>Page d'administration pour poster des article en PHP</p>
        </header>

        <section>
            <h2>Poster votre article : </h2>
            <form method="post" action="register_bdd.php">
                <fieldset>
                    <legend>Formulaire : </legend>
                    <table> 
                        <tr>
                            <td><label for="author">Nom de l'auteur :</label></td>
                            <td><input id="author" type="text" placeholder="Nom de l'auteur" name="form_author"></td>
                        </tr>

                        <tr>
                            <td><label for="title">Titre de l'article :</label></td>
                            <td><input id="title" type="text" placeholder="Titre de l'article" name="form_title"></td>
                        </tr>

                        <tr>
                            <td colspan="2"><textarea id="content" rows="4" cols="30" placeholder="Votre article" name="form_content"></textarea></td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Upluad"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>

        <section>
            <aside>
                <nav>
                    <ul>
                        <form method="post" action="article.php">
                        <label>Quel article lire : </label>

                        <select name="article">
                            <?php 
                                $bdd = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '');

                                $recv = $bdd->query('SELECT * FROM article');

                                while($data = $recv->fetch())
                                {
                                    echo '<option value="'.$data['id']. '">'. $data['title']. ' de l\'auteur '. $data['author'].'</option>';
                                }
                                $recv->closeCursor();
                            ?>
                        </select>
                        <input type="submit" value="Lire !">
                        </form>
                         
                    </ul>
                </nav>
            </aside>
        <section>
    </body>
</html>