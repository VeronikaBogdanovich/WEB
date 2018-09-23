<html>
<head>
    <meta charset="utf-8">
    <title>Богданович Вероника</title>
</head>
<style type="text/css">
    body{
        font-size: 24px;
    }
    p{
        font-size: 25px;
    }
    button{
        font-size: 20px;
        border: none;
        padding: 10px;
    }
</style>
<body>
    <p>Введите текст:</p>
    <form name="a" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="a">
    <input type="submit">
    </form>
    <?php
    $n= $_GET['a'];
    require_once 'connection.php';
    $link = mysql_connect($host, $user, $password);
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    if(!@mysql_select_db($database)) {
        die ("Не возможно подключение к базе данных $database!");
    }
    echo "<b>5) Направьте   письмо  заданного   человека    с   заданной    темой   всем    людям.  : <br></b>";
    echo "<b>Выбирете отправителя:<br></b>";
    $query3 = "SELECT *
                FROM
                    people";
    $res3 = mysql_query($query3);
    while($row = mysql_fetch_array($res3))
    {

    echo "Номер: ".$row['id']."<br>";
    echo "Фамилия: ".$row['surname']."<br>";
    echo "Имя: ".$row['name']."<br>";
    echo "Отчество: ".$row['patronymic']."<br><hr>";
    }
    mysql_close($link);
    ?>
    <p>Введите Номер:</p>
    <form name="a" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="a">
    <input type="submit">
    </form>
    <?php
    $n= $_GET['a'];
    $k=5;
    if($n!=null){
        require_once 'connection.php';
        $link = mysql_connect($host, $user, $password);
        if (!$link) {
            die('Ошибка соединения: ' . mysql_error());
        }
        if(!@mysql_select_db($database)) {
            die ("Не могу подключиться к базе данных $database!");
        }
        for ($i=1;$i<=4;$i++){
            if($i!=$n){
                $id=$k+$i;
                $sql = mysql_query("INSERT INTO mail(id, id_sender, id_recipient, topic, text, date) 
                    VALUES ('$id','$n' , '$i','qwerty','qwerty','2018-03-12')");
                echo mysql_error();
            }
            else {
                $k--;
            }
        }
        if (mysql_num_rows($res3) == 0)  echo 'Такого текста нет<br>';
        mysql_close($link);
    }
    ?>
    <a href="index.php"><button>Назад</button></a>
</body>
</html>

