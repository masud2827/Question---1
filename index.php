<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Question 1</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
  </head>
  <body>
    <h1>Insert name id age and username, password</h1>
    <form action="insert.php" method="post">
      <p>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" />
      </p>

      <p>
        <label for="id">ID :</label>
        <input type="text" name="id" id="id" />
      </p>

      <p>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" />
      </p>

      <p>
        <label for="user_name">Username :</label>
        <input type="text" name="user_name" id="user_name" />
      </p>

      <p>
        <label for="password">Password:</label>
        <input type="text" name="password" id="password" />
      </p>

      <input class="btn btn-success" type="submit" value="Submit" />
    </form>
  </body>
</html>
