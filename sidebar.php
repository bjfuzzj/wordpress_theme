<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage zzj
 * @since zzj 1.0
 */
?>
<div id="sidebar">
    <?php if (!function_exists('dynamic_sidebar')  || !dynamic_sidebar('First_sidebar') ) : ?>  
    <div class="widget large">
		<h3>最新文章</h3>
     <ul>
            <?php
                $posts = get_posts('numberposts=10&orderby=post_date');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="'. get_permalink() .'" title="'.get_the_title().'" >' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
            ?>
     </ul>
    </div>
    <?php endif; ?>


        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second_sidebar') ) : ?>
        <div class="widget">
        <h3>分类目录</h3>
        <ul>
            <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        </ul>
        </div>
   		<?php endif; ?>

	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third_sidebar') ) : ?>    
	    <div class="widget">
			<h3>文章归档</h3>
	        <ul>
	            <?php wp_get_archives('limit=10'); ?>
	        </ul>
	    </div>
	   <?php endif; ?>

	     <?php if ( !function_exists('dynamic_sidebar') | !dynamic_sidebar('Fourth_sidebar') ) : ?> 
        <h3>标签云</h3>
        <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
    	<?php endif; ?>

    	<?php if ( !function_exists('dynamic_sidebar') | !dynamic_sidebar('Fifth_sidebar') ) : ?> 
        <div class="widget">
		<?php wp_list_bookmarks(array('title_before'=>'<h3>','title_after'=>'</h3>'));?>
		<!--
		<h3>链接</h3>
        <ul>
            <li><a target="_blank" href="/feed">文章 RSS</a></li>
			<li><a target="_blank" href="/comments/feed">评论 RSS</a></li>
        </ul>
		-->
    	</div>
    	<?php endif; ?>
</div>