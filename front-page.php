
  <?php
    get_header();
  ?>
    <section class="full-width-content container">
      <h1 class="full-width-content__heading">
        <?php
          $value = get_field("first_heading");
          if($value) {
              echo $value;
          }
        ?>
      </h1>
      <p class="full-width-content__body">
        <?php
          $value = get_field("first_section_paragraph");
          if($value) {
              echo $value;
          }
        ?>
      </p>
      <a href="
        <?php
          $value = get_field("first_section_button_link");
          if($value) {
              echo $value;
          }
        ?>
      ">
        <span class="button button--light">
          <?php
            $value = get_field("first_section_button_text");
            if($value) {
                echo $value;
            }
          ?>
        </span>
      </a>
    </section>
    <section class="content-with-image">
      <div class="content-with-image__container">
        <div class="content-with-image__content">
          <h2>
            <?php
              $value = get_field("content_with_image_heading");
              if($value) {
                  echo $value;
              }
            ?>
          </h2>
          <p>
            <?php
                $value = get_field("content_with_image_paragraph");
                if($value) {
                    echo $value;
                }
            ?>
          </p>
          <a href="
            <?php
              $value = get_field("content_with_image_button_link");
              if($value) {
                  echo $value;
              }
            ?>
          ">
            <span class="button button--dark">
              <?php
                $value = get_field("content_with_image_button_text");
                if($value) {
                    echo $value;
                }
              ?>
            </span>
          </a>
        </div>
        <div class="content-with-image__image content-with-image__image--desktop">
          <figure>
            <img src="
              <?php
                $value = get_field("content_with_image_image");
                if($value) {
                    echo $value;
                }
              ?>" 
              alt="
                <?php
                $value = get_field("content_with_image_image_alt_text");
                if($value) {
                    echo $value;
                }
              ?>"
            >
          </figure>
        </div>
      </div>
      <div class="content-with-image__image content-with-image__image--mobile">
        <figure>
          <img src="              
            <?php
              $value = get_field("content_with_image_image");
              if($value) {
                  echo $value;
              }
            ?>"  
            alt="
            <?php
              $value = get_field("content_with_image_image_alt_text");
              if($value) {
                  echo $value;
              }
            ?>"
          >
        </figure>
      </div>
    </section>
    <section class="queens container">
        <h2 class="queens_h1">
          <?php
            $value = get_field("our_queens_heading");
            if($value) {
                echo $value;
            }
          ?>
        </h2>
      <section class="queen-boxes">
        <div class="queen-box">
          <h3 class="queen-box__heading">
            <?php
              $value = get_field("queen_one_name");
              if($value) {
                  echo $value;
              }
            ?>
          </h3>
          <figure class="queen-box__image">
            <img src="
              <?php
                $value = get_field("queen_one_image");
                if($value) {
                    echo $value;
                }
              ?>"
            alt="
            <?php
              $value = get_field("queen_one_image");
              if($value) {
                  echo $value;
              }
              ?>">
          </figure>
          <span class="button button--light">MEET 
          <?php
              $value = get_field("queen_one_name");
              if($value) {
                  echo $value;
              }
            ?>
          </span>
        </div>
        <div class="queen-box">
          <h3 class="queen-box__heading">
          <?php
              $value = get_field("queen_two_name");
              if($value) {
                  echo $value;
              }
          ?>
          </h3>
          <figure class="queen-box__image">
            <img src="
              <?php
                $value = get_field("queen_two_image");
                if($value) {
                    echo $value;
                }
              ?>"
            alt="
            <?php
              $value = get_field("queen_two_image");
              if($value) {
                  echo $value;
              }
              ?>">
          </figure>
          <span class="button button--light">MEET 
          <?php
              $value = get_field("queen_two_name");
              if($value) {
                  echo $value;
              }
          ?>
          </span>
        </div>
        <div class="queen-box">
          <h3 class="queen-box__heading">
          <?php
              $value = get_field("queen_three_name");
              if($value) {
                  echo $value;
              }
          ?>
          </h3>
          <figure class="queen-box__image">
            <img src="
              <?php
                $value = get_field("queen_three_image");
                if($value) {
                    echo $value;
                }
              ?>"
            alt="
            <?php
              $value = get_field("queen_three_image");
              if($value) {
                  echo $value;
              }
              ?>">
          </figure>
          <span class="button button--light">MEET 
          <?php
              $value = get_field("queen_three_name");
              if($value) {
                  echo $value;
              }
          ?>
          </span>
        </div>
      </section>    
    </section>
    <section class="testimonial-banner">
      <figure class="testimonial-banner__image testimonial-banner__image--mobile">
        <img src="
        <?php
            $value = get_field("home_testimonial_image");
            if($value) {
                echo $value;
            }
        ?>" 
          alt="
          <?php
            $value = get_field("testimonial_image_alt_text");
            if($value) {
                echo $value;
            }
          ?>">
      </figure>
      <div class="testimonial-banner__container">
        <figure class="testimonial-banner__image testimonial-banner__image--desktop">
          <img src="
          <?php
              $value = get_field("home_testimonial_image");
              if($value) {
                  echo $value;
              }
          ?>" 
            alt="
            <?php
              $value = get_field("testimonial_image_alt_text");
              if($value) {
                  echo $value;
              }
            ?>">
        </figure>
        <div class="testimonial-banner__quote">
          <svg width="56px" height="56px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/></g></svg>
          <h5>
            <?php
              $value = get_field("home_testimonial");
              if($value) {
                  echo $value;
              }
            ?>
          </h5>
          <p>
            <?php
                $value = get_field("home_testimonial_author");
                if($value) {
                    echo $value;
                }
            ?>
          </p>
        </div>
    </div>
    </section>
  </main>
  <section class="contact-us container">
    <h2 class="contact-us__heading h1">
      Contact Us
    </h2>
    <div class="contact-us__form">
      <?php echo apply_shortcodes( '[contact-form-7 id="93" title="Site Contact"]' ); ?>
    </div>
  </section>
  <?php
    get_footer();
  ?>