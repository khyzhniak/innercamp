<?php 
/**
* Template Name: Onsite retreats*
*/
get_header(); 
?>
<div class="mobile-experience-filter-nav">
    <button class="close"><img src="<?= get_template_directory_uri(); ?>/img/team/close-img.svg" alt=""></button>
    <div class="mobile-experience-filter-wrap">
        <nav class="experience-filter-nav">
            <h2 class="experience-filter-title">Filter by</h2>
            <ul>
                <li class="active"><a href="#">All courses <span>(50)</span></a></li>
                <li><a href="#">Online <span>(50)</span></a></li>
                <li><a href="#">On-site <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-event-nav">
            <h3 class="experience-event-title">Event type</h3>
            <ul>
                <li><a href="#">Breathwork <span>(1)</span></a></li>
                <li><a href="#">Tantra <span>(50)</span></a></li>
                <li><a href="#">Bodywork <span>(50)</span></a></li>
                <li><a href="#">Cacao ceremonies <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-lang-nav">
            <h3 class="experience-lang-title">language</h3>
            <ul>
                <li><a href="#">English <span>(1)</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<section class="retreats__1" style="background: url('<?= get_template_directory_uri(); ?>/img/experience/retreats-bg.webp') no-repeat top/cover">
    <div class="container">
        <div class="row">
            <h1 class="title">Explore InnerCamp <strong>Retreats</strong></h1>
            <div class="retreats__1-description">
                <p>Blissful getaways to let go of everyday life stress and reconnect with yourself like never before. Recalibrate your energies, nourish your mind, and renew the body.</p>
            </div>
        </div>
    </div>
</section>

<section class="retreats__2 experience-wrap">
    <div class="container">
        <div class="row">
            <div class="experience-nav">
                <div class="experience-nav-wrap">
                    <nav class="experience-filter-nav">
                        <h2 class="experience-filter-title">Filter by</h2>
                        <ul>
                            <li><a href="#">All courses <span>(40)</span></a></li>
                            <li><a href="#">Online <span>(1)</span></a></li>
                            <li><a href="#">On-site <span>(4)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-event-nav">
                        <h3 class="experience-event-title">Event Type</h3>
                        <ul>
                            <li><a href="#">Breathwork <span>(1)</span></a></li>
                            <li><a href="#">Tantra <span>(4)</span></a></li>
                            <li><a href="#">Bodywork <span>(4)</span></a></li>
                            <li><a href="#">Cacao ceremonies <span>(3)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-lang-nav">
                        <h3 class="experience-lang-title">Language</h3>
                        <ul>
                            <li><a href="#">English <span>(4)</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="experience-content">
                <h2 class="experience-content-title">Retreats</h2>
                <div class="experience-list">
                    <div class="experience-item retreats">
                        <img src="<?= get_template_directory_uri(); ?>/img/experience/expirience-item-img.png" alt="">
                        <div class="category-list-mobile">
                            <a class="element tantra" href="#">Tantra</a>
                        </div>
                        <div class="box__content">
                            <div class="left-side">
                                <h3 class="item-title">Tantra retreat</h3>
                                <div class="category-list">
                                    <a class="element tantra" href="#">Tantra</a>
                                    <a class="calen" href="#">June 2023</a>
                                </div>
                                <div class="event-content">
                                    <div class="col">
                                        <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                                        <div class="lang">English</div>
                                        <div class="location">Malaga, Spain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="training-price"><span>Price from: </span><span>600€</span></div>
                                <a href="#" class="bundle">See details</a>
                            </div>
                        </div>
                    </div>
                    <div class="experience-item retreats">
                        <img src="<?= get_template_directory_uri(); ?>/img/experience/expirience-item-img.png" alt="">
                        <div class="category-list-mobile">
                            <a class="element tantra" href="#">Tantra</a>
                        </div>
                        <div class="box__content">
                            <div class="left-side">
                                <h3 class="item-title">InnerCamp retreat</h3>
                                <div class="category-list">
                                    <a class="element tantra" href="#">Retreats</a>
                                    <a class="calen" href="#">June 2023</a>
                                </div>
                                <div class="event-content">
                                    <div class="col">
                                        <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                                        <div class="lang">English</div>
                                        <div class="location">Malaga, Spain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="training-price"><span>Price from: </span><span>600€</span></div>
                                <a href="#" class="bundle">See details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();