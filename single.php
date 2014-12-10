<?php get_header(); ?>
<div id="content">
<div id="content">
<?php while ( have_posts() ) : the_post(); ?>
<div id="content" role="main">
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_tags('标签：', ', ', ''); ?>
<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
<?php edit_post_link('编辑', ' &bull; ', ''); ?>
<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
</div><!-- #primary -->
<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread"></div>
<script type="text/javascript">
var duoshuoQuery = {short_name:"phperzj"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->

<?php get_footer(); ?>
</div>
</div>
	<div id="top_btn" class="top_btn">
	<a class="toplink" href="javascript:void(0);" title="返回顶部" style="display: block;">TOP</a>
	</div>


<script type="text/javascript" src="http://auto.sina.com.cn/js/jq172.js"></script>
	<script>
	jQuery("#top_btn").click(function(){
		jQuery("html,body").animate({"scrollTop":0},1000);
	}); 
	</script>
</body>
</html>