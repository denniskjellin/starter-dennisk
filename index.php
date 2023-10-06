<?php get_header(); ?>

<div class="container mt-5 mb-5">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quae, ut impedit cumque ab dolorem nobis voluptates quos quibusdam,
            dignissimos sed saepe atque voluptatum voluptatem quo error fugiat harum aliquid!
            Illum dignissimos deserunt corrupti rerum quod non corporis sint iure vitae quisquam pariatur ullam maiores perspiciatis cupiditate vero
            veritatis cumque necessitatibus, asperiores ipsa recusandae omnis nemo earum debitis? Nulla, expedita.
            A, delectus iure molestiae laborum placeat ratione labore quas ducimus, reiciendis, nam architecto laboriosam modi vero. Sapiente
        </p>
    </main>
</div>

<?php get_footer(); ?>