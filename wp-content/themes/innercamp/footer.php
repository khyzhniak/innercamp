<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innercamp
 */

?>

<footer main>
  <div class="container">
    <div class="row">
      <div class="col m6 s12 l3 xl2">
        <div class="box__">

          <h3 class="title_">Experiences</h3>

          <?php
          $arg_exper = array(
            'menu' => 'Experiences',
          );
          ?>
          <?php wp_nav_menu($arg_exper); ?>

        </div>
      </div>
      <div class="col m6 s12 l3 xl2">
        <div class="box__">
          <h3 class="title_">About us</h3>
          <?php
          $arg_about = array(
            'menu' => 'about-us',
          );
          ?>
          <?php wp_nav_menu($arg_about); ?>
        </div>
      </div>
      <div class="col m6 s12 l3 xl2">
        <div class="box__">
          <h3 class="title_">Partnership</h3>
          <?php
          $arg_partnership = array(
            'menu' => 'partnership',
          );
          ?>
          <?php wp_nav_menu($arg_partnership); ?>
        </div>
      </div>
      <div class="col m6 s12 l3 xl2">
        <div class="box__">
          <h3 class="title_">Contacts</h3>
          <ul>
            <li><a class='call' data-fancybox="" data-src="#modal-2" href="javascript:;">Request a callback</a></li>
            <li><a class='mail' href="javascript:;">contact@innercamp.com </a></li>
            <li><a class='address' href="javascript:;">Marbella | Bali | Tallin</a></li>
          </ul>
        </div>
      </div>
      <div class="col m12 s12 l2 xl2">
        <div class="box__">
          <h3 class="title_">Legal</h3>

          <?php
          $arg_legal = array(
            'menu' => 'legal',
          );
          ?>
          <?php wp_nav_menu($arg_legal); ?>
        </div>
      </div>
      <div class="col m12 s12 l12 xl4">
        <h3 class="info">Join thousands of changemakers </h3>
        <p class="sub_info">Receive a 50€ discount when you sign up</p>


        <!-- Subscription Form -->
        <!-- Subscription Form -->
        <style>.sp-force-hide {
                /*display: none;*/
            }

            .sp-form[sp-id="220727"] {
                display: block;
                background: rgba(0, 0, 0, 0);
                padding: 5px;
                width: 100%;
                max-width: 100%;
                border-radius: 0px;
                font-family: inherit;
                background-repeat: no-repeat;
                background-position: center;
                background-size: auto;
            }

            .sp-form[sp-id="220727"] input[type="checkbox"] {
                display: inline-block;
                opacity: 1;
                visibility: visible;
            }

            .sp-form[sp-id="220727"] .sp-form-fields-wrapper {
                margin: 0 auto;
                width: 100%;
                display: flex;
                flex-flow: column;
            }

            .sp-form .sp-field input[type=checkbox] + span, .sp-form .sp-field input[type=radio] + span {
                color: #fff;
            }

            .sp-form .sp-field {
                padding: 0;
            }

            .sp-element-container {
                display: flex;
                flex-flow: wrap;
            }

            .sp-form-horizontal .sp-element-container.sp-lg .sp-field.sp-button-container {
                width: 140px;
                display: flex;
                align-items: flex-end;
                justify-content: flex-end;
                min-height: 40px;
            }

            .sp-form-horizontal .sp-element-container.sp-lg .sp-field {
                width: calc(100% - 140px);
                border-bottom: 1px solid #fff;
                min-height: unset;
            }

            .sp-form-horizontal .sp-element-container.sp-lg .sp-field:last-child {
                width: 100%;
                display: flex;
                border-bottom: none;
            }

            .sp-form-horizontal .sp-element-container.sp-lg .sp-field:last-child label {
                display: flex;
                gap: 10px;
                font-family: var(--o);
                line-height: 1.2em;
                margin-top: 20px;
            }

            .sp-form .sp-lg .sp-field .sp-button:hover {
                color: var(--orange-color-1);
            }

            .sp-field-nolabel .sp-field > .sp-control-label > strong {
                display: none;
            }

            .sp-form .sp-lg .sp-field .sp-button {
                background: rgba(0, 0, 0, 0);
                color: #fff;
                font: 700 18px/1.2em var(--o);
                height: 40px;
                width: auto;
                padding: 0;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                position: relative;
                top: 0;
                right: 0;
                cursor: pointer;
            }

            .sp-form[sp-id="220727"] .sp-form-control {
                background: transparent;
                border-color: transparent;
                border-style: solid;
                border-width: 1px;
                font-size: 15px;
                padding-left: 8.75px;
                padding-right: 8.75px;
                border-radius: 0;
                height: 35px;
                width: 100%;
                border-left: none;
                border-right: none;
                border-top: none;
                border-bottom: none;
                color: #fff;
                margin-bottom: 0;
            }

            .sp-form[sp-id="220727"] .sp-field label {
                color: #444444;
                font-size: 13px;
                font-style: normal;
                font-weight: bold;
                display: none;
            }

            .sp-form[sp-id="220727"] .sp-button-messengers {
                border-radius: 4px;
            }

            .sp-form[sp-id="220727"] .sp-button {
                border-radius: 4px;
                background-color: ;
                color: #eeeeee;
                width: auto;
                font-weight: 700;
                font-style: normal;
                font-family: inherit;
                box-shadow: none;
                background: linear-gradient(to top, #000000, #000000);
            }

            .sp-form[sp-id="220727"] .sp-button-container {
                text-align: left;
                width: 140px;
            }

            .sp-form-horizontal .sp-element-container .sp-field {
                flex: unset;
            }
        </style>
        <div class="sp-form-outer sp-force-hide">
          <div id="sp-form-220727" sp-id="220727"
               sp-hash="c0fbf0fdbaa366f2f9cfcca5c174fbae47115cc08f69f1e03e37515d065cc458" sp-lang="en"
               class="sp-form sp-form-regular sp-form-embed sp-form-horizontal sp-form-full-width"
               sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22submitRedirectUrl%22%3A%22%22%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3A%22Subscription_form_test_list%22%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3Anull%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%2C%22utmEnable%22%3Afalse%7D">
            <div class="sp-form-fields-wrapper show-grid">
              <div class="sp-message">
                <div></div>
              </div>
              <form novalidate="" class="sp-element-container sp-field-nolabel sp-lg">
                <div class="sp-field " sp-id="sp-bd38ecea-8677-41ca-a2d3-ece1338c07c8"><label
                      class="sp-control-label"><span>Email</span><strong>*</strong></label><input type="email"
                                                                                                  sp-type="email"
                                                                                                  name="sform[email]"
                                                                                                  class="sp-form-control "
                                                                                                  placeholder="Your email"
                                                                                                  sp-tips="%7B%22required%22%3A%22Required%20field%22%2C%22wrong%22%3A%22Wrong%20email%22%7D"
                                                                                                  autocomplete="on"
                                                                                                  required="required">
                </div>
                <div class="sp-field sp-button-container " sp-id="sp-bedcc6f6-740a-4134-b38a-5a29a82c6bfc">
                  <button id="sp-bedcc6f6-740a-4134-b38a-5a29a82c6bfc" class="sp-button">Subscribe</button>
                </div>
                <div class="sp-field " sp-id="sp-6ba19d46-cb1f-4a65-8fe1-5f551cf85704">
                  <div class="sp-checkbox-option"><label><input checked type="checkbox" sp-type="checkbox"
                                                                name="sform[Z2RwclRlcm1z]" value="yes"
                                                                sp-tips="%7B%22required%22%3A%22Required%20field%22%7D"
                                                                class=" " required="required"><span>Yes, I would like to subscribe to the InnerCamp newsletter. I agree to let InnerCamp process my personal data in order to send me personalised marketing material, in accordance with the privacy notice. I confirm that I am 18 years old or older.</span>&nbsp;<span><strong>*</strong></span></label>
                  </div>
                </div>
              </form>
              <div class="sp-link-wrapper sp-brandname__left "></div>
            </div>
          </div>
        </div>
        <script type="text/javascript" async="async"
                src="//web.webformscr.com/apps/fc3/build/default-handler.js?1672731354857"></script>
        <!--        --><?php //echo do_shortcode('[contact-form-7 id="62822" title="Subscribe"]'); ?>
        <?php if (0) { ?>
          <form method="POST" action="javascript:void(null);">
            <!-- Hidden Required Fields-->
            <div class="form_input"><span class="field">
                  <input class="mail" type="email" name="email" required="" value="" placeholder="Your email"></span>
            </div>
            <div class="form_input"><span class="field">
                  <input type="checkbox" name="scales" required="" value="" id="scales">
                  <label for="scales">Yes, I would like to subscribe to the InnerCamp newsletter. I agree to let InnerCamp process my personal data in order to send me personalised marketing material, in accordance with the privacy notice. I confirm that I am 18 years old or older.</label></span>
            </div>
            <button class="green" type="submit" name="send">Subscribe</button>
          </form>
        <?php } ?>
      </div>
      <div class="col m12 s12 l7 xl5"><a class="logo__footer" href="/"><img
              src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>

        <ul class="soseal">
          <?php while (have_rows('fotter_social_network', 'option')) : the_row(); ?>

            <?php if (get_row_layout() == 'instagram_1') : ?>
              <li>
                <a target="_blank" class="instagram icon-g-67" href="<?php the_sub_field('instagram'); ?>">
                  <svg width="23" height="23" viewbox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.8331 2.37598H6.86322C4.38625 2.37598 2.37827 4.38396 2.37827 6.86093V15.8308C2.37827 18.3078 4.38625 20.3158 6.86322 20.3158H15.8331C18.3101 20.3158 20.3181 18.3078 20.3181 15.8308V6.86093C20.3181 4.38396 18.3101 2.37598 15.8331 2.37598Z"
                        fill="white" stroke="white" stroke-width="2.04514" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M14.9363 10.7819C15.047 11.5284 14.9195 12.2908 14.5719 12.9607C14.2243 13.6306 13.6744 14.1738 13.0002 14.5131C12.3261 14.8524 11.5622 14.9705 10.8171 14.8506C10.072 14.7307 9.3837 14.3789 8.85006 13.8453C8.31642 13.3116 7.96463 12.6233 7.84474 11.8782C7.72484 11.1331 7.84294 10.3692 8.18224 9.69507C8.52153 9.02096 9.06475 8.47101 9.73462 8.12342C10.4045 7.77584 11.1669 7.64833 11.9134 7.75903C12.6749 7.87195 13.3799 8.22678 13.9242 8.77111C14.4685 9.31544 14.8234 10.0204 14.9363 10.7819Z"
                        stroke="#D19D50" stroke-width="2.04514" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="15.8794" cy="6.81506" r="0.56652" fill="#D19D50"></circle>
                  </svg>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_row_layout() == 'facebook_1') : ?>
              <li>
                <a target="_blank" class="facebook-footer " href="<?php the_sub_field('facebook'); ?>">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.2404 0.742188H1.75897C1.48884 0.742188 1.22977 0.849495 1.03877 1.0405C0.847756 1.23151 0.740448 1.49058 0.740448 1.76071V18.2422C0.740448 18.3759 0.766793 18.5084 0.817978 18.632C0.869164 18.7555 0.944187 18.8678 1.03877 18.9624C1.13334 19.057 1.24562 19.132 1.3692 19.1832C1.49277 19.2344 1.62521 19.2607 1.75897 19.2607H10.6293V12.0848H8.22193V9.307H10.6293V7.22367C10.5795 6.73455 10.6372 6.24045 10.7985 5.77602C10.9598 5.31158 11.2208 4.88806 11.5631 4.53516C11.9054 4.18226 12.3208 3.90852 12.7801 3.73315C13.2394 3.55778 13.7315 3.48501 14.2219 3.51997C14.9426 3.51553 15.6629 3.55263 16.3793 3.63108V6.13108H14.9071C13.7404 6.13108 13.5182 6.68663 13.5182 7.49219V9.27922H16.296L15.9349 12.057H13.5182V19.2607H18.2404C18.3742 19.2607 18.5066 19.2344 18.6302 19.1832C18.7538 19.132 18.8661 19.057 18.9606 18.9624C19.0552 18.8678 19.1302 18.7555 19.1814 18.632C19.2326 18.5084 19.259 18.3759 19.259 18.2422V1.76071C19.259 1.62695 19.2326 1.49451 19.1814 1.37094C19.1302 1.24736 19.0552 1.13508 18.9606 1.0405C18.8661 0.945927 18.7538 0.870903 18.6302 0.819718C18.5066 0.768532 18.3742 0.742187 18.2404 0.742188Z"
                        fill="white"></path>
                  </svg>
                </a>
              </li>
            <?php endif; ?>

            <?php if (get_row_layout() == 'youtube_1') : ?>
              <li>
                <a target="_blank" class="youtube" href="<?php the_sub_field('youtube'); ?>">
                  <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.9997 22.1021C11.3376 22.1021 6.59227 21.8707 4.62467 21.4077C3.81449 21.1762 3.23578 20.5975 3.0043 19.7873C2.65708 18.5142 2.4256 15.8521 2.4256 14.0003C2.4256 12.1484 2.65708 9.4864 3.0043 8.21325C3.23578 7.40307 3.81449 6.82436 4.62467 6.59288C6.59227 6.12992 11.3376 5.89844 13.9997 5.89844C16.6617 5.89844 21.4071 6.12992 23.3747 6.59288C24.1849 6.82436 24.7636 7.40307 24.995 8.21325C25.3423 9.4864 25.5737 12.1484 25.5737 14.0003C25.5737 15.8521 25.3423 18.5142 24.995 19.7873C24.7636 20.5975 24.1849 21.1762 23.3747 21.4077C21.4071 21.8707 16.6617 22.1021 13.9997 22.1021Z"
                        fill="white" stroke="white" stroke-width="2.58333" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M11.6854 17.4723L17.4725 14.0001L11.6854 10.5278V17.4723Z" fill="#D19D50"></path>
                  </svg>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_row_layout() == 'Spotify_1') : ?>
              <li>
                <a target="_blank" class="youtube" href="<?php the_sub_field('spotify'); ?>">
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.7111 9.30846C13.3265 7.29841 7.74368 7.11363 4.51265 8.09425C3.99366 8.25167 3.44505 7.95883 3.28792 7.43994C3.13068 6.92076 3.42323 6.37243 3.94241 6.21473C7.65152 5.08891 13.8171 5.30633 17.7135 7.61927C18.1803 7.89639 18.3332 8.49908 18.0566 8.96494C17.7798 9.43164 17.1765 9.58558 16.711 9.30846M16.6002 12.2855C16.3627 12.6708 15.8589 12.7917 15.4741 12.5551C12.6525 10.8207 8.34965 10.3181 5.01133 11.3315C4.57848 11.4622 4.12118 11.2183 3.98971 10.7861C3.92704 10.5783 3.94931 10.3542 4.05164 10.1628C4.15397 9.97142 4.32801 9.82844 4.5356 9.76519C8.34909 8.60788 13.09 9.16834 16.3309 11.16C16.7157 11.397 16.8368 11.9011 16.6002 12.2855ZM15.3154 15.1446C15.2706 15.218 15.2119 15.282 15.1424 15.3327C15.073 15.3834 14.9942 15.4199 14.9106 15.4401C14.827 15.4604 14.7403 15.4639 14.6553 15.4506C14.5704 15.4372 14.4889 15.4073 14.4155 15.3624C11.9499 13.8554 8.84636 13.5151 5.19142 14.35C5.10767 14.3691 5.02097 14.3716 4.93627 14.3572C4.85157 14.3429 4.77053 14.312 4.69778 14.2663C4.62503 14.2206 4.56199 14.161 4.51227 14.0909C4.46255 14.0209 4.42711 13.9417 4.40799 13.858C4.38874 13.7742 4.3862 13.6874 4.40052 13.6027C4.41484 13.5179 4.44574 13.4368 4.49145 13.364C4.53716 13.2912 4.59678 13.2282 4.6669 13.1784C4.73703 13.1287 4.81627 13.0933 4.90009 13.0743C8.89977 12.16 12.3306 12.5535 15.0982 14.2447C15.1716 14.2895 15.2354 14.3483 15.286 14.4178C15.3367 14.4873 15.3731 14.566 15.3933 14.6496C15.4134 14.7332 15.417 14.8199 15.4036 14.9048C15.3903 14.9898 15.3603 15.0712 15.3155 15.1446M10.4998 0C4.70111 0 0 4.70092 0 10.4998C0 16.2993 4.70111 21 10.4999 21C16.299 21 21 16.2993 21 10.4998C21 4.70101 16.2991 0 10.4999 0"
                        fill="white"/>
                  </svg>
                </a>
              </li>
            <?php endif; ?>

          <?php endwhile; ?>

        </ul>
      </div>
      <div class="col m12 s12 l5 xl5">
        <div class="app__">
          <p>Download The App</p>
          <?php while (have_rows('fotter_social_network', 'option')) : the_row(); ?>

            <?php if (get_row_layout() == 'ios_1') : ?>
              <a target="_blank" class="ios" href="<?php the_sub_field('ios'); ?>"><img
                    src="<?= get_template_directory_uri(); ?>/img/apl.svg" alt="ios"></a>
            <?php endif; ?>
            <?php if (get_row_layout() == 'android_1') : ?>
              <a target="_blank" class="goo" href="<?php the_sub_field('android'); ?>"><img
                    src="<?= get_template_directory_uri(); ?>/img/goo.svg" alt="goo"></a>
            <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col m9 s12 l6 xl6">
        <?php wp_nav_menu($arg_legal); ?>
      </div>
      <div class="col m3 s12 l6 xl6">
        <p class="copy">© <?php echo date('Y'); ?> InnerCamp</p>
      </div>
    </div>
  </div>
</footer>


<a class="bot_modal none" data-fancybox="" data-src="#modal-2" href="javascript:;">Open Modal 2</a>
<!-- //// MODAL ////-->
<div class="modal__style modal" id="modal-2" style="display: none;">
  <div class="content_modal">
    <!-- Calendly inline widget begin -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/d/dpg-9q6-b4v/call-with-innercamp"
         style="min-width:550px;height:850px;"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <!-- Calendly inline widget end -->
  </div>
</div>


<?php if (0) { ?>
  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <a href="<?php echo esc_url(__('https://wordpress.org/', 'innercamp')); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf(esc_html__('Proudly powered by %s', 'innercamp'), 'WordPress');
        ?>
      </a>
      <span class="sep"> | </span>
      <?php
      /* translators: 1: Theme name, 2: Theme author. */
      printf(esc_html__('Theme: %1$s by %2$s.', 'innercamp'), 'innercamp', '<a href="http://underscores.me/">Underscores.me</a>');
      ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
  </div><!-- #page -->
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
