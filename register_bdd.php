<?php 

$author = htmlspecialchars($_POST['form_author']);
$title = htmlspecialchars($_POST['form_title']);
$content = htmlspecialchars($_POST['form_content']);


$bdd = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '');

$req = $bdd->prepare('INSERT INTO article(author, title, content) VALUES(:author, :title, :content)');
$req->execute(array('author' => $author, 'title' => $title, 'content' => $content));

header('Location: index.php');

