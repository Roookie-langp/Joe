<?php
/**
 * 碎碎念
 * @author 即刻学术 www.ijkxs.com 知识分子没文化修改
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 自己添加 -->
	<?php $this->need('public/include.php'); ?>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta itemprop="image" content="https://image.wlplove.com/static/img/other/79.webp">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=6.0, minimum-scale=1.0, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicon图标 -->
    <link rel="shortcut icon" href="https://www.wlplove.com/favicon.ico">
    <!-- Typecho自有函数 -->
    <meta name="description" content="碎碎念">
    <meta name="generator" content="Typecho 1.2/18.1.29">
    <!-- 通过自有函数输出HTML头部信息 
    <?php $this->header(); ?>
    -->
    <!-- 网站标题 -->
    <title>碎碎念</title>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/static/bootstrap-grid.min.css'); ?>"
          media="all">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/static/animate.min.css'); ?>" media="all">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/static/OwO.min.css'); ?>"
          media="all" onload="this.media='all'; this.onload=null;">
     <!--
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap-grid.min.css"
          media="all">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css" media="all">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gogobody/Modify_Joe_Theme/assets/css/OwO.min.css"
          media="all" onload="this.media='all'; this.onload=null;">
    -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('times/assets/dycomment.min.css'); ?>"
          media="all" onload="this.media='all'; this.onload=null;">

</head>
<body>
<section>
    <!-- 页面头部 -->
	<?php $this->need('public/header.php'); ?>
    <!-- 主体 -->
    <section class="container j-post">
        <section class="j-adaption">
            <?php $this->need('times/dycomment.php'); ?>
        </section>
    </section>
    <!-- 页面页脚 -->
    <?php $this->need('public/footer.php'); ?>
</section>
	<script src="<?php $this->options->themeUrl('assets/static/jquery.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('assets/static/OwO.min.js'); ?>"></script>
<!--
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typecho_joe_theme@4.4.5/assets/js/OwO.min.js"></script>
-->

<script>
    function changeURLArg(url,arg,arg_val){
        let pattern=arg+'=([^&]*)';
        let replaceText=arg+'='+arg_val;
        if(url.match(pattern)){
            let tmp='/('+ arg+'=)([^&]*)/gi';
            tmp=url.replace(eval(tmp),replaceText);
            return tmp;
        }else{
            if(url.match('[\?]')){
                return url+'&'+replaceText;
            }else{
                return url+'?'+replaceText;
            }
        }
    }
    let DyComment ={
        /* 初始化owo标签 */
        init_owo() {
            if ($('#OwO_Container').length === 0) return;
            new OwO({
                logo: 'OωO表情',
                container: document.getElementsByClassName('OwO')[0],
                target: document.getElementsByClassName('OwO-textarea')[0],
                api: '<?php $this->options->themeUrl('times/assets/owo.json')?>',
                position: 'down',
                width: '100%',
                maxHeight: '250px'
            });

            $(document).bind('click', function () {
                $('.OwO').removeClass('OwO-open');
            });
        },
        /* 初始化微语发布 */
        init_dynamic_verify() {
            let _this = this;
            $('#j-dynamic-form').off('submit').on('submit', function (e) {
                // e.preventDefault();
                let btn = $("#j-dynamic-form .form-foot button")
                if ($('#j-dynamic-form-text').val().trim() === '') {
                    return alert('请输入发表内容');
                }
                if ($(this).attr('data-disabled')) return;
                $(this).attr('data-disabled', true);
                btn.text("发表中...")
            });
        }
    }
    $(document).ready(function () {
        /* 点击评论按钮显示隐藏评论区域 */
        $('.j-comment-reply').unbind('click').bind('click', function (e) {
            e.stopPropagation();
            $(this).parents('li').find('.j-dynamic-reply').toggle();
        });
        DyComment.init_owo()
        DyComment.init_dynamic_verify()
    })
</script>
</body>
</html>

