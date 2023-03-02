<?php require '../includes/header.php'; ?>

<div class="contact-form">
  <form action="">
    <h2 class="bottom-margin">Register</h2>
    <input type="text" name="username" id="username" placeholder="username" required>
    <input type="password" name="password" id="password" placeholder="password" required>
    <input type="email" name="email" id="email" placeholder="email" required>
    
    <select name="account-type" id="accout-type">
      <option value="" disabled selected hidden>I am a...</option>
      <option value="teacher">Teacher</option>
      <option value="student">Student</option>
    </select>
    <button>Register</button>
  </form>
</div>
<div class="flex-row">
  <div>
    <p>Already a GuacaMOLE member?</p>
    <a href="<?php echo $login_link; ?>">Sign In ></a>
  </div>
  <div>
    <p>Just looking around?</p>
    <a href="<?php echo $practice_link; ?>">Demo ></a>
  </div>
</div>

<?php require '../includes/footer.php'; ?>