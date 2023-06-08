<?php


function getPosts ($connect) {
    $posts = mysqli_query($connect, "SELECT * FROM  `posts`");
    $postsLists = [];
    while ($post = mysqli_fetch_assoc($posts)) {
        $postsLists[] = $post;
    }
    echo json_encode($postsLists);
}



