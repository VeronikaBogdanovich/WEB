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
    echo "<b>2)Выведите    информацию  о   пользователях,  а   также   о   количестве  полученных  и   отправленных    ими письмах: <br></b>";
    $query1 = "SELECT 
                    CONCAT(surname, ' ', name, ' ', patronymic) AS 'ФИО',
                    date_of_birth,
                    COUNT(*) as total1
                FROM
                    people
                        INNER JOIN
                    mail ON people.id = mail.id_sender
                GROUP BY id_sender
                ORDER BY 'ФИО' DESC";
    $res1 = mysql_query($query1);
    $query2 = "SELECT 
                    CONCAT(surname, ' ', name, ' ', patronymic) AS 'ФИО',
                    date_of_birth,
                    COUNT(*) as total2
                FROM
                    people
                        INNER JOIN
                    mail ON people.id = mail.id_recipient
                GROUP BY id_recipient
                ORDER BY 'ФИО' DESC";
    $res2 = mysql_query($query2);
    while($row1 = mysql_fetch_array($res1))
    {
    $row2 = mysql_fetch_array($res2);
    echo "ФИО: ".$row1['ФИО']."<br>\n";
    echo "Дата рожения: ".$row1['date_of_birth']."<br>";
    echo "Полученных писем: ".$row2['total2']."<br>";
    echo "Отправленных писем: ".$row1['total1']."<br><hr>";
    }
    mysql_close($link);
    ?>
    <a href="index.php"><button>Назад</button></a></body>
</html>

