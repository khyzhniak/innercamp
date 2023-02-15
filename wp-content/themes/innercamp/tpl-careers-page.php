<?php
/**
 * Template Name: Сareers Page* 
 */
get_header(); ?>


<section class="careers__1" style="background: url('<?= get_template_directory_uri(); ?>/img/careers/careers-1.webp') no-repeat top/cover">
  <div class="container">
    <div class="row">
      <div class="content">
        <p class="sub">careers</p>
        <h1 class="title">InnerCamp Careers</h1>
        <div class="link-row"><a class="bundle" href="#">See open positions</a></div>
      </div>
      <div class="link-content">
        <div class="link-row"><a class="scroll" href="">Scroll</a></div>
      </div>
    </div>
  </div>
</section>
<section class="careers__2">
  <div class="container">
    <div class="row">
      <div class="careers__2-wrap">
        <div class="careers__2-img"><img src="<?= get_template_directory_uri(); ?>/img/careers/careers-2.webp" alt=""></div>
        <div class="careers__2-content">
          <div class="sub">to reveal your best self</div>
          <h2 class="title">Why work at InnerCamp?</h2>
          <p>InnerCamp is changing the way people approach their mental and emotional health, providing holistic tools accessible to all. We are on a mission to connect people with their true selves through centuries-old techniques of Breathwork and Tantra powered by contemporary studies and innovation.</p>
          <p>InnerCamp team is driven by passion to make a meaningful difference in the world which starts with your own transformation first.</p>
          <p>We are an equal opportunity employer who believes in diversity and inclusion. We are constantly looking for talent that will help us fulfill our vision. Please check our job openings below.</p>
          <p><strong>Work with us, from anywhere.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="careers__3">
  <div class="container">
    <div class="row">
      <div class="position-wrap">
        <div class="sub">careers</div>
        <h2 class="title">Open positions</h2>
        <ul class="positions-list">
          <div class="position-item">
            <h3 class="position-name">Psychology Intern</h3>
            <div class="location">Remote</div>
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div><a class="see-detail" href="#vacancy-1">See details</a>
          </div>
          <div class="position-item">
            <h3 class="position-name">Sales Service Representative</h3>
            <div class="location">America</div>
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div><a class="see-detail" href="#vacancy-2">See details</a>
          </div>
          <div class="position-item">
            <h3 class="position-name">Customer Service Intern</h3>
            <div class="location">Remote</div>
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div><a class="see-detail" href="#vacancy-3">See details</a>
          </div>
          <div class="position-item">
            <h3 class="position-name">HR Intern</h3>
            <div class="location">Remote</div>
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div><a class="see-detail" href="#vacancy-4">See details</a>
          </div>
          <div class="position-item">
            <h3 class="position-name">Future Openings</h3>
            <div class="location">Remote</div>
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div><a class="see-detail" href="#vacancy-5">See details</a>
          </div>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="careers__4">
  <div class="container">
    <div class="row">
      <div class="sub">careers</div>
      <h2 class="title">Apply for a position</h2>
      <div class="careers__4-wrap">
        <div class="career-form-block">
          <form class="career-form" action="">
            <div class="form-field">
              <label for="select-job">Job title:</label>
              <select id="select-job" name="select-job">
                <option value="" selected="" disabled="" hidden="">Choose job title</option>
                <option value="Psychology Intern">Psychology Intern</option>
                <option value="Sales Service Representative">Sales Service Representative</option>
                <option value="Customer Service Intern">Customer Service Intern</option>
                <option value="HR Intern">HR Intern</option>
                <option value="Future Openings">Future Openings</option>
              </select>
            </div>
            <div class="form-field">
              <label for="candidate-name">Full name:</label>
              <input id="candidate-name" type="text" name="candidate-name" placeholder="Your full name">
            </div>
            <div class="form-field">
              <label for="candidate-email">Email:</label>
              <input id="candidate-email" type="email" name="candidate-email" placeholder="contact@innercamp.com">
            </div>
            <div class="form-field">
              <label for="birthday">Date of birth:</label>
              <input id="birthday" type="date" name="birthday" placeholder="dd/mm/yyyy">
            </div>
            <div class="bottom-form-block">
              <div class="form-field location-block">
                <label for="candidate-location">Current location:</label>
                <input id="candidate-location" type="text" name="candidate-location" placeholder="City &amp; Country">
              </div>
              <div class="field-group">
                <div class="form-field upload-block">
                  <label for="upload-cv">Upload your CV:</label>
                  <input id="upload-cv" type="file" name="upload-cv"><img src="<?= get_template_directory_uri(); ?>/img/careers/paperclip.svg" alt="">
                </div>
                <div class="form-field flex">
                  <input id="check-terms" type="checkbox" name="check-terms"><span>I accept the <a href="#">terms and conditions</a> of innercamp.com</span>
                </div>
              </div>
              <div class="form-field">
                <label for="candidate-message">Introduction message:</label>
                <textarea id="candidate-message" name="candidate-message" cols="30" rows="13" placeholder="Say something about yourself"></textarea>
              </div>
            </div>
            <div class="form-field submit-block">
              <input class="submit-form" type="submit" value="Apply"><img src="<?= get_template_directory_uri(); ?>/img/arrow-l.svg" alt="">
            </div>
          </form>
        </div>
        <div class="careers__4-img"><img src="<?= get_template_directory_uri(); ?>/img/careers/careers-3.webp" alt=""></div>
      </div>
    </div>
  </div>
</section>
<div class="vacancy-description-block">
  <div class="shadow-block"></div>
  <div class="vacancy-description-content">
    <button class="close-block-position"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/x-circle.svg" alt=""></button>
    <ul class="vacancy-description-list">
      <li class="vacancy-item active" id="vacancy-1">
        <div class="item-wrap">
          <h2 class="title">Psychology Intern</h2>
          <div class="item-top-row">
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div>
            <div class="clock">At least 6 month</div>
            <div class="working">Part-Time, flexible working hours</div>
            <div class="location">Remotely</div><a class="see-details" href="#vacancy-5">Apply now</a>
          </div>
          <div class="item-content">
            <div class="content">
              <h3>Who do we want?</h3>
              <p>
                <ul>
                  <li>a student heading to a degree in psychology or similar field</li>
                  <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                  <li>a passionate writer who enjoys sharing information and experiences</li>
                  <li>a cheerful colleague who will be a pleasure to work with</li>
                  <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                  <li>a flexible and creative soul who is eager to learn new things</li>
                </ul>
              </p>
            </div>
            <div class="content">
              <h3>Responsibilities:</h3>
              <p>
                <ul>
                  <li>a student heading to a degree in psychology or similar field</li>
                  <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                  <li>a passionate writer who enjoys sharing information and experiences</li>
                  <li>a cheerful colleague who will be a pleasure to work with</li>
                  <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                  <li>a flexible and creative soul who is eager to learn new things</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </li>
      <li class="vacancy-item" id="vacancy-2">
        <div class="item-wrap">
          <h2 class="title">Sales Service Representative</h2>
          <div class="item-top-row">
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div>
            <div class="clock">At least 6 month</div>
            <div class="working">Part-Time, flexible working hours</div>
            <div class="location">Remotely</div><a class="see-details" href="#vacancy-5">Apply now</a>
          </div>
          <div class="item-content">
            <div class="content">
              <h3>Who do we want?</h3>
              <p>
                <ul>
                  <li>a student heading to a degree in psychology or similar field</li>
                  <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                  <li>a passionate writer who enjoys sharing information and experiences</li>
                  <li>a cheerful colleague who will be a pleasure to work with</li>
                  <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                  <li>a flexible and creative soul who is eager to learn new things</li>
                </ul>
              </p>
            </div>
            <div class="content">
              <h3>Responsibilities:</h3>
              <p>
                <ul>
                  <li>a student heading to a degree in psychology or similar field</li>
                  <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                  <li>a passionate writer who enjoys sharing information and experiences</li>
                  <li>a cheerful colleague who will be a pleasure to work with</li>
                  <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                  <li>a flexible and creative soul who is eager to learn new things</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </li>
      <li class="vacancy-item" id="vacancy-3">
        <div class="item-wrap">
          <h2 class="title">Customer Service Intern</h2>
          <div class="item-top-row">
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div>
            <div class="clock">At least 6 month</div>
            <div class="working">Part-Time, flexible working hours</div>
            <div class="location">Remotely</div><a class="see-details" href="#vacancy-5">Apply now</a>
          </div>
          <div class="item-content">
            <h3>Who do we want?</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
            <h3>Responsibilities:</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
          </div>
        </div>
      </li>
      <li class="vacancy-item" id="vacancy-4">
        <div class="item-wrap">
          <h2 class="title">HR Intern</h2>
          <div class="item-top-row">
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div>
            <div class="clock">At least 6 month</div>
            <div class="working">Part-Time, flexible working hours</div>
            <div class="location">Remotely</div><a class="see-details" href="#vacancy-5">Apply now</a>
          </div>
          <div class="item-content">
            <h3>Who do we want?</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
            <h3>Responsibilities:</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
          </div>
        </div>
      </li>
      <li class="vacancy-item" id="vacancy-5">
        <div class="item-wrap">
          <h2 class="title">Future Openings</h2>
          <div class="item-top-row">
            <div class="position-period">
              <h4>application deadline:</h4><span class="date">November 30, 2022</span>
            </div>
            <div class="clock">At least 6 month</div>
            <div class="working">Part-Time, flexible working hours</div>
            <div class="location">Remotely</div><a class="see-details" href="#vacancy-5">Apply now</a>
          </div>
          <div class="item-content">
            <h3>Who do we want?</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
            <h3>Responsibilities:</h3>
            <p>
              <ul>
                <li>a student heading to a degree in psychology or similar field</li>
                <li>a person that can create engaging content around the subjects of psychology, spiritual practices, meditation, mindfulness and life coaching</li>
                <li>a passionate writer who enjoys sharing information and experiences</li>
                <li>a cheerful colleague who will be a pleasure to work with</li>
                <li>a team player who won&rsquo;t be afraid to come up with new ideas and suggestions</li>
                <li>a flexible and creative soul who is eager to learn new things</li>
              </ul>
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

<?php
get_footer();