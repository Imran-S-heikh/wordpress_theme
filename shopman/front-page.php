<?php get_header(); ?>



<main>
    <section class="section_hero">
        <div class="container-full">
            <div class="glide_container">
                <div class="glide--One">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="glide_content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slide_hero/slider-1.jpg" alt="">
                                    <div class="content">
                                        <h4 class="sub-title">This is the sub title</h4>
                                        <h2 class="glide-title">this is the main title</h2>
                                        <p class="para">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Ipsa odio vero, hic odit ut quas consequuntur iusto voluptate commodi
                                        </p>
                                        <button class="btn btn-lg btn-dark">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="glide_content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slide_hero/slider-2.jpg" alt="">
                                    <div class="content">
                                        <h4 class="sub-title">This is the sub title</h4>
                                        <h2 class="glide-title">this is the main title</h2>
                                        <p class="para">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Ipsa odio vero, hic odit ut quas consequuntur iusto voluptate commodi
                                        </p>
                                        <button class="btn btn-lg btn-dark">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="glide_content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/slide_hero/slider-3.jpg" alt="">
                                    <div class="content">
                                        <h4 class="sub-title">This is the sub title</h4>
                                        <h2 class="glide-title">this is the main title</h2>
                                        <p class="para">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Ipsa odio vero, hic odit ut quas consequuntur iusto voluptate commodi
                                        </p>
                                        <button  class="btn btn-lg btn-dark">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><span
                                class="material-icons arrow arrow-prev">arrow_right_alt</span>PREV
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            NEXT
                            <span class="material-icons arrow arrow-next">
                                arrow_right_alt
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section_feature">
        <h2 class="section_heading">Featured Product</h2>
        <div class="container">
            <div class="glide_container">
                <div class="glide--Two">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                          <?php
                            $query = new WC_Product_Query( array(
                                'limit' => 12,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'return' => 'ids',
                            ) );
                            $products = $query->get_products();
                            $slide = count($products) / 2;

                            for ($i=0; $i < $slide; $i++) {
                              ?>
                                <div class="glide__slide">
                                  <div class="glide_items">
                                      <div class="glide_item shop_card">
                                          <div class="image_container">
                                              <span class="condition">new</span>
                                              <?php echo wc_get_product($products[$i])->get_image(); ?>
                                              <div class="content">
                                                  <span class="material-icons">visibility</span>
                                                  <span class="item_link"><a href="<?php echo get_permalink($products[$i]); ?>">View </a></span>
                                              </div>
                                          </div>
                                          <div class="item_content">
                                              <h6 class="title"> <?php echo wc_get_product($products[$i])->get_name(); ?> </h6>
                                              <div class="div">
                                                  <span class="price--special">$<?php echo wc_get_product($products[$i])->get_sale_price(); ?></span>
                                                  <span class="price--regular">$<?php echo wc_get_product($products[$i])->get_regular_price(); ?></span>
                                              </div>
                                              <div class=" add_cart_button_container">
                                                <a
                                                  class="button add_to_cart_button product_type_simple
                                                  ajax_add_to_cart btn btn-lg btn-dark"
                                                  data-quantity="1"
                                                  data-product_id="<?php echo $products[$i] ;?>"
                                                  data-product_sku="<?php echo wc_get_product($products[$i])->get_sku(); ?>"
                                                  href="?add-to-cart=<?php echo $products[$i]; ?>"
                                                >ADD TO CART
                                              </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="glide_item shop_card">
                                          <div class="image_container">
                                              <span class="condition">new</span>
                                              <?php echo wc_get_product($products[count($products) - ($i+1)])->get_image(); ?>
                                              <div class="content">
                                                  <span class="material-icons">visibility</span>
                                                  <span class="item_link"><a href="<?php echo get_permalink($products[count($products) - ($i+1)]); ?>">View </a></span>
                                              </div>
                                          </div>
                                          <div class="item_content">
                                              <h6 class="title"> <?php echo wc_get_product($products[count($products) - ($i+1)])->get_name();  ?> </h6>
                                              <div class="div">
                                                  <span class="price--special">$<?php echo wc_get_product($products[count($products) - ($i+1)])->get_sale_price(); ?></span>
                                                  <span class="price--regular">$<?php echo wc_get_product($products[count($products) - ($i+1)])->get_regular_price(); ?></span>
                                              </div>
                                              <div class=" add_cart_button_container">
                                                <a
                                                  class="button add_to_cart_button product_type_simple
                                                  ajax_add_to_cart btn btn-lg btn-dark"
                                                  data-quantity="1"
                                                  data-product_id="<?php echo $products[count($products) - ($i+1)] ;?>"
                                                  data-product_sku="<?php echo wc_get_product($products[count($products) - ($i+1)])->get_sku(); ?>"
                                                  href="?add-to-cart=<?php echo $products[count($products) - ($i+1)]; ?>"
                                                >ADD TO CART
                                              </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              <?php
                            }

                          ?>

                        </div>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">PREV <span
                                class="material-icons arrow arrow-prev">
                                arrow_right_alt
                            </span></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">NEXT <span
                                class="material-icons arrow arrow-next">
                                arrow_right_alt
                            </span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_week-deal">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="week_deal-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img1_02.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="week_deal-content">
                        <div class="text_contant">
                            <h2 class="section_heading">Deal Of The Week</h2>
                            <p>
                                Lorem ipsum dolor si io? Doloribus dolore quae maxime natus.
                            </p>
                        </div>
                        <div class="timer d-flex justify-content-between">
                            <div class="timer--item">
                                <h6 class="day">322</h6>
                                <span class="day--text">Days</span>
                            </div>
                            <div class="timer--item">
                                <h6 class="hour">16</h6>
                                <span class="hour-text">Hours</span>
                            </div>
                            <div class="timer--item">
                                <h6 class="min">45</h6>
                                <span class="min--text">Mins</span>
                            </div>
                            <div class="timer--item">
                                <h6 class="second">12</h6>
                                <span class="second--text">Seconds</span>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-theme">SHOP NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_best-selling">
        <h2 class="section_heading">Best Selling Products</h2>
        <div class="glide_container">
            <div class="glide--Three">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                      <?php
                        $args = array(
                          'meta_key' => 'total_sales',
                          'orderby'  => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
                          'return'   => 'ids',
                          'posts_per_page' => 6,
                        );
                        $best_selling_products = wc_get_products( $args );

                        if ($best_selling_products) {
                          foreach ($best_selling_products as $product_id) {
                              $best_selling_product = wc_get_product($product_id);

                              ?>

                              <div class="glide__slide">
                                  <div class="glide_item shop_card">
                                      <div class="image_container">
                                          <span class="condition">new</span>
                                          <?php echo $best_selling_product->get_image(); ?>
                                          <a href="<?php echo get_permalink($best_selling_product->get_id()); ?>">
                                            <div class="content">
                                                <span class="material-icons">visibility</span>
                                                <span class="item_link"><a href="">View </a></span>
                                            </div>
                                          </a>
                                      </div>
                                      <div class="item_content">
                                          <h6 class="title"><?php echo $best_selling_product->get_name(); ?></h6>
                                          <div class="div">
                                            <span class="price--special"><?php echo '$'.$best_selling_product->get_regular_price() ?: $best_selling_product->get_regular_price(); ?></span>
                                              <span class="price--regular"><?php echo $best_selling_product->get_sale_price() ?: $best_selling_product->get_sale_price(); ?></span>
                                          </div>
                                          <div class=" add_cart_button_container">
                                            <a
                                              class="button add_to_cart_button product_type_simple
                                              ajax_add_to_cart btn btn-lg btn-dark"
                                              data-quantity="1"
                                              data-product_id="<?php echo $best_selling_product->get_id();?>"
                                              data-product_sku="<?php echo wc_get_product($best_selling_product)->get_sku(); ?>"
                                              href="?add-to-cart=<?php echo $best_selling_product->get_id();?>"
                                            >ADD TO CART
                                          </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <?php


                          }
                        }else {
                          echo '<h3>No Best Selling Product Found<h3>';
                        }wp_reset_postdata();?>
                        <!-- <div class="glide__slide">
                            <div class="glide_item shop_card">
                                <div class="image_container">
                                    <span class="condition">new</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/consectetuer-adipiscing-stand.jpg" alt="">
                                    <div class="content">
                                        <span class="material-icons">visibility</span>
                                        <span class="item_link"><a href="">View </a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h6 class="title">Produc name</h6>
                                    <div class="div">
                                        <span class="price--special">$100</span>
                                        <span class="price--regular">$120</span>
                                    </div>
                                    <button class="btn btn-lg btn-dark">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="glide_item shop_card">
                                <div class="image_container">
                                    <span class="condition">new</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/consectetuer-adipiscing-stand.jpg" alt="">
                                    <div class="content">
                                        <span class="material-icons">visibility</span>
                                        <span class="item_link"><a href="">View </a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h6 class="title">Produc name</h6>
                                    <div class="div">
                                        <span class="price--special">$100</span>
                                        <span class="price--regular">$120</span>
                                    </div>
                                    <button class="btn btn-lg btn-dark">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="glide_item shop_card">
                                <div class="image_container">
                                    <span class="condition">new</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/consectetuer-adipiscing-stand.jpg" alt="">
                                    <div class="content">
                                        <span class="material-icons">visibility</span>
                                        <span class="item_link"><a href="">View </a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h6 class="title">Produc name</h6>
                                    <div class="div">
                                        <span class="price--special">$100</span>
                                        <span class="price--regular">$120</span>
                                    </div>
                                    <button class="btn btn-lg btn-dark">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="glide_item shop_card">
                                <div class="image_container">
                                    <span class="condition">new</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/consectetuer-adipiscing-stand.jpg" alt="">
                                    <div class="content">
                                        <span class="material-icons">visibility</span>
                                        <span class="item_link"><a href="">View </a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h6 class="title">Produc name</h6>
                                    <div class="div">
                                        <span class="price--special">$100</span>
                                        <span class="price--regular">$120</span>
                                    </div>
                                    <button class="btn btn-lg btn-dark">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="glide_item shop_card">
                                <div class="image_container">
                                    <span class="condition">new</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/consectetuer-adipiscing-stand.jpg" alt="">
                                    <div class="content">
                                        <span class="material-icons">visibility</span>
                                        <span class="item_link"><a href="">View </a></span>
                                    </div>
                                </div>
                                <div class="item_content">
                                    <h6 class="title">Produc name</h6>
                                    <div class="div">
                                        <span class="price--special">$100</span>
                                        <span class="price--regular">$120</span>
                                    </div>
                                    <button class="btn btn-lg btn-dark">ADD TO CART</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <span class="material-icons arrow arrow-prev">arrow_right_alt</span> PREV
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">NEXT
                        <span class="material-icons arrow arrow-next">arrow_right_alt</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_testimonial">
        <h2 class="section_heading">Testimonials</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="image-content">
                        <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/user1.jpg" alt="">
                            <h4 class="name">John Smith</h4>
                            <span class="title">Ceo Founder Lorem</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="text-content">
                        <p>
                            <span class="material-icons testimonial--arrow">
                                double_arrow
                            </span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae iste porro non nostrum,
                            repellat delectus neque fugiat! Quia pariatur odio aspernatur aut! Nisi consectetur
                            ipsum,
                            aut praesentium nulla facilis error?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php $latest_posts = get_posts(array('numberposts' => 2 )); ?>
    <?php if ($latest_posts): ?>
      <section class="section_blog">
        <h2 class="section_heading">Recent Blog</h2>
        <div class="container">
          <div class="row">
            <?php
            foreach ($latest_posts as $post) {
                setup_postdata($post);
              ?>
              <div class="col-12 col-md-6">
                <div class="post">
                  <div class="row no-gutters">
                    <div class="col-12 col-sm-6">
                      <div class="post--left-wraper">
                        <div class="post--left">
                          <h6 class="post--date"><span class="icon"></span><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></h6>
                          <div class="post--title"><?php the_title(); ?></div>
                          <p class="post--content"><?php the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="post--right">
                        <div class="post--thumbnail">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-theme d-inline-block">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <!-- <section class="section section_location">
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-6">
                    <h4 class="section_heading">Find Us</h4>
                    <div class="address">
                        <p><span>Address</span></p>
                        <p><span>Phone</span></p>
                        <p><span>Mail</span></p>
                    </div>
                    <div class="social_icons">

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="map_container">

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="section_newslatter">
        <div class="container">
            <div class="sponsors"></div>
            <div class="newsletter">
                <div class="text_content"></div>
                <div class="input_field"></div>
                <button class="btn btn-lg btn-red">Subscribe</button>
            </div>
        </div>
    </section> -->
</main>



<?php get_footer(); ?>
