<?php require '../includes/header.php'; ?>

<div class="contact-form">
  <form action="">
    <h2 class="bottom-margin">Sign In</h2>
    <input type="text" name="username" id="username" placeholder="username" required>
    <input type="password" name="password" id="password" placeholder="password"  required>
    <button>Sign In</button>
  </form>
  
</div>

<div class="flex-row">
  <div>
    <p>New to GuacaMOLE?</p>
    <a href="<?php echo $register_link; ?>">Register ></a>
  </div>
 <div>
 <p>Just looking around?</p>
  <a href="<?php echo $practice_link; ?>">Demo ></a>
 </div>
</div>

<?php require '../includes/footer.php'; ?>