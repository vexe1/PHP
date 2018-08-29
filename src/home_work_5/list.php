
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма запроса</title>
</head>
<body>
<form action="test.php" method="GET" enctype="multipart/form-data">
  <fieldset>
    <legend>Самая крупная рублёвая купюра имела номинал</legend>
      <label><input type="radio" name="q1" value="1000000"> 1 000 000</label>
      <label><input type="radio" name="q1" value="1000000000"> 1 000 000 000</label>
      <label><input type="radio" name="q1"value="500000"> 500 000</label>
      <label><input type="radio" name="q1"value="1500000"> 1 500 000</label>
  </fieldset>
  <fieldset>
    <legend>Самая глубокая река на Земле</legend>
      <label><input type="radio" name="q2" value="Ангара"> Ангара</label>
      <label><input type="radio" name="q2" value="Амазонка"> Амазонка</label>
      <label><input type="radio" name="q2" value="Ганг"> Ганг</label>
      <label><input type="radio" name="q2" value="Конго"> Конго</label>
  </fieldset>
  <input type="submit" value="Отправить">  
</form>
</body>
</html>

