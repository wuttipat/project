<?php
include "../database/database.php";
    $map = array();
$map[]= array(1=> 1);
$map[]= array(1=> 2);
$map[]= array(1=> 3);
$map[]= array(2=> 4);
$map[]= array(2=> 5);
$map[]= array(2=> 8);
$map[]= array(2=> 1);
$map[]= array(2=> 9);
$map[]= array(2=> 10);
$map[]= array(2=> 11);
$map[]= array(2=> 12);
$map[]= array(2=> 13);
$map[]= array(2=> 3);
$map[]= array(2=> 14);
$map[]= array(2=> 15);
$map[]= array(2=> 1);
$map[]= array(3=> 11);
$map[]= array(3=> 16);
$map[]= array(3=> 18);
$map[]= array(3=> 19);
$map[]= array(3=> 20);
$map[]= array(3=> 21);
$map[]= array(3=> 22);
$map[]= array(3=> 23);
$map[]= array(3=> 24);
$map[]= array(3=> 25);
$map[]= array(3=> 26);
$map[]= array(3=> 27);
$map[]= array(3=> 28);
$map[]= array(3=> 29);
$map[]= array(3=> 30);
$map[]= array(3=> 31);
$map[]= array(3=> 32);
$map[]= array(3=> 33);
$map[]= array(3=> 34);
$map[]= array(4=> 35);
$map[]= array(4=> 36);
$map[]= array(4=> 37);
$map[]= array(4=> 38);
$map[]= array(4=> 31);
$map[]= array(5=> 39);
$map[]= array(5=> 40);
$map[]= array(5=> 43);
$map[]= array(6=> 44);
$map[]= array(6=> 45);
$map[]= array(6=> 46);
$map[]= array(6=> 47);
$map[]= array(6=> 48);
$map[]= array(7=> 49);
$map[]= array(7=> 50);
$map[]= array(7=> 51);
$map[]= array(7=> 52);
$map[]= array(7=> 53);
$map[]= array(7=> 54);
$map[]= array(8=> 56);
$map[]= array(8=> 57);
$map[]= array(8=> 41);
$map[]= array(8=> 58);
$map[]= array(8=> 59);
$map[]= array(8=> 60);
$map[]= array(8=> 61);
$map[]= array(8=> 62);
$map[]= array(8=> 63);
$map[]= array(8=> 64);
$map[]= array(8=> 60);
$map[]= array(8=> 65);
$map[]= array(8=> 66);
$map[]= array(8=> 67);
$map[]= array(8=> 68);
$map[]= array(8=> 3);
$map[]= array(8=> 69);
$map[]= array(9=> 70);
$map[]= array(9=> 71);
$map[]= array(9=> 72);
$map[]= array(9=> 73);
$map[]= array(9=> 74);
$map[]= array(9=> 75);
$map[]= array(9=> 76);
$map[]= array(10=> 43);
$map[]= array(10=> 77);
$map[]= array(10=> 78);
$map[]= array(10=> 79);
$map[]= array(10=> 59);
$map[]= array(10=> 1);
$map[]= array(10=> 15);
$map[]= array(10=> 80);
$map[]= array(10=> 81);
$map[]= array(10=> 82);
$map[]= array(10=> 83);
$map[]= array(10=> 84);
$map[]= array(10=> 85);
$map[]= array(10=> 86);
$map[]= array(10=> 87);
$map[]= array(10=> 77);
$map[]= array(10=> 88);
$map[]= array(10=> 3);
$map[]= array(10=> 89);
$map[]= array(10=> 2);
$map[]= array(10=> 90);
$map[]= array(10=> 91);
$map[]= array(10=> 92);
$map[]= array(10=> 93);
$map[]= array(11=> 94);
$map[]= array(11=> 95);
$map[]= array(11=> 61);
$map[]= array(12=> 67);
$map[]= array(12=> 59);
$map[]= array(12=> 97);
$map[]= array(12=> 98);
$map[]= array(12=> 99);
$map[]= array(12=> 100);
$map[]= array(12=> 15);
$map[]= array(12=> 101);
$map[]= array(12=> 102);
$map[]= array(12=> 103);
$map[]= array(12=> 104);
$map[]= array(12=> 105);
$map[]= array(12=> 106);
$map[]= array(13=> 107);
$map[]= array(13=> 108);
$map[]= array(13=> 109);
$map[]= array(13=> 84);
$map[]= array(14=> 110);
$map[]= array(14=> 15);
$map[]= array(14=> 25);
$map[]= array(14=> 112);
$map[]= array(14=> 113);
$map[]= array(14=> 114);
$map[]= array(14=> 115);
$map[]= array(14=> 67);
$map[]= array(14=> 116);
$map[]= array(14=> 117);
$map[]= array(14=> 118);
$map[]= array(15=> 119);
$map[]= array(15=> 120);
$map[]= array(15=> 121);
$map[]= array(15=> 122);
$map[]= array(15=> 123);
$map[]= array(16=> 124);
$map[]= array(16=> 125);
$map[]= array(16=> 126);
$map[]= array(16=> 119);
$map[]= array(16=> 127);
$map[]= array(16=> 128);
$map[]= array(17=> 129);
$map[]= array(17=> 130);
$map[]= array(17=> 131);
$map[]= array(17=> 119);
$map[]= array(17=> 132);
$map[]= array(18=> 133);
$map[]= array(18=> 134);
$map[]= array(18=> 135);
$map[]= array(18=> 136);
$map[]= array(18=> 137);
$map[]= array(19=> 138);
$map[]= array(19=> 139);
$map[]= array(19=> 140);
$map[]= array(19=> 141);
$map[]= array(19=> 142);
$map[]= array(19=> 143);
$map[]= array(19=> 144);
$map[]= array(20=> 145);
$map[]= array(20=> 146);
$map[]= array(20=> 84);
$map[]= array(20=> 147);
$map[]= array(20=> 148);
$map[]= array(20=> 149);
$map[]= array(20=> 150);
$map[]= array(20=> 151);
$map[]= array(20=> 152);
$map[]= array(20=> 15);
$map[]= array(21=> 9);
$map[]= array(21=> 56);
$map[]= array(21=> 41);
$map[]= array(21=> 154);
$map[]= array(21=> 155);
$map[]= array(22=> 15);
$map[]= array(22=> 156);
$map[]= array(22=> 157);
$map[]= array(23=> 158);
$map[]= array(23=> 159);
$map[]= array(23=> 160);
$map[]= array(23=> 161);
$map[]= array(23=> 84);
$map[]= array(23=> 14);
$map[]= array(23=> 162);
$map[]= array(23=> 163);
$map[]= array(23=> 164);
$map[]= array(23=> 165);
$map[]= array(23=> 166);
$map[]= array(24=> 58);
$map[]= array(24=> 84);
$map[]= array(24=> 167);
$map[]= array(24=> 168);
$map[]= array(24=> 169);
$map[]= array(24=> 170);
$map[]= array(24=> 171);
$map[]= array(24=> 172);
$map[]= array(24=> 173);
$map[]= array(24=> 174);
$map[]= array(24=> 2);
$map[]= array(25=> 175);
$map[]= array(25=> 176);
$map[]= array(25=> 177);
$map[]= array(25=> 178);
$map[]= array(25=> 149);
$map[]= array(25=> 179);
$map[]= array(25=> 82);
$map[]= array(25=> 10);
$map[]= array(25=> 180);
$map[]= array(25=> 182);
$map[]= array(25=> 183);
$map[]= array(25=> 184);
$map[]= array(25=> 77);
$map[]= array(25=> 152);
$map[]= array(26=> 185);
$map[]= array(26=> 186);
$map[]= array(26=> 187);
$map[]= array(26=> 63);
$map[]= array(26=> 61);
$map[]= array(26=> 15);
$map[]= array(26=> 189);
$map[]= array(26=> 190);
$map[]= array(26=> 192);
$map[]= array(26=> 193);
$map[]= array(26=> 194);
$map[]= array(26=> 195);
$map[]= array(27=> 196);
$map[]= array(27=> 197);
$map[]= array(27=> 198);
$map[]= array(27=> 41);
$map[]= array(27=> 15);
$map[]= array(27=> 84);
$map[]= array(27=> 199);
$map[]= array(27=> 200);
$map[]= array(27=> 201);
$map[]= array(28=> 202);
$map[]= array(28=> 25);
$map[]= array(28=> 58);
$map[]= array(29=> 2);
$map[]= array(29=> 203);
$map[]= array(29=> 204);
$map[]= array(29=> 205);
$map[]= array(30=> 58);
$map[]= array(30=> 195);
$map[]= array(30=> 206);
$map[]= array(31=> 207);
$map[]= array(31=> 208);
$map[]= array(31=> 209);
$map[]= array(31=> 15);
$map[]= array(31=> 210);
$map[]= array(31=> 190);
$map[]= array(31=> 211);
$map[]= array(31=> 212);
$map[]= array(31=> 213);
$map[]= array(32=> 214);
$map[]= array(32=> 215);
$map[]= array(32=> 25);
$map[]= array(32=> 58);
$map[]= array(33=> 216);
$map[]= array(33=> 25);
$map[]= array(33=> 1);
$map[]= array(33=> 9);
$map[]= array(34=> 219);
$map[]= array(37=> 149);
$map[]= array(37=> 59);
$map[]= array(41=> 220);
$map[]= array(41=> 187);
$map[]= array(41=> 221);
$map[]= array(41=> 222);
$map[]= array(41=> 118);
$map[]= array(42=> 223);
$map[]= array(42=> 59);
$map[]= array(42=> 127);
$map[]= array(42=> 25);
$map[]= array(44=> 58);
$map[]= array(45=> 225);
$map[]= array(45=> 226);
$map[]= array(45=> 227);
$map[]= array(45=> 228);
$map[]= array(45=> 229);
$map[]= array(45=> 230);
$map[]= array(45=> 67);
$map[]= array(46=> 187);
$map[]= array(46=> 231);
$map[]= array(46=> 232);
$map[]= array(46=> 3);
$map[]= array(46=> 233);
$map[]= array(47=> 234);
$map[]= array(47=> 67);
$map[]= array(47=> 235);
$map[]= array(47=> 84);
$map[]= array(47=> 15);
$map[]= array(47=> 198);
$map[]= array(47=> 236);
$map[]= array(47=> 237);
$map[]= array(47=> 41);
$map[]= array(47=> 238);
$map[]= array(47=> 31);
$map[]= array(47=> 2);
$map[]= array(47=> 239);
$map[]= array(47=> 240);
$map[]= array(47=> 15);
$map[]= array(47=> 84);
$map[]= array(47=> 118);
$map[]= array(47=> 241);

foreach($map as $key => $value){
//  	key($valuee)
	foreach($value as $keys => $values){
		$data = array(
			'id_disease' => $keys,
			'id_symptom' => $values	
		);
		db_insert('map_disease', $data);
	}
}
?>
