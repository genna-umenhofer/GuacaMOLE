<?php 
require 'includes/header.php'; 
include('.env.php');
?>
<!-- http://localhost:8888/GuacaMOLE/index.php -->
<section id="hero">
  <div class="gray-box1 top-margin bottom-margin">
    <img src="assets/guacamole-logo.png" alt="" class="logo">
  </div>
  <div class="top-margin bottom-margin">
    <h1 class="bottom-padding top-padding">Welcome to GuacaMOLE!</h1>
    <p >Why did the chemistry student always do well in class?</p> 
    <p class="bottom-padding"><em>Because they had a solution for everything!</em></p>
    <a href="pages/practice.php" class="button">Start Practicing!</a>
  </div>
</section>
<section id="blurb" class="white-space">
  <h2>GuacaMOLE for Students:</h2>
  <p>GuacaMOLE is a great addition to any level of Chemistry course. Whether you are a student taking Chemistry for the first time, a seasoned college student, or a STEM educator, there is something for you on GuacaMOLE.</p>
  <h2 class="top-margin">GuacaMOLE for Educators:</h2>
  <p>For educators, GuacaMOLE is a great place to find new and exciting lessons. Check out our lesson plans and resources to help you incorporate GuacaMOLE into your classroom easily! Students can use GuacaMOLE as part of a flipped classroom, or they can work together on problems in class. The possibilities are endless...</p>
</section>
<section class="carousel white-space">
  <div class="card1">
    <div class="gray-box2">
      <span class="material-symbols-outlined">trending_up</span>
    </div>
    <div class="card1-text">
      <h3>Lesson Plans</h3>
      <p>Lesson plans are freely available for educators on the "Lesson Plans" page. They are formatted to help you incorporate GuacaMOLE seamlessly into your classroom.</p>
    </div>
  </div>
  <div class="card1">
    <div class="gray-box2">
      <span class="material-symbols-outlined">auto_mode</span>
    </div>
    <div class="card1-text">
      <h3>Learn & Practice</h3>
      <p>There are an infinite number of problems to solve. Learn how to do each problem type, and master the problems through practice.</p>
    </div>
  </div>
  <div class="card1">
    <div class="gray-box2">
      <span class="material-symbols-outlined">hub</span>
    </div>
    <div class="card1-text">
      <h3>Everything STEM</h3>
      <p>Interested in connecting your learning ot real life? The STEM Connect page has everything from internship opportunities to movie reviews!</p>
    </div>
  </div>
</section>
<section id="contact" class="contact-form white-space">
  <h2 class="bottom-padding bottom-margin">Got questions? Reach out!</h2>
  <form action="includes/sendemail.php" method="POST">
    <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
    <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
    <input type="email" id="email" name="email" placeholder="Email Address" required>
    <textarea id="message" name="message" placeholder="Message" required></textarea>
    <div class="g-recaptcha bottom-margin" data-sitekey="<?php echo $userKey ?>" required></div>
    <input type="submit" class="button" id="submit-form-button" name="submit">
  </form>
</section>
<?php require 'includes/footer.php'; ?>
