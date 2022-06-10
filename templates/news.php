<?php
    $news = getLatestNews();
?>

<div class="full-width">
    <div class="latest section-pad">
        <h3>Latest</h3>
    </div>
</div>

<div class="full-width">
    <section id="news" class="section-pad">
        <?php 
            foreach($news as $post){
                $date = date_create(htmlspecialchars($post['date']));
                if ($post['post_url'] == ""){
                    $post['post_url'] = "#";
                }
                if ($post['tag_url'] == ""){
                    $post['tag_url'] = "#";
                }
                echo '<div class="card">

                    <div class="card-image">
                        <a href="' . htmlspecialchars($post['post_url']) . '">
                            <img src="' . htmlspecialchars($post['post_img']) .'" alt="' . htmlspecialchars($post['title']) . '">
                        </a>
                        <a href="' . htmlspecialchars($post['tag_url']) . '">
                            <div class="tag">' . htmlspecialchars($post['name']) .'</div>
                        </a>
                    </div>

                    <div class="card-body flex-col">
                        <div class="top">
                            <h4><a href="' . htmlspecialchars($post['post_url']) . '">' . htmlspecialchars($post['title']) . '</a></h4>
                            <p>' . htmlspecialchars($post['description']) . '</p>
                        </div>
                        <div class="bottom">
                            <a class="button" href="' . htmlspecialchars($post['post_url']) . '">Read more</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <img src="' . htmlspecialchars($post['author_img']) . '" alt="' . htmlspecialchars($post['first_name']) . " " . htmlspecialchars($post['last_name']) . '">
                        <span>Posted by ' . htmlspecialchars($post['first_name']) . " " . htmlspecialchars($post['last_name']) . '</span>
                        <span>' . date_format($date, 'jS F Y') . '</span>
                    </div>

                </div>';
            }
        ?>
    </section>
</div>
