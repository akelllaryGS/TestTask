<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
  <button onclick="window.location.href = 'index.html';">Главная</button>
  <button onclick="window.location.href = 'N2.html';">Задание 2</button>

  <?php
  $dir = 'upload/';
  if (!is_dir($dir)) mkdir($dir);
  printf('<p>Создана папка "%s"</p>', $dir);

  $fileName = $_FILES['file']['name'];
  $file = new SplFileObject($fileName);
  $file->setFlags(SplFileObject::READ_CSV);

  foreach ($file as $row) {
      list($name, $value) = $row;
      $newFileName = $dir . $name;
      $newFile = fopen($newFileName, "w") or die("Невозможно открыть файл!");
      fwrite($newFile, $value);
      printf('<p>Создан файл "%s":<br>Содержимое: %s</p>', $name, $value);
  }
  ?>
</form>
</body>
</html>
