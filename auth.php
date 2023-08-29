<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>


    <form action="" onsubmit="validate(event)" method="post">
      <h1>Form Validation</h1>
      <label for="username">Username: </label>
      <input type="text" name="username" />

      <label for="lname">Lastname: </label>
      <input type="text" name="lname" />
      <br />

      <label for="email">Email: </label>
      <input type="text" name="email" id="email" />

      <br />

      <label for="password">Password:</label>
      <input type="password" name="password" id="ps" />
      <br />

      <input type="submit" name="submit" />
    </form>

    <?php 
      $regex = "/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}/";

      if(isset($_POST['email'])){
        $email = $_POST['email'];
         if ( preg_match($regex, $email)){
          echo "<h1> Email correct</h1>";
         }
         else{
          echo "<h1> Email not correct</h1>";
         }
      }
      else{
        echo "<h1>Eror status: 204</h1>";
      }
    ?>
  </body>


  <script>
    var regex = /[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}/;

    console.log(email);
    function validate(event) {
      var email = document.getElementById("email").value;
      console.log("email=", email);

      if (regex.test(email)) {
        console.log(email);
      } 
      else {
        alert("email not right");
        event.preventDefault();
      }
    }
  </script>
</html>
