<?php
    function getLatestNews(){
        include 'connection.php';

        $sql = "SELECT posts.title, posts.description, posts.post_img, posts.link AS 'post_url', posts.date, authors.first_name, authors.last_name, authors.image AS 'author_img', tags.name, tags.link AS 'tag_url', tags.department
                FROM posts
                INNER JOIN tags
                ON posts.tag_id = tags.id
                INNER JOIN authors
                ON posts.author_id = authors.id
                ORDER BY posts.date DESC LIMIT 3";
        $stmt = $db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
?>