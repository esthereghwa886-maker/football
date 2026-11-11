<?php
require 'includes.php';
page_header('Mickie Football Club');
?>
<section class="hero"><div class="in">
  <h1>Your first touch starts here.</h1>
  <p>Welcome to Mickie Football Club. Whether you have played for years or never
     worn boots, we want you on the pitch. Register online in a minute and we will
     contact you about trials and training.</p>
  <div class="actions">
    <?php if (is_logged_in()): ?>
      <a class="btn" href="profile.php">Go to my page</a>
    <?php else: ?>
      <a class="btn" href="register.php">Register as a player</a>
      <a class="btn ghost" href="login.php">Log in</a>
    <?php endif; ?>
  </div>
</div></section>
<main><div class="cols">
  <div><h3>Open to every player</h3><p>Boys, girls, men and women. Beginners and experienced players train together.</p></div>
  <div><h3>Simple sign-up</h3><p>Give us your name, age, mobile number and town. Then log in any time to check your details.</p></div>
  <div><h3>We call you</h3><p>After you register, a coach will phone the number you gave us with trial dates.</p></div>
</div></main>
<?php page_footer();
