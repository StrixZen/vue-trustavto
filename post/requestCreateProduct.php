<?php

$conn = new mysqli("localhost", "vrgvpgpx", "CUjai8", "dpkkxgu-m3");

$title = $_POST['title'];
$description = $_POST['description'];
$id = $_POST['id'];
$post = $_POST['post'];


$pathRandom = str_shuffle('kjsbhjsbfjsfhbsjiifn');

mkdir("img/$pathRandom/");

$path = "img/$pathRandom/" . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $path);

$sql = "INSERT INTO product (post, title, image, description) VALUES ('gugyu','$title','$path','$description')";

$conn->query($sql);

header('location: index.php');