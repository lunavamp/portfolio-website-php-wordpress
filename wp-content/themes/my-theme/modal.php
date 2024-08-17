<div id="modal" class="modal">
  <div class="modal-content fx-sb">
    <img class="modal-bg" src="./assets/img/bg.webp" alt="modal background">
    <div class="modal-form-container fx-col-sb">
      <span class="close" id="closeModal">&times;</span>
      <p>Send Me A Message</p>
      <form class="modal-form fx-col-sb contact-form">
        <label class="fx-col-sb">
          Name:
          <input type="text" name="name" />
        </label>

        <label class="fx-col-sb">
          Email:
          <input type="email" name="email" />
        </label>

        <label class="fx-col-sb">
          Your message:
          <textarea name="message" rows="5"></textarea>
        </label>

        <input class="btn2 btn-modal submit-btn" name="submit" type="submit" value="Send" />
        <p class="form-status"></p>
      </form>
      <div class="social-icons fx-sb">
      <a href="https://github.com/lunavamp">
        <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#github-svg" /></svg>
        </a>
        <a href="https://www.instagram.com/ui_unicorn_/">
        <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#instagram-svg" /></svg>
        </a>
        <a href="https://www.linkedin.com/in/karina-kolesnichenko/">
        <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#linkedin-svg" /></svg>
        </a>
      </div>
    </div>
  </div>
</div>