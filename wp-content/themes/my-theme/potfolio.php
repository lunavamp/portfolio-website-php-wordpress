<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<main class="body-portfolio">
<section
  class="second-project-section section container fx-col-sb"
  id="second-project">
  <nav>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><?php the_title(); ?></li>
    </ul>
    </nav>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/customair-mockup.jpg" alt="Custom Air website" />
  <div class="project-info">
    <h2>LLC Custom Air Website.</h2>
    <p>
    This project for creating a website for Custom Air LLC was a meaningful and engaging task for me. I aimed to develop not just a web page but a functional and user-friendly tool that would highlight the company's strengths and support its growth.
    </p>
    <p>
    The site’s content can be easily updated through the WordPress admin panel. This feature allows the team at Custom Air LLC to independently add news, publish blog articles, and make changes to text and visual content without needing my constant assistance. This approach gives the company flexibility and autonomy in managing its online presence.
    </p>
    <p>Special attention was given to the visual design of the site. I used a light color scheme and high-quality images to create a welcoming atmosphere and emphasize the company’s professionalism. All design elements were selected to make the site both attractive and intuitive for any user.
    I didn’t overlook the importance of client feedback, so I added a convenient contact form and a section for customer reviews. </p>
  </div>
  <div class="fx-sb blog-project">
    <div class="fx-col-sb project-info">
      <p>
      I also integrated a blog, allowing the company to share useful information with its clients. This not only helps customers better understand the products and services but also improves the site’s search engine rankings, which can attract more visitors over time.
      </p>
      <a href="http://customairllc.com/" class="btn2">Visit Website</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/blog-mockup.jpg" alt="Custom Air Website" />
  </div>
</section>
<section
  class="first-project-section section container fx-col-sb"
  id="first-project">
  <div class="fx-sb project-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/yakist-mockup.jpg" alt="Yakist i Budivnytstvo website" />
    <div class="project-info fx-col-sb">
      <h2>LLC Yakist I Budivnytstvo Website.</h2>
      <p>
      This project involved creating a website for the company "ТОВ 'Якість і Будівництво'", which specializes in road construction and asphalt paving. The website is designed with a modern and professional look, emphasizing the reliability and quality of the company’s services. The homepage features a striking banner with an image of a road at sunset, symbolizing the durability and confidence in the work delivered.
      </p>
      <a href="https://yakist-i-budivnytstvo.com/" class="btn2"
        >Visit Website</a
      >
    </div>
  </div>
  <div>
    <p> The site’s structure is simple and user-friendly, allowing visitors to easily find the information they need about the company and its offerings. The content focuses on the key advantages of the company, highlighting their innovative approach, professionalism, and extensive experience. </p>
    <p>
    The website includes a dedicated photo gallery page that showcases completed road construction projects, providing visual proof of the company’s expertise. Additionally, there is a detailed services page where each of the company’s offerings is thoroughly described, helping potential clients understand the full range of services available. 
    </p>
    <p>
    To build trust, client testimonials are included, along with interactive elements like contact forms and a FAQ section. The website is fully optimized to attract new clients, providing them with all the necessary information to make informed decisions about potential collaborations.
    </p>
  </div>
</section>
<section
  class="third-project-section section container fx-sb"
  id="third-project">
  <div class="project-info fx-col-sb">
    <h2>Photographer Website.</h2>
    <p>
    This project is a personal website for a Los Angeles-based photographer and filmmaker, designed with a minimalist and visually appealing style that emphasizes creativity and professionalism. 
    </p>
    <p>
    Key sections include "About Me," which offers insight into the photographer's background, "Portfolio," showcasing diverse photography styles, and "Blog," providing photography tips and insights. The "Contact" page facilitates easy communication, and the footer includes additional contact information and social media links. The site effectively highlights the photographer's unique style and attracts potential clients.
    </p>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/photographer-mockup.jpg" alt="photographer website" />
</section>
<section
  class="fourth-project-section section container fx-sb"
  id="fourth-project">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/todo-app-mockup.jpg" alt="todo list app" />
  <div class="project-info fx-col-sb">
    <h2>ToDo Management App.</h2>
    <p>
    This project is a simple and intuitive Personal Task Manager application, designed to help users manage their daily tasks effectively. Built with a clean and minimalistic interface, the app allows users to add, edit, and delete tasks easily. 
    </p>
    <p>
    Each task is represented with a checkbox to mark it as completed. The application also provides a counter for active tasks, and features buttons to filter active tasks only or clear completed tasks, making it easy to keep the to-do list organized. The design is user-friendly, ensuring that managing tasks remains a smooth and straightforward experience.
    </p>
    <a href="https://lunavamp.github.io/todolist-react-app/" class="btn2"
        >Visit Website</a
      >
  </div>
</section>
<section
  class="fifth-project-section section container fx-sb"
  id="fifth-project">
  <div class="project-info fx-col-sb">
    <h2>Trip Management App.</h2>
    <p>
    This is a trip management application designed to streamline travel planning. You can easily search for and sort your trips by date, ensuring that the ones happening soonest are displayed at the top of the list. This is particularly useful for keeping track of multiple upcoming trips
    </p>
    <p>
    In addition to managing existing trips, the app allows you to add new destinations and set specific travel dates, making it easy to organize your future adventures. The main feature of the application is its integration with weather data: it provides up-to-date weather information for your destination city and offers a detailed weather forecast for the entire duration of your trip, so you can plan your activities accordingly and avoid any weather-related surprises.
    </p>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mockups/trip-mockup.jpg" alt="trip planning app" />
</section>

<?php include "modal.php";?>

</main>
<div class="cursor"></div>
<?php get_footer(); ?>
