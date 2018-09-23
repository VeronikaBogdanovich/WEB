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
    if($n!=null){
        require_once 'connection.php';
        $link = mysql_connect($host, $user, $password);
        if (!$link) {
            die('Ошибка соединения: ' . mysql_error());
        }
        if(!@mysql_select_db($database)) {
            die ("Не возможно подключение к базе данных $database!");
        }
        echo "<b>4) Выведите информацию  о   пользователях,  которые не  получали    сообщение   с   заданной    темой. : <br></b>";
        $query3 = "SELECT DISTINCT 
                        CONCAT(surname, ' ', name, ' ', patronymic) AS 'ФИО',
                        date_of_birth
                    FROM
                        people
                            INNER JOIN
                        mail ON people.id = mail.id_recipient
                    WHERE
                        text != '$n'";
        $res3 = mysql_query($query3);
        while($row = mysql_fetch_array($res3))
        {
        echo "ФИО: ".$row['ФИО']."<br>";
        echo "Дата рожения: ".$row['date_of_birth']."<br><hr>";
        }
        if (mysql_num_rows($res3) == 0)  echo 'Такого текста нет<br>';
        mysql_close($link);
    }
    ?>
    <a href="index.php"><button>Назад</button></a>
</body>
</html>

