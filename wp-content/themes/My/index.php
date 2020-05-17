<?php get_header();?>

    <div id="top"  style="background-image: url(<?php the_field('background')?>); ">
      <div class="wrapper">
        <div class="top_text">
          <h3 class="wow fadeIn slow" data-wow-delay="0.2s">
            Качественный
          </h3>
          <h2 class="wow fadeIn slow" data-wow-delay="0.6s">Электромонтаж</h2>
          <div class="line wow fadeInLeft slow" data-wow-duration="1s"></div>
          <p class="wow fadeIn slow" data-wow-delay="1s">
            Монтаж и проектирование электропроводки и слаботочных систем в
            Кургане
          </p>
        </div>
        <div class="top__contact wow fadeIn" data-wow-delay="2.5s">
          <div class="top__line"></div>
          <h5>При заказе монтажа или проектирования</h5>
          <h6>первичный осмотр бесплатно скидка на услуги 25%</h6>
          <div class="form">
            <div class="name">
              <input type="text" name="name" required />
              <lable class="lable-name">
                <span class="content-name">Имя</span>
              </lable>
            </div>
            <div class="phone">
              <input type="text" id="phone" required />
              <lable class="lable-name">
                <span class="content-name">Телефон</span>
              </lable>
            </div>
          </div>
          <div class="CallMaster">заказать мастера</div>
        </div>
        <div id="fillForm" class="wow fadeIn slow" data-wow-delay="1.2s">
          заполнить форму
        </div>
        <div id="call" class="wow fadeIn slow" data-wow-delay="1.4s">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Call.png" alt="" />
        </div>
      </div>
    </div>

    <div id="services">
      <div class="wrapper">
        <h2 class="wow fadeInLeft slow"><?php the_field('H2')?></h2>
        <p class="wow fadeInRight slow" data-wow-delay="0.2s">Комплексное обслуживание слаботочных систем электрики</p>
        <div class="servform">
          <div class="Lform wow fadeInLeft slow" data-wow-delay="0.4s">
            <span><?php the_field('block_1_H')?></span>
            <ul>
              <li><?php the_field('block_1_li')?></li>
              <li><?php the_field('block_1_li_2')?></li>
              <li><?php the_field('block_1_li_3')?></li>
              <li><?php the_field('block_1_li_4')?></li>
              <li><?php the_field('block_1_li_5')?></li>
              <li><?php the_field('block_1_li_6')?></li>
            </ul>
          </div>
          <div class="Rform wow fadeInRight slow" data-wow-delay="0.6s">
            <span><?php the_field('block_2_H')?></span>
            <ul>
              <li><?php the_field('block_2_li_1')?></li>
              <li><?php the_field('block_2_li_2')?></li>
              <li><?php the_field('block_2_li_3')?></li>
              <li><?php the_field('block_2_li_4')?></li>
              <li><?php the_field('block_2_li_5')?></li>
              <li><?php the_field('block_2_li_6')?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="advantages" style="background-image: url(<?php the_field('advantages_bg')?>);">
      <div class="wrapper">
        <h2 class="wow fadeIn"><?php the_field('H2_adv')?></h2>
        <div class="advant">
          <div class="advant__item wow fadeInDown slow" data-wow-delay="0.2s">
            <img src="<?php the_field('icon-1')?>)" alt="" />
            <p><?php the_field('adv-1')?></p>
          </div>
          <div class="advant__item wow fadeInDown slow" data-wow-delay="0.4s">
            <img src="<?php the_field('icon-2')?>)" alt="" />
            <p><?php the_field('adv-2')?></p>
          </div>
          <div class="advant__item wow fadeInDown slow" data-wow-delay="0.5s">
            <img src="<?php the_field('icon-3')?>)" alt="" />
            <p><?php the_field('adv-3')?></p>
          </div>
          <div class="advant__item wow fadeInDown slow" data-wow-delay="0.8s">
            <img src="<?php the_field('icon-4')?>)" alt="" />
            <p><?php the_field('adv-4')?></p>
          </div>
          <div class="advant__item wow fadeInDown slow" data-wow-delay="1s">
            <img src="<?php the_field('icon-5')?>)" alt="" />
            <p><?php the_field('adv-5')?></p>
          </div>
          <div class="advant__item wow fadeInDown slow" data-wow-delay="1.2s">
            <img src="<?php the_field('icon-6')?>)" alt="" />
            <p><?php the_field('adv-6')?></p>
          </div>
        </div>
      </div>
    </div>

    <div id="Work">
      <div class="wrapper">
        <h2 class="wow slideInLeft"><?php the_field('H2_work')?></h2>
        <p class="wow slideInRight" data-wow-delay=".2s">
        <?php the_field('work_desc')?>
        </p>
        <div class="works">
          <p class="info wow fadeInDown" data-wow-delay=".4s"><?php the_field('p_1')?></p>
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/obl1.png" alt="" class="mobile wow fadeIn slow" data-wow-delay=".4s"/>
          <div class="center">
            <p class=" wow fadeInLeft" data-wow-delay=".6s"><?php the_field('p_2')?></p>
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/obl2.png" alt="" class="mobile wow fadeIn slown" data-wow-delay=".6s" />
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/com.png" alt="" class="CenterIMG wow fadeIn slow" data-wow-delay=".2s"/>
            <p class=" wow fadeInRight" data-wow-delay=".8s"><?php the_field('p_3')?></p>
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/obl3.png" alt="" class="mobile wow fadeIn slow" data-wow-delay=".8s" />
          </div>
          <p class="info wow fadeInUp" data-wow-delay="1s"><?php the_field('p_4')?></p>
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/obl4.png" alt="" class="mobile wow fadeIn slow" data-wow-delay="1s" />
        </div>
        <div class="Buttons">
          <div class="Btn1">оставить заявку</div>
          <div class="Btn2">заказать звонок</div>
        </div>
      </div>
    </div>

    <div id="company">
      <div class="wrapper">
        <h2 class="wow fadeInLeft slow">О компании</h2>
        <div class="company__info">
          <div class="info__items wow fadeInDown slow" data-wow-delay="0.4s">
            <h3>5 лет</h3>
            <p>минимальный стаж мастеров</p>
          </div>
          <div class="info__items wow fadeInDown slow" data-wow-delay="0.5s">
            <h3>600</h3>
            <p>выполненных проектов</p>
          </div>
          <div class="info__items wow fadeInDown slow" data-wow-delay="0.6s">
            <h3>1 год</h3>
            <p>гарантии на наши работы</p>
          </div>
          <div class="info__items wow fadeInDown slow" data-wow-delay="1s">
            <h3>50</h3>
            <p>компаний на обслуживании</p>
          </div>
          <div class="info__items wow fadeInDown slow" data-wow-delay="1.2s">
            <h3>85%</h3>
            <p>клиентов рекомендуют нас</p>
          </div>
        </div>
      </div>
    </div>

    <div id="project">
      <div class="project_wrap">
        <div class="mobile">
          <button type="button" class="prev_btn">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/m_prev.png" alt="" />
          </button>
          <div class="project_dots"></div>
          <button class="next_btn">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/m_next.png" alt="" />
          </button>
        </div>
        <div class="wrapper">
          <h2>Наши проекты</h2>
          <div class="project_slider">
          <?php 
            $posts = get_field('project');

            if($posts):
              foreach($posts as $post):
                setup_postdata( $post );
          ?>
            <div class="slider_items">
              <img src="<?php the_field('img_sl')?>" alt="" />
              <div class="info">
                <h3><?php the_field('H2_sl')?></h3>
                <p>
                <?php the_field('desc_sl')?>
                </p>
              </div>
            </div>
              <?php endforeach;?>
              <?php wp_reset_postdata(  );?>
              <?php endif;?>
          </div>
          <div class="slider__counter">
            <p class="currentSlide">01</p>
            <p class="count"></p>
          </div>
          <div class="slider__btn">
            <button type="button" class="prev_btn">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/prev.png" alt="" />
            </button>
            <button class="next_btn">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/next.png" alt="" />
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="reviews">
      <div class="rev_slider">
          <?php 
            $posts = get_field('req');

            if($posts):
              foreach($posts as $post):
                setup_postdata( $post );
          ?>
          
          <div class="rev_slide">
            <div class="test">
              <img src="<?php the_field('author_icon')?>" alt="" />
              <h2><?php the_field('author')?></h2>
              <p class="prof_desc">
                <?php the_field('prof_desc')?>
              </p>
              <p class="data"><?php the_field('date')?></p>
            </div>
          </div>

          <?php endforeach;?>
          <?php wp_reset_postdata(  );?>
          <?php endif;?>
     
          </div>
      <div class="Arrows">
        <button class="ArPrev"><img src="http://localhost/wp-content/themes/My/assets/img/arrowsPrev.png" alt="" /></button>
        <button class="ArNext"><img src="http://localhost/wp-content/themes/My/assets/img/arrowsNext.png" alt="" /></button>
      </div>
      <div class="prof_dots"></div>
      <div class="prof_btn">оставить отзыв</div>
    </div>
    </div>
    

    <?php get_footer(); ?>