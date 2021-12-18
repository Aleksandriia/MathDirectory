<!-- Ввод данных в таблицу 
            не работает -->
<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
</head>
<body>
	<div>
		<?php
      $host='127.0.0.1';
      $database='dostijenia';
      $user='root';
      $password='';
//"Ошибка: " . $conn->connect_error
//"Ошибка" .mysqli_error($link)
      $link=mysqli_connect ($host,$user,$password,$database) or die("Ошибка" .mysqli_error($link));
      if(isset($_POST['Name_Olimpiad']) && isset($_POST['FIO_Studenta']) && isset($_POST['Group_studenta']) && isset($_POST['Data_Providen']) && isset($_POST['FIO_Prepodavatelya']) && isset($_POST['Docum_Nagrad'])) {
				//$id_Dostijen = $_POST['id_Dostijen'];
      	$Name_Olimpiad = $_POST['Name_Olimpiad'];
      	$FIO_Studenta = $_POST['FIO_Studenta'];
      	$Group_studenta = $_POST['Group_studenta'];
      	$Data_Providen = $_POST['Data_Providen'];
      	$FIO_Prepodavatelya = $_POST['FIO_Prepodavatelya'];
      	$Docum_Nagrad = $_POST['Docum_Nagrad'];

      	if ($Name_Olimpiad && $FIO_Studenta && $Group_studenta && $Data_Providen && $FIO_Prepodavatelya && $Docum_Nagrad) {
      		$query="INSERT INTO 'dostijenia'.`dostijenia_studentov`(`Name_Olimpiad`, `FIO_Studenta`, `Group_studenta`, `Data_Providen`, `FIO_Prepodavatelya`, `Docum_Nagrad`) VALUES (`$Name_Olimpiad`, `$FIO_Studenta`, `$Group_studenta`, `$Data_Providen`, `$FIO_Prepodavatelya`, `$Docum_Nagrad`)";
			  $result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));
			  //INSERT INTO `dostijenia_studentov`(`id_Dostijen`, `Name_Olimpiad`, `FIO_Studenta`, `Group_studenta`, `Data_Providen`, `FIO_Prepodavatelya`, `Docum_Nagrad`) VALUES ('$Name_Olimpiad','$FIO_Studenta','$Group_studenta','$Data_Providen','$FIO_Prepodavatelya','$Docum_Nagrad','[value-7]')
				
				//INSERT INTO `dostijenia_studentov`(`id_Dostijen`, `Name_Olimpiad`, `FIO_Studenta`, `Group_studenta`, `Data_Providen`, `FIO_Prepodavatelya`, `Docum_Nagrad`) VALUES ('$Name_Olimpiad', '$FIO_Studenta', '$Group_studenta', '$Data_Providen', '$FIO_Prepodavatelya', '$Docum_Nagrad')"
			  
/*
				while($a=mysqli_fetch_array($result))
				{
					$id_Dostijen=$a['id_Dostijen'];
					$Name_Olimpiad=$a['Name_Olimpiad'];
					$FIO_Studenta=$a['FIO_Studenta'];
					$Group_studenta=$a['Group_studenta'];
					$Data_Providen=$a['Data_Providen'];
					$FIO_Prepodavatelya=$a['FIO_Prepodavatelya'];
					$Docum_Nagrad=$a['Docum_Nagrad'];
					print("<tr>
					<td>$id_Dostijen</td>
					<td>$Name_Olimpiad</td>
					<td>$FIO_Studenta</td>
					<td>$Group_studenta</td>
					<td>$Data_Providen</td>
					<td>$FIO_Prepodavatelya</td>
					<td>$Docum_Nagrad</td>
					<tr>");
				}
				*/

				if($link->query($query)){
						echo "Данные успешно добавлены";
				} else{
						echo "Ошибка" . mysqli_error($link);
				}

				mysqli_close($link);
      	}
	  }
	  
	  

		?>
	</div>

	<h3>Регистрация</h3>
	<form method="POST">
		<div>
			<!--
			<div style="margin-bottom: 8px;">
				<label for="id_Dostijen" style="width: 185px; display: inline-block;">Номер:</label>
				<input type="text" name="id_Dostijen" id="id_Dostijen" required/>
			</div>-->

			<div style="margin-bottom: 8px;">
				<label for="Name_Olimpiad" style="width: 185px; display: inline-block;">Название олимпиады:</label>
				<input type="text" name="Name_Olimpiad" id="Name_Olimpiad" required/>
			</div>

			<div style="margin-bottom: 8px;">
				<label for="FIO_Studenta" style="width: 185px; display: inline-block;">ФИО студента:</label>
				<input type="text" name="FIO_Studenta" id="FIO_Studenta" required/>
			</div>

			<div style="margin-bottom: 8px;">
				<label for="Group_studenta" style="width: 185px; display: inline-block;">Группа студента:</label>
				<input type="text" name="Group_studenta" id="Group_studenta" required/>
			</div>

			<div style="margin-bottom: 8px;">
				<label for=" 	Data_Providen" style="width: 185px; display: inline-block;">Дата проведения:</label>
				<input type="text" name=" 	Data_Providen" id="Data_Providen" required/>
			</div>

			<div style="margin-bottom: 8px;">
				<label for="FIO_Prepodavatelya" style="width: 185px; display: inline-block;">ФИО преподавателя:</label>
				<input type="text" name="FIO_Prepodavatelya" id="FIO_Prepodavatelya" required/>
			</div>
			<div style="margin-bottom: 8px;">
				<label for="Docum_Nagrad" style="width: 185px; display: inline-block;">Награда (документ):</label>
				<input type="text" name="Docum_Nagrad" id="Docum_Nagrad" required/>
			</div>
		</div>
		<input type="submit" value="Зарегистрироваться">
	</form>
</body>
</html>