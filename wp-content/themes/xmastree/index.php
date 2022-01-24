<?php get_header() ?>
  <section class="hero">
    <div class="container">
      <h1 class="hero-title"><?php the_field('main_title')?></h1>
      <p class="hero-description"><?php the_field('main_subtitle') ?></p>

      <!-- Слайдер с цветами -->
      <div class="swiper-container trees-slider">
        <!-- Обертка слайдов -->
        <div class="swiper-wrapper">
          <!-- Слайды -->
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-1.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-2.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-3.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-4.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-5.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-6.png" alt="tree" class="slide-image">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-3.png" alt="tree" class="slide-image">
          </div>
        </div>

        <!-- Стрелки слайдера -->
        <div class="swiper-button-prev swiper-button-prev-1"></div>
        <div class="swiper-button-next swiper-button-next-1"></div>
      </div>
      <!-- ./swiper-container -->

      <span class="hero-cta">Закажите ёлку со скидкой 10%</span>

      <a data-fancybox data-src="#alert" href="javascript:;" class="button">Заказать ёлку</a>
      
    </div>
    <!-- /.container -->
  </section>

  <section class="reviews">
    <div class="container">
      <h2 class="section-title">Мы доставляем только лучшие ёлки</h2>

      <!-- Слайдер с отзывами -->
      <div class="swiper-container reviews-slider">
        <!-- обертка слайдов -->
        <div class="swiper-wrapper">
          <!-- слайды -->
          <?php
          global $post;

          $myposts = get_posts([ 
            'numberposts' => 5,
            'post_type'   => 'reviews',
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
              <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
                <div class="review-image d-flex align-items-center justify-content-center flex-column">
                  <img src="<?php the_field('review_image') ?>" alt="review">
                  <span class="review-name"><?php the_title() ?></span> 
                  <span class="review-city"><?php the_field('review_city') ?></span>
                </div>
            <div class="review-text">
              <p class="review">
                <?php the_content() ?>
              </p>
              <!-- <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии ёлки</a> -->
            </div>
          </div>
          <!-- ./swiper-wrapper -->      
              <?php 
            }
          } else {
            
          }
          wp_reset_postdata(); 
          ?>        
        </div>
        <!-- ./swiper-wrapper -->

        <!-- If we need navigation buttons -->
        <a class="swiper-button-prev swiper-button-prev-2"></a>
        <a class="swiper-button-next swiper-button-next-2"></a>

      </div>
      <!-- ./swiper-container -->

    </div>
    <!-- /.container -->
  </section>

  <section class="advantages">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/advantages/advantages-1.png" alt="Доставляем ёлки прямо до дверей квартиры" class="advantages-image">
          </div>
          <!-- /.advantage-wrapper -->
          <h3 class="advantages-title">Доставляем ёлки прямо до дверей квартиры</h3>
        </div>
        <!-- /.col -->
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/advantages/advantages-2.png" alt="Игрушки выполнены качественно и ваш кот их не разобьет" class="advantages-image">
          </div>
          <!-- /.advantages-wrapper -->
          <h3 class="advantages-title">Игрушки выполнены качественно и ваш кот их не разобьет</h3>
        </div>
        <!-- /.col -->
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="advantages-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/advantages/advantages-3.png" alt="Мы являемся первыми на рынке и всегда рады помочь с выбором ёлки" class="advantages-image">
          </div>
          <!-- /.advantages-wrapper -->
          <h3 class="advantages-title">Мы являемся первыми на рынке и всегда рады помочь с выбором ёлки</h3>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  
  <section class="goods">
    <div class="container">
      <h2 class="section-title">Наряди свою ёлку <span>прямо сейчас!</span></h2>
      <p class="section-description">Выберите желаемые игрушки и наши ребята красиво оформят и доставят ёлку прямо до дверей вашей квартиры!</p>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/toy-1.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="toy-white"></label>
              <input class="color-input" type="radio" name="color" id="toy-white" value="white">
              
              <label class="color-label yellow" for="toy-yellow"></label>
              <input class="color-input" type="radio" name="color" id="toy-yellow" value="yellow">

              <label class="color-label green" for="toy-green"></label>
              <input class="color-input" type="radio" name="color" id="toy-green" value="green">

              <label class="color-label red" for="toy-red"></label>
              <input class="color-input" type="radio" name="color" id="toy-red" value="red">

              <label class="color-label blue" for="toy-blue"></label>
              <input class="color-input" type="radio" name="color" id="toy-blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-1.png" alt="tree" class="card-image">
            <h3 class="card-title">Живая ёлка</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/toy-2.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-3.png" alt="tree" class="card-image">
            <h3 class="card-title">Искусственная ёлка</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/toy-4.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/tree-5.png" alt="tree" class="card-image">
            <h3 class="card-title">Ёлочка в горшке</h3>
            <span class="card-label">Выберите цвет игрушек:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/toy-2.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <img src="<?php echo get_template_directory_uri() ?>/img/trees/toy-3.png" alt="toy" class="card-image">
            <h3 class="card-title">Ёлочная игрушка</h3>
            <span class="card-label">Выберите цвет:</span>

            <div class="colors d-flex align-items-center justify-content-between">
              <label class="color-label white" for="white"></label>
              <input class="color-input" type="radio" name="color" id="white" value="white">
              
              <label class="color-label yellow" for="yellow"></label>
              <input class="color-input" type="radio" name="color" id="yellow" value="yellow">

              <label class="color-label green" for="green"></label>
              <input class="color-input" type="radio" name="color" id="green" value="green">

              <label class="color-label red" for="red"></label>
              <input class="color-input" type="radio" name="color" id="red" value="red">

              <label class="color-label blue" for="blue"></label>
              <input class="color-input" type="radio" name="color" id="blue" value="blue">
            </div>
            <!-- /.colors -->

            <span class="card-label">Количество:</span>

            <div class="counter-group d-flex justify-content-center align-items-center">
              <button class="counter-button counter-button-minus">-</button>
              <input type="text" class="counter-input" value="1">
              <button class="counter-button counter-button-plus">+</button>
            </div>
            <!-- /.counter-group -->

            <button class="button card-button">Заказать</button>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-3 col-md-6 -->
      </div>
      <!-- /.row -->

      <!-- <a href="#" class="more">Все товары</a> -->
      
    </div>
    <!-- /.container -->
  </section>

  <section class="offer">
    <div class="container">
      <h2 class="section-title offer-title">Остались вопросы?</h2>
      <a data-fancybox data-src="#modal" href="javascript:;" class="offer-link">Закажите звонок нашего специалиста!</a>
      <span class="offer-label">или позвоните по телефону</span>
      <a href="tel:+78006548745" class="offer-phone">8 (800) 654-87-45</a>
    </div>
    <!-- /.container -->
  </section>
<?php get_footer() ?>