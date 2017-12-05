<!DOCTYPE html>
<html>
<head>
	<title>Tes 1</title>
</head>
<body>
	<p>
		No 1 . Create a function to calculate the area of a square.<br>
		<!-- PHP UNTUK MENGHITUNG LUAS PERSEGI -->
		<?php 
			$sisi = 5 ;
			$luas = $sisi * $sisi ;
		?>
		<br>
		Jawaban<br>
		Sisi = <?php echo $sisi?> luas = <?php echo $luas?>
	</p>
	<br>

	<p>
		No 2 . write a php script to split the following string sample string 120831 expected output 12 08 31 <br>
		<!-- PHP UNTUK MEMISAHKAN ANGKA -->
		<?php
			$angka = 120831;

			$angka1 = substr($angka, 0,2);
			$angka2 = substr($angka, 2,2);
			$angka3 = substr($angka, 4,2);
		?>
		<br>
		Jawaban<br>
		Hasil = <?php echo $angka1; echo " ".$angka2; echo " ".$angka3?>
	</p>
	<br>

	<p>
		No 3 . Write a function to display the middle character of a string. <br>
		Note: a) If the length of the string is odd there will be two middle characters. <br>
		b) If the length of the string is even there will be one middle character. <br>
		Test Data: <br>
		Input a string: 350 <br> 
		Expected Output: <br>
		The middle character in the string: 5 <br>
		<!-- PHP UNTUK MENCETAK NILAI TENGAH-->
		<?php
			$input = 350;
			$output = "";

			if ($input % 2 == 0) {
				//ambil 1 angka tengah dari inputan
				$panjang = strlen($input);
				$tengah = round($panjang/2);
				$output = substr($input,$tengah-1,1);
			}else{
				//ambil 2 angka tengah dari inputan
				$panjang = strlen($input);
				$tengah = round($panjang/2);
				$output = substr($input,$tengah-1,2);
			}
		?>
		<br>
		Jawaban<br>
		Angka yang di inputkan : <?php echo $input?> <br>
		hasilnya adalah : <?php echo $output?>
	</p>
	<br>

	<p>
		No 4 . Write a function to count all vowels in a string. <br>
		Test Data: <br>
		Input the string: Drink Water <br> 
		Expected Output: <br>
		Number of  Vowels in the string: 3 <br>
		<!-- PHP UNTUK MENGAMBIL HURUF VOKAL -->
		<?php
			$kata = 'Drink ater';
			$a = substr_count($kata,'a') || substr_count($kata,'A');
			$i = substr_count($kata,'i') || substr_count($kata,'I');
			$u = substr_count($kata,'u') || substr_count($kata,'U');
			$e = substr_count($kata,'e') || substr_count($kata,'E');
			$o = substr_count($kata,'o') || substr_count($kata,'O');
			$vokal = $a+$i+$u+$e+$o;
		?>
		<br>
		Jawaban<br>
		Banyak huruf vokal : <?php echo $vokal?>
	</p>
	<br>

	<p>
		No 5 . Write a function to count all words in a string.<br> 
		Test Data:<br>
		Input the string: The quick brown fox jumps over the lazy dog.<br>
		Expected Output:<br>
		Number of words in the string: 9<br>

		<!-- PHP MENGHITUNG BANYAK KATA -->
		<?php
			$word = "The quick brown fox jumps over the lazy dog.";
			$total_kata = explode(" ", $word);
		?>
		<br>
		Jawaban<br>
		Banyak kata : <?php echo count($total_kata)?>
	</p>
	<br>

	<p>
		No 6 . Write a function to compute the future investment value at a given interest rate for a specified number of years. <br>
		Sample data (Monthly compounded) and Output:<br>
		Input the investment amount: 1000<br>
		Input the rate of interest: 10<br>
		Input number of years: 5<br>
		Expected Output:<br>
		Years    FutureValue<br>                                     
		1            1104.71<br>                                 
		2            1220.39<br>                             
		3            1348.18<br>                         
		4            1489.35<br>                     
		5            1645.31<br>
		<br>
		Jawaban<br>
		<!-- PHP UNTUK MENGHITUNG INVESTASI -->
		<?php
			$tahun = 5;
			$rating = 10.0;
			$investasi = 1000.0;
			$total = 0.0;

			echo "Years  FutureValue <br>";
			for($i = 1;$i<=$tahun;$i++){
				$total = $investasi*pow((1+(($rating/100)/12)),($i*12));

				echo $i."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$total."<br>";
			}
		?>
	</p>
	<br>

	<p>
		No 7 . Write a function to print characters between two characters (i.e. A to P ). <br>
		Note: Prints 20 characters per line<br>
		Expected Output:<br>
		( ) * + , - . / 0 1 2 3 4 5 6 7 8 9 : ;<br>
		< = > ? @ A B C D E F G H I J K L M N O<br>              
		P Q R S T U V W X Y Z [ \ ] ^ _ ` a b c<br>              
		d e f g h i j k l m n o p q r s t u v w<br>              
		x y z<br>
		<br>
		Jawaban<br>
		<!-- PHP CETAK KARAKTER DI ANTARA 2 KARAKTER -->
		<?php
			$karakter1 = ord('(');
			$karakter2 = ord('z');
			$batas = 20;

			for ($i = 1; $karakter1 <= $karakter2 ; $i++){
				echo chr($karakter1)." ";
				if ($i % $batas == 0){
					echo "<br>";
				}
				 $karakter1++;
				echo "";
			}
		?>
	</p>
</body>
</html>