<div class="sidebar-area event-sidebar_area">
  <div class="widgets-area">
    <div class="inner-area">
      <h2 class="heading mb-0"><span>/</span> Download</h2>
      <div class="widgets-item">
        <ul class="list-item_wrap">
          <li>
            <ul class="list-item-2">
              <li class="list-item_img without-radius">
                <img src="assets/images/sidebar/icon/1.png" alt="Class Image">
              </li>
              <li class="list-item_content">
                <a href="javascript:void(0)">Download Schedule of our activities</a>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item-2">
              <li class="list-item_img without-radius">
                <img src="assets/images/sidebar/icon/2.png" alt="Class Image">
              </li>
              <li class="list-item_content">
                <a href="javascript:void(0)">Download Assignments for 1st Quarter</a>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item-2">
              <li class="list-item_img without-radius">
                <img src="assets/images/sidebar/icon/3.png" alt="Class Image">
              </li>
              <li class="list-item_content">
                <a href="javascript:void(0)">Download Assignments for 2nd Quarter</a>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item-2">
              <li class="list-item_img without-radius">
                <img src="assets/images/sidebar/icon/4.png" alt="Class Image">
              </li>
              <li class="list-item_content">
                <a href="javascript:void(0)">Download Assignments for 3rd Quarter</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="widgets-area organizer-area">
    <div class="inner-area">
      <h2 class="heading mb-0"><span>/</span> Organizer</h2>
      <div class="widgets-item">
        <div class="organizer-img">
          <img src="assets/images/sidebar/small-size/1.png" alt="Organizer Image">
        </div>
        <div class="organizer-content">
          <h3 class="organizer-name mb-0">Cory Campbell</h3>
          <span class="organizer-role">/ Organizer</span>
          <span class="organizer-phone">
            <i class="ion-iphone"></i>
            <a href="tel://+0122 8899900">01228899900</a>
          </span>
          <span class="organizer-email">
            <i class="ion-email"></i>
            <a href="mailto://info@example.com">info@example.com</a>
          </span>
          <ul class="social-link with-border-radius sm-size">
            <li class="facebook">
              <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                <i class="ion-social-facebook"></i>
              </a>
            </li>
            <li class="twitter">
              <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                <i class="ion-social-twitter"></i>
              </a>
            </li>
            <li class="youtube">
              <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                <i class="ion-social-youtube"></i>
              </a>
            </li>
            <li class="skype">
              <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                <i class="ion-social-skype"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="widgets-area event-widgets_area">
    <div class="inner-area">
      <h2 class="heading mb-0"><span>/</span> Popular Events</h2>
      <div class="widgets-item">
        <ul class="list-item_wrap">
          <li>
            <ul class="list-item event-list_item">
              <li class="list-item_img">
                <img src="assets/images/sidebar/small-size/event/1.jpg" alt="Event Image">
              </li>
              <li class="list-item_content">
                <a class="entry-title" href="single-event.html">Winter Sports Camp</a>
                <span class="entry-view">
                  <i class="ion-eye"></i> 662 views
                </span>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item event-list_item">
              <li class="list-item_img">
                <img src="assets/images/sidebar/small-size/event/2.jpg" alt="Event Image">
              </li>
              <li class="list-item_content">
                <a class="entry-title" href="single-event.html">High School Exchange 2020</a>
                <span class="entry-view">
                  <i class="ion-eye"></i> 406 views
                </span>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item event-list_item">
              <li class="list-item_img">
                <img src="assets/images/sidebar/small-size/event/3.jpg" alt="Event Image">
              </li>
              <li class="list-item_content">
                <a class="entry-title" href="single-event.html">15th Worldwide Athletic Olympiad</a>
                <span class="entry-view">
                  <i class="ion-eye"></i> 487 views
                </span>
              </li>
            </ul>
          </li>
          <li>
            <ul class="list-item event-list_item">
              <li class="list-item_img">
                <img src="assets/images/sidebar/small-size/event/4.jpg" alt="Event Image">
              </li>
              <li class="list-item_content">
                <a class="entry-title" href="single-event.html">15th Commencement Ceremony</a>
                <span class="entry-view">
                  <i class="ion-eye"></i> 406 views
                </span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="widgets-area categories-area">
    <div class="inner-area">
      <h2 class="heading mb-0"><span>/</span> Categories</h2>
      <div class="widgets-item">
        <ul class="list-item_wrap">
          <?php $cats = get_categories();
          foreach ($cats as $cat) : ?>
            <li>
              <ul class="list-item">
                <li>
                  <a href="<?php echo get_category_link($cat) ?>"><?php echo $cat->name ?>
                    <span><?php echo $cat->count ?></span>
                  </a>
                </li>
              </ul>
            </li>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>