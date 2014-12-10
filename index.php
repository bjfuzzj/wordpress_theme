<?php get_header(); ?>
<div id="content">
<div id="content">
<!--分页-->

<?php pagenavi(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div  class="content" id="post-432">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" class="button right">阅读全文</a>
<p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
</div>
<?php endwhile; else: ?>

<h2>Woops...</h2>

<p>Sorry, no posts we're found.</p>

<?php endif; ?>

<p class="page-navigator"><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p>
</div>
<?php get_sidebar(); ?>
	
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