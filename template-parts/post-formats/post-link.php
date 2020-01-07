 <article class="masonry__brick entry format-link" data-aos="fade-up">

                <div class="entry__thumb">
                    <div class="link-wrap">
                        <?php the_content();?>
                        <cite>
                            <a target="_blank" href=""<?php the_permalink();?>"><?php the_title();?></a>
                        </cite>
                    </div>
                </div>

           
           <?php get_template_part("template-parts/common/post/summary");?>
           
           
            </article> <!-- end article -->
