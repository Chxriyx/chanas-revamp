<?php get_header(); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="home-page-banner">
        <div class="container">
            <h1>Experience Authentic Indian Flavors at Chana’s</h1>
            <p>Delicious meals, catering, and banquets for all your occasions.</p>
            <div class="buttons-banner">
                <a href="#" class="order-now-btn" rel="noopener noreferrer">Order now</a>
                <a href="#" class="book-banquet-btn ms-5"  rel="noopener noreferrer">Book a banquet</a>
            </div>

        </div>
    </section>

    <section class="home-page-restaurant-branches">
        <div class="container">
            <h1>Visit Chana’s in <br> Nawala or Wellawatte</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. <br> Aliquam in hendrerit urna. Pellentesque sit amet sapi.</p>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid branches-banner-img" src="https://wp.chanas.lk/wp-content/uploads/2024/10/chanas-nawala.png" alt="">
                    <a href="#" class="nawala-branch-btn"  rel="noopener noreferrer">Chana’s Nawala</a>
                    <p>A welcoming space perfect for family dinners and <br> casual gatherings.</p>
                    <a href="#" class="reservation-btn"  rel="noopener noreferrer">Book a reservation</a>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid branches-banner-img" src="https://wp.chanas.lk/wp-content/uploads/2024/10/chanas-wellawatta.png" alt="">
                    <a href="https://wp.chanas.lk/wellawatta-branch" class="nawala-branch-btn"  rel="noopener noreferrer">Chana’s Wellawatte</a>
                    <p>Your go-to spot for large gatherings, banquets, <br> and celebrations.</p>
                    <a href="https://wp.chanas.lk/wellawatta-branch" class="reservation-btn"  rel="noopener noreferrer">Order at Wellawatte</a>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
