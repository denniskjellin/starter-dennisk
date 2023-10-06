<?php get_header(); ?>

<div class="container">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A ab autem, nam tempore deserunt ipsam soluta explicabo excepturi fugiat
            temporibus fuga recusandae sequi sit sapiente eos. Ipsum aperiam quis est.
            Nesciunt excepturi aperiam eaque unde consequuntur possimus voluptatibus repellat labore maxime, aliquam officia minima porro deserunt a
            reprehenderit temporibus. Sint consequuntur assumenda ea provident maiores autem inventore omnis voluptates error.
            Dolore numquam quasi ad porro sed at consectetur necessitatibus distinctio dolores. Exercitationem, officiis ducimus cum aspernatur
            doloremque necessitatibus consequuntur deleniti eligendi ut laboriosam. Exercitationem, quidem. Maiores quos sapiente neque quasi!
        </p>
    </main>
</div>

<?php get_footer(); ?>