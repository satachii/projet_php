<?php
//controllers for post.php


require_once('src/model.php');

function post(string $identifier){
    $post = getPost($identifier);
    $commments = getComments($identifier);

    require('templates/post.php');
}