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
    <?php
    require_once 'connection.php';
    $link = mysql_connect($host, $user, $password);
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    if(!@mysql_select_db($database)) {
        die ("Не возможно подключение к базе данных $database!");
    }
    echo "<b>1)Найдите    пользователя,   длина   писем   которого    наименьшая: <br></b>";
    $query1 = "  SELECT CONCAT(surname, ' ', name, ' ', patronymic) AS 'ФИО'
                FROM
                    people
                        INNER JOIN
                    mail ON people.id = mail.id_sender
                GROUP BY LENGTH(text)
                LIMIT 1";
    $res1 = mysql_query($query1);
    while($row = mysql_fetch_array($res1))
    {
    echo "ФИО: ".$row['ФИО']."<br><hr>\n";
    }
    mysql_close($link);
    ?>
    <a href="index.php"><button>Назад</button></a>
</body>
</html>

