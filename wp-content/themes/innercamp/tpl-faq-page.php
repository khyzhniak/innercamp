<?php
/**
* Template Name: FAQ Page*
*/
get_header(); 

if(0){ ?>
<!-- Section 1 -->
<section class="faq__1">
    <img src="<?= get_template_directory_uri(); ?>/img/faq/faq-banner.webp" alt="" class="faq-bg-desktop">
    <img src="<?= get_template_directory_uri(); ?>/img/faq/faq-bc.webp" alt="" class="faq-bg-mobile">

    <div class="container">
        <div class="row">
            <p class="sub">faq</p>
            <h1 class="faq-title">Everything you want to know about InnerCamp</h1>
            <div class="faq-description">
                <p>Below you’ll find answers to our most commonly asked questions.<br>
                    If you don’t find the answer you are looking for, please contact Anamaria at <a href="#">contact@innercamp.com</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="faq__2">
        <div class="faq-tabs">
            <div class="tabs-list">
                <button class="tabs-item active" name="tab-1">Retreats</button>
                <button class="tabs-item" name="tab-2">Online Trainings</button>
                <button class="tabs-item" name="tab-3">Virtual Workshops</button>
                <button class="tabs-item" name="tab-4">Various</button>
            </div>
        </div>
    <div class="container">
        <div class="faq-wrap">
            <div class="faq-content active" id="tab-1">
                <div class="faq-item">
                    <button class="faq-questions">I am travelling on my own. Is the retreat suitable for me?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">Are couples welcome?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">How many guests are on each retreat?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">Can beginners attend a retreat?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">What language is used?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">Can I bring children/pets with me?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">How do I know if I am able to cope with the program?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">Do I have to follow the retreat schedule?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">Are airport transfers included?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">How do I get to the venue?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">What is not included in my retreat package?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-questions">What is not included in my retreat package?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
            </div>
            <div class="faq-content" id="tab-2">
                <div class="faq-item">
                    <button class="faq-questions">Can beginners attend a retreat?</button>
                    <div class="faq-panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
                    </div>
                </div>
            </div>
            <div class="faq-content" id="tab-3">
                <div class="faq-item">
                    <button class="faq-questions">How do I know if I am able to cope with the program?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
            </div>
            <div class="faq-content" id="tab-4">
                <div class="faq-item">
                    <button class="faq-questions">What is not included in my retreat package?</button>
                    <div class="faq-panel"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p></div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php } ?>
    






<?php get_footer();