<?php
$title = 'Employer';
$page = 'employer';
include_once './include/header.php';
?>

<style>
  <?php include './include/stylesA.css'; ?>
</style>

<div class="main-container">
  <div class="employer-wrapper">
    <div class="employer-text">
      <div class="employer-header">
        <h1>Employer Contact Details</h1>
      </div>
      <h2>Our services 1</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempora at ex, officia asperiores similique quam nobis assumenda natus autem error recusandae quis iste, perferendis ut dolores laboriosam omnis doloribus consequuntur? Dolores, ipsum aut quam quod exercitationem quibusdam eum ipsa soluta ad sit quas recusandae. Sapiente ad laudantium eligendi fugit?</p>

      <h2>Our services2</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempora at ex, officia asperiores similique quam nobis
        assumenda natus autem error recusandae quis iste, perferendis ut dolores laboriosam omnis doloribus consequuntur?
        Dolores, ipsum aut quam quod exercitationem quibusdam eum ipsa soluta ad sit quas recusandae. Sapiente ad laudantium
        eligendi fugit?</p>
    </div>

    <!-- Employer Form -->
    <section class="employer-sect">
      <div class="container">
        <div class="header">
          <h2>Your Contact Details</h2>
        </div>

        <!-- action="../formwithAttachment/attachApp.php" -->
        <form class="form" id="form" action="./attachApp.php" method="POST" enctype="multipart/form-data" />
        <div class="form-control1">
          <label for="username">Name:</label>
          <input type="text" placeholder="Enter your Name" id="username" name="username" required></input>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control1">
          <label for="title">Employer Or Job Seeker:</label>
          <input type="text" placeholder="Are you Employer or Job Seeker" id="title" name="title" required></input>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control1">
          <label>Phone Number:</label>
          <input type="phone" placeholder="Enter contact phone number" name="phone" id="phone" required></input>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div class="form-control1">
          <label>Email:</label>
          <input type="email" placeholder="Enter your email here" name="email" id="email" required></input>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <!-- <div class="form-control1">
          <label>Subject:</label>
          <input type="text" placeholder="Enter Subject...." id="subject" name="subject" required></input>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div> -->

        <div class="text-area">
          <label for="text-area">Message</label>
          <textarea name="message" id="text-area" cols="30" rows="6" placeholder="Enter your message"></textarea>
        </div>

        <!-- File upload php-->
        <div class="file-div">
          <?php if (empty($msg)) { ?>
            <input type="hidden" name="MAX_FILE_SIZE" value="900000">
            <label for="userfile">Add attachment?</label>
            <input name="userfile[]" type="file" id="userfile" title="Click to add attachment" multiple>
          <?php } else {
            echo htmlspecialchars($msg);
          } ?>
        </div>
        <button type="submit" name="submit" value="submit">Submit</button>
        </form>
      </div>
    </section>
    <!-- End container -->
    <div class="map-addr">
      <div class="logo">
        <h1>OFFICE LOCATION</h1>
        <span>7454 Airport Road,<br>
          Mississauga, Ontario L4T 2H5<br></span>
        <strong>Phone:</strong> 1 905-756-4844 , +1 416 566-6252
      </div>
      <div class="mapframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.9094820539076!2d-79.65732988511725!3d43.712430156617756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3c08a8741b7d%3A0x71b8fc86f7da5712!2s7454%20Airport%20Rd%2C%20Mississauga%2C%20ON%20L4T%202H5!5e0!3m2!1sen!2sca!4v1652782486985!5m2!1sen!2sca" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- width="300" height="350" -->
      </div>
      <!-- style="border:0;" -->
    </div>

  </div>
</div>

<?php
include_once './include/footer.php';
?>