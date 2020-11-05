<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Melon: Contact</title>
    <link rel="stylesheet" href="css/master.css">
  <body>
    <div class="header">
      <div class="container">
        <a id="header-title"href="index.html">The Melon</a>
        <ul id="header-nav">
          <li><a href="information.html">Information</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="books.html">Books <!--(Only in Dutch for now.)--> </a></li>
        </ul>
      </div>
    </div>
    <div class="contactform">
      <div class="container"> <br>
        <form action="mail.php" method="POST">
          <p>Name</p> <input type="text" name="name" placeholder="First & Last Name">
          <p>Email</p> <input type="text" name="email" placeholder="example@domain.com">
          <p>Message</p><textarea name="message" rows="6" cols="25"></textarea> <br />
          <input type="submit" name="sub" value="Send"><input type="reset" value="Clear">
        </form>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="column">
          <h4>My links</h4>
          <p>
            <a href="https://www.instagram.com/_armanu">Instagram</a>
            <br>
            <a href="https://www.snapchat.com/add/manupeys">Snapchat</a>
          </p>
        </div>
        <div class="column">
          <h4>Creator:</h4>
          <p>Manu von Franquemont</p>
        </div>
      </div>
    </div>
  </body>
</html>
