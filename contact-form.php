<?php  include 'form.php'; ?>
<form action="" method="post">
  <div class="row">
    <div class="col-md-6 pl-0">
      <div class="cont-uz-01">
        <input type="text" name="fname" placeholder="First Name" required>
      </div>
    </div>
    <div class="col-md-6 pl-0">
      <div class="cont-uz-01">
        <input type="text" name="lname" placeholder="Last Name" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 pl-0">
      <div class="cont-uz-01">
        <input type="mail" name="email" placeholder="Mail Id" required>
      </div>
    </div>
    <div class="col-md-6 pl-0">
      <div class="cont-uz-01">
        <input type="number" name="phone" placeholder="Mobile Number" required>
      </div>
    </div>
  </div>

  <div class="cont-uz-01">
    <textarea type="text" name="message" placeholder="Message" rows="2"></textarea>
  </div>

  <div class="cont-uz-btn">
    <button type="submit" value="Submit" name="submit">Send</button>
  </div>
</form>