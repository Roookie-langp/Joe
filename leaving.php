<?php

/**
 * 留言
 * 
 * @package custom 
 * 
 **/

?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $this->need('public/include.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/draggabilly@2.3.0/dist/draggabilly.pkgd.js"></script>
    <script src="<?php $this->options->themeUrl('assets/js/joe.leaving.min.js'); ?>"></script>
</head>

<body>
    <div id="Joe">
        <?php $this->need('public/header.php'); ?>
        <div class="joe_container">
            <div class="joe_main">
                <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
                    <?php $this->need('public/batten.php'); ?>
                    <div class="joe_detail__leaving">
                        <?php $this->comments()->to($comments); ?>
                        <?php if ($comments->have()) : ?>
                            <ul class="joe_detail__leaving-list">
                                <?php while ($comments->next()) : ?>
                                    <li class="item">
                                        <div class="user">
                                            <img class="avatar lazyload" src="<?php _getAvatarLazyload(); ?>" data-src="<?php _getAvatarByMail($comments->mail) ?>" alt="用户头像" />
                                            <div class="nickname"><?php $comments->author(); ?></div>
                                            <div class="date"><?php $comments->date('Y/m/d'); ?></div>
                                        </div>
                                        <div class="wrapper">
                                            <div class="content"><?php _parseLeavingReply($comments->content); ?></div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php else : ?>
                            <div class="joe_detail__leaving-none">
                                <p>这里是博主的留言板，当您来访时，可以在下方评论区留言给我。</p><br>
                                <p>文章如有内容纰漏、图片加载失败、链接失效的地方, 也可留言告知我。</p><br> 
                                <p>您留下的qq邮箱可用来展示您的头像，如果还能留下博客地址的话便更好不过了。</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $this->need('public/comment.php'); ?>
            </div>
        </div>
        <?php $this->need('public/footer.php'); ?>
    </div>
</body>

</html>