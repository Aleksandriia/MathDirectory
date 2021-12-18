<!-- Вывод данных в таблицу 
            работает -->
<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='dostijenia';

    $link=mysqli_connect ($host,$user,$pass,$db) or die ("Ошибка" .mysqli_error($link));
    $query = "select * from dostijenia_studentov";
    $result = mysqli_query($link, $query) or die("Ошибка".mysqli_error($link));
    
    print("<p align=center><font face=verdana><b>Рабочие</b>
    <table border=1 align=center width=72% cellpadding=5 color=#8c8f94 font-family= 'Roboto',sans-serif font-size=18px  line-height=28px text-align=center>
    <tr bgcolor=#94c1ff align=center margin=5px padding=5px text-align=center>
    <td text-align=center>Номер/id</td>
    <td text-align=center>Название олимпиады</td>
    <td text-align=center>ФИО студента</td>
    <td text-align=center>Группа студента</td>
    <td text-align=center>Дата проведения</td>
    <td text-align=center>ФИО преподавателя</td>
    <td text-align=center>Награда (документ)</td>
    </tr>");

    while($a=mysqli_fetch_array($result))
    {
        $id_Dostijen=$a['id_Dostijen'];
        $Name_Olimpiad=$a['Name_Olimpiad'];
        $FIO_Studenta=$a['FIO_Studenta'];
        $Group_studenta=$a['Group_studenta'];
        $Data_Providen=$a['Data_Providen'];
        $FIO_Prepodavatelya=$a['FIO_Prepodavatelya'];
        $Docum_Nagrad=$a['Docum_Nagrad'];
        print("<tr text-align=center>
        <td text-align=center>$id_Dostijen</td>
        <td text-align=center>$Name_Olimpiad</td>
        <td text-align=center>$FIO_Studenta</td>
        <td text-align=center>$Group_studenta</td>
        <td text-align=center>$Data_Providen</td>
        <td text-align=center>$FIO_Prepodavatelya</td>
        <td text-align=center>$Docum_Nagrad</td>
        <tr>");
    }
    print("</table>");

    mysqli_close($link);
?>