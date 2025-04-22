<?php  get_header();   ?>



<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.section__container {
  padding: 5rem 1rem;
  max-width: var(--max-width);
  margin: auto;
}

.section__title {
  font-size: 2rem;
  font-weight: 500;
  color: var(--primary-color);
  margin-bottom: 1rem;
  text-align: center;
}

.section__subtitle {
  font-size: 1rem;
  font-style: italic;
  color: var(--primary-color);
  margin-bottom: 5rem;
  text-align: center;
}


   
   
   .journey__container {
  background-color: #e8f1fa;
}

.journey__grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}

.book__card {
  background-color:;
}

.book__name {
  padding: 1rem;
  text-align: left;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color:#767268;
  cursor: pointer;
}

.book__name i {
  font-size: 1.2rem;
}

.book__name span {
  font-style: italic;
}



.banner__container .section__container {
  padding: 10rem 1rem;
  display: flex;
  justify-content: center;
}
img{
  margin-left:200px;
  height: 300px;
}
#title{
  margin-left:200px;
 
}

.banner__content {
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 1.5rem;
  text-align: center;
  color: #f3f4f6;
}

.banner__content h2 {
  font-size: 2rem;
  font-weight: 400;
}

.banner__content button {
  padding: 0.5rem 2rem;
  outline: none;
  border: 2px solid #e8f1fa;
  background-color: transparent;
  color: #e8f1fa;
  font-size: 1rem;
  cursor: pointer;
}

.display__container {
  background-color: #e8f1fa;
}

.display__container :is(.section__title, .section__subtitle) {
  color:#282d31;;
}

.display__grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}

.display__card {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 0.5rem;
  background-color: #f3f4f6;
  text-align: center;
}

.display__card i {
  font-size: 2rem;
  color: #669ccb;
}

.display__card h4 {
  font-size: 1rem;
  font-weight: 500;
  padding: 0 1rem;
  color: #282d31;;
}

.display__card p {
  font-size: 0.8rem;
  padding: 0 1rem;
  color: #282d31;;
}



  </style>
</head>
<body>
  



<section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Start your Reading Journey</h2>
        <p class="section__subtitle">The most searched books in April</p>
        <div class="journey__grid">
        <div class="book__card">
            <img src="<?php echo get_template_directory_uri();  ?>/img/doors.jpg" alt="country" />
            <div class="book__name">
              <i class="ri-map-pin-2-fill"></i>
              <span id="title">Echo of the old book</span>

            </div>
          </div>
          <div class="book__card">
            <img src="<?php echo get_template_directory_uri();  ?>/img/flame.jpg" alt="country" />
            <div class="book__name">
              <i class="ri-map-pin-2-fill"></i>
              <span id="title">  Iron Flame</span>
            </div>
          </div>
          <div class="book__card">
            <img src="<?php echo get_template_directory_uri();  ?>/img/elin.png" alt="country" />
            <div class="book__name">
              <i class="ri-map-pin-2-fill"></i>
              <span id="title" >Golden Girl by Elin Hilder</span>
            </div>
          </div>
          <div class="book__card">
            <img src="<?php echo get_template_directory_uri();  ?>/img/maid.jpg" alt="country" />
            <div class="book__name">
              <i class="ri-map-pin-2-fill"></i>
              <span id="title">The Maid</span>
            </div>
          </div>
          
        </div>
      </div>
    </section>
     
    <div class="container my-5">
                <h2 class="text-center mb-4">Latest Books</h2>
                <div class="row">
                    <?php
                    
                    $args = [
                        'post_type' => 'post', 
                        'posts_per_page' => 6, 
                    ];
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                        </a>
                                    <?php endif; ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                        </h5>
                                        <p class="card-text">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-center">No Book found.</p>';
                    endif;
                    ?>
                </div>
            </div>

</body>
</html>