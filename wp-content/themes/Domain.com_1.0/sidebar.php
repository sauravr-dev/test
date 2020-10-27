<div class="sidebar card" role="complementary">


<div class="row-fluid boxed">
    <h3>Tags --</h3>
        <ul class="list-items category-list" id="categories">
            <?php $tags = get_the_tags($post->ID);  ?>
                <?php foreach($tags as $tag) :  ?>
                    <li>
                    <a class=""
                        href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                                <?php print_r($tag->name); ?>
                        </a>   
                    </li>
                <?php endforeach; ?>
        </ul>
</div>

    <div class="row-fluid related-posts">

    <h3>Related Posts --</h3>

                    <?php domain_related_posts(); ?>
    </div>

<div class="row-fluid">
		<ul class="list-items social-links">
            <li><a target="_blank" href="#" class="icons-sm fb-ic" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="#" class="icons-sm tw-ic" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="#" class="icons-sm ins-ic" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<li><a target="_blank" href="#" class="icons-sm li-ic" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		</ul>
    </div>
    


                </div>