/**
* Created by PhpStorm.
* User: nhuan
* Date: 18/02/2015
* Time: 16:40
*/
<div class="post-preview">
    <a href="<?php echo $link;?>">
        <h2 class="post-title">
            <?php echo $title;?>
        </h2>
        <h3 class="post-subtitle">
           <?php echo $content;?>
        </h3>
    </a>
    <p class="post-meta">Posted by<a href="$link/public/user?user_id=<?php echo $user_id?>"><?php echo $user_name?></a> on September 24, 2014</p>
</div>