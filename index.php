<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age']+0;
    $output = 'Can\'t proceed';
    if(strlen($name)>3 & strpos($mail, '@')!=false & strpos($mail, '.')!=false & is_integer($age)!=false ){
      $output='You can go on';
    }

   ?>
   <h1> <?php echo $output ?></h1>

   <form action="" method="GET">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="mail">Email</label>
        <input type="text" name="mail" id="mail">
        <label for="age">Età</label>
        <input type="text" name="age" id="age">
        <button>Invio</button>
    </form>
</body>
</html>