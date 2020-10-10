<?php

	$nilai = -1;

	echo "Nilai : $nilai<br>";

	switch(true){
		case ($nilai >= 80 && $nilai <= 100) :
			echo "Kamu dapat A";
			break;
		case ($nilai >= 70 && $nilai < 80) :
			echo "Kamu dapat B";
			break;
		case ($nilai >= 60 && $nilai < 70) :
			echo "Kamu dapat C";
			break;
		case ($nilai = 0 && $nilai < 60) :
			echo "Kamu dapat D";
			break;
		default :
			echo "Kamu Belum Ujian, Harap Ujian Susulan";
	}

?>

