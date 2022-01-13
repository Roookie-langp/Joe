<footer class="joe_footer">


<!--以下至footer部分为自行编写-->
<div class="joe_container" style="display:flex; flex-wrap:wrap; justify-content:center;">
	<!-- 第一行链接：网站信息 -->
	<div class="website_info" style="display:flex; flex-wrap:wrap; justify-content:center; padding:5px;">
		<!-- 备案信息 -->
		<div class="beian" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap;">
			<div class="beian_icp" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; margin-right:20px">
				<img src="https://image.wlplove.com/static/img/icon/footer/beian_icp_favicon.png" width=20px height=auto>
				<a style="text-decoration:none;" href="http://beian.miit.gov.cn/" target="_blank">
					&nbsp;陇ICP备2021000230号-2
				</a>
			</div>
			<div class="beian_police" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; margin-right:20px">
				<img src="https://image.wlplove.com/static/img/icon/footer/beian_police.png" width="20px" height=auto>
				<a style="text-decoration:none;" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=62010202003430" target="_blank">
					&nbsp;甘公网安备62010202003430号
				</a>
			</div>
		</div>
		<!-- 又拍云 -->
		<div class="upyun" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; margin-right:20px">
			<span>本站由</span>
			<a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral" target="_blank">
				<img src="https://image.wlplove.com/static/img/icon/footer/upyun_logo.png" alt="哎呀，图片加载失败了" width="60px" height=auto>
			</a>
			<span>提供CDN服务</span>
		</div>
		<!-- 运行时间 -->
		<div class="runtime" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap;">
			<?php if ($this->options->JBirthDay) : ?>			
				<span>已运行 <strong class="joe_run__day">00</strong> 天 <strong class="joe_run__hour">00</strong> 时 <strong class="joe_run__minute">00</strong> 分 <strong class="joe_run__second">00</strong> 秒</span>
			<?php endif; ?>
		</div>
	</div>

	<!-- 第二行链接：版权信息 -->
	<div class="copyright" style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center; padding:10px; line-height: 19.3px;">
		<!-- 文章版权 -->
		<div class="power_copyright" style="margin-right:20px;">
			<a style="text-decoration:none;" href="http://typecho.org/" target="_blank">Powered by Typecho</a>
		</div>
		<div class="theme_copyright" style="margin-right:20px;">
			<a style="text-decoration:none;" href="https://78.al/" target="_blank">Theme by Joe</a>
		</div>
		<div class="content_copyright" style="margin-right:20px;">
		    <p>Copyright&nbsp;&nbsp;2021-2022&copy;
			<a style="text-decoration:none;" href="https://www.wlplove.com/start-page.html" target="_blank">知识分子没文化</a>
			</p>
		</div>
		<!-- 页面加载耗时 -->
		<div class="time">
			<span>页面加载耗时:<?php _endCountTime();?></span>
		</div>
	</div>

	<!-- 签章、图标 -->
	<div class="joe_container" style="display:flex; flex-wrap:wrap; justify-content:center;">
		<!-- 小图标 -->
		<div style="display:flex; justify-content:center;">
			<a style="text-decoration:none; align-items:center;" target="_blank" href="https://www.wlplove.com/feed/">
				<img src="https://image.wlplove.com/static/img/icon/footer/rss.png" width=auto height="19px" style="margin-left:20px;">
			</a>
			<a style="text-decoration:none; align-items:center;" target="_blank" href="https://www.wlplove.com/sitemap.xml">
				<img src="https://image.wlplove.com/static/img/icon/footer/sitemap.png" width=auto height="20px" style="margin-left:20px;">
			</a>
			<a style="text-decoration:none; align-items:center;" target="_blank" href="https://status.wlplove.com">
				<img src="https://image.wlplove.com/static/img/icon/footer/status.png" width=auto height="21px" style="margin-left:20px;">
			</a>
			<a style="text-decoration:none; align-items:center;" target="_blank" href="https://byteman.wlplove.com">
				<img src="https://image.wlplove.com/static/img/icon/footer/navigation.png" width=auto height="20px" style="margin-left:20px;">
			</a>
		</div>
		
		<!-- HTTPS安全认证签章 -->
		<div style="padding:10px 20px">
			<a href="https://myssl.com/seal/detail?domain=www.wlplove.com" target="_blank">
				<img src="https://static.myssl.com/res/images/myssl-id1.png" alt="HTTPS安全认证" style="max-height:45px;">
			</a>
		</div>
	</div>
</div>
    
</footer>

<!-- 鱼群跳跃效果 -->
<script src="https://image.wlplove.com/static/cdn/fish.min.js"></script>
<div id="j-fish-skip"></div>

<div class="joe_action">
    <div class="joe_action_item scroll">
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M725.902 498.916c18.205-251.45-93.298-410.738-205.369-475.592l-6.257-3.982-6.258 3.414c-111.502 64.853-224.711 224.142-204.8 475.59-55.751 53.476-80.214 116.623-80.214 204.8v15.36l179.2-35.27c11.378 40.39 58.596 69.973 113.21 69.973 54.613 0 101.262-29.582 112.64-68.836l180.337 36.41v-15.36c-.569-89.885-25.031-153.6-82.489-206.507zM571.733 392.533c-33.564 31.29-87.04 28.445-118.329-5.12s-28.444-87.04 5.12-117.76c33.565-31.289 87.04-28.444 118.33 5.12s28.444 86.471-5.12 117.76zm-56.32 368.64c-35.84 0-64.284 29.014-64.284 64.285 0 35.84 54.044 182.613 64.284 182.613s64.285-146.773 64.285-182.613c0-35.271-29.014-64.285-64.285-64.285z" />
        </svg>
    </div>
    <div class="joe_action_item mode">
        <svg class="icon-1" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M587.264 104.96c33.28 57.856 52.224 124.928 52.224 196.608 0 218.112-176.128 394.752-393.728 394.752-29.696 0-58.368-3.584-86.528-9.728C223.744 832.512 369.152 934.4 538.624 934.4c229.376 0 414.72-186.368 414.72-416.256 1.024-212.992-159.744-389.12-366.08-413.184z" />
            <path d="M340.48 567.808l-23.552-70.144-70.144-23.552 70.144-23.552 23.552-70.144 23.552 70.144 70.144 23.552-70.144 23.552-23.552 70.144zM168.96 361.472l-30.208-91.136-91.648-30.208 91.136-30.208 30.72-91.648 30.208 91.136 91.136 30.208-91.136 30.208-30.208 91.648z" />
        </svg>
        <svg class="icon-2" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M234.24 512a277.76 277.76 0 1 0 555.52 0 277.76 277.76 0 1 0-555.52 0zM512 187.733a42.667 42.667 0 0 1-42.667-42.666v-102.4a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 187.733zm-258.987 107.52a42.667 42.667 0 0 1-29.866-12.373l-72.96-73.387a42.667 42.667 0 0 1 59.306-59.306l73.387 72.96a42.667 42.667 0 0 1 0 59.733 42.667 42.667 0 0 1-29.867 12.373zm-107.52 259.414H42.667a42.667 42.667 0 0 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zm34.134 331.946a42.667 42.667 0 0 1-29.44-72.106l72.96-73.387a42.667 42.667 0 0 1 59.733 59.733l-73.387 73.387a42.667 42.667 0 0 1-29.866 12.373zM512 1024a42.667 42.667 0 0 1-42.667-42.667V878.507a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 1024zm332.373-137.387a42.667 42.667 0 0 1-29.866-12.373l-73.387-73.387a42.667 42.667 0 0 1 0-59.733 42.667 42.667 0 0 1 59.733 0l72.96 73.387a42.667 42.667 0 0 1-29.44 72.106zm136.96-331.946H878.507a42.667 42.667 0 1 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zM770.987 295.253a42.667 42.667 0 0 1-29.867-12.373 42.667 42.667 0 0 1 0-59.733l73.387-72.96a42.667 42.667 0 1 1 59.306 59.306l-72.96 73.387a42.667 42.667 0 0 1-29.866 12.373z" />
        </svg>
    </div>
</div>

<script>
    <?php
    $cookie = Typecho_Cookie::getPrefix();
    $notice = $cookie . '__typecho_notice';
    $type = $cookie . '__typecho_notice_type';
    ?>
    <?php if (isset($_COOKIE[$notice]) && isset($_COOKIE[$type]) && ($_COOKIE[$type] == 'success' || $_COOKIE[$type] == 'notice' || $_COOKIE[$type] == 'error')) : ?>
        Qmsg.info("<?php echo preg_replace('#\[\"(.*?)\"\]#', '$1', $_COOKIE[$notice]); ?>！")
    <?php endif; ?>
    <?php
    Typecho_Cookie::delete('__typecho_notice');
    Typecho_Cookie::delete('__typecho_notice_type');
    ?>
    console.log("%c页面加载耗时：<?php _endCountTime(); ?> | Theme By Joe", "color:#fff; background: linear-gradient(270deg, #986fee, #8695e6, #68b7dd, #18d7d3); padding: 8px 15px; border-radius: 0 15px 0 15px");
    <?php $this->options->JCustomScript() ?>
</script>

<?php $this->options->JCustomBodyEnd() ?>

<?php $this->footer(); ?>