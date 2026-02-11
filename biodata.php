<?php

$nama_lengkap = "Chayu Mutia";
$nama_panggilan = "Chayu";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 13;
$bulan_lahir = 10;
$tahun_lahir = 2008;

$alamat = "JL Wologito Utara RT 3/ RW 6, Kembangarum, Semarang Barat, Jawa Tengah";

$hobi = ["Membaca","Mendengarkan Musik","Menonton"];

$skills = [
 "HTML"=>80,
 "CSS"=>25,
 "PHP"=>50,
 "JavaScript"=>0
];

$pendidikan = [
 ["SD","SDN Kalibanteng Kulon 02","2016","2022"],
 ["SMP","SMPN 19 Semarang","2022","2025"],
 ["SMK","SMKN 8 Semarang","2025","2028"]
];

$kewarganegaraan = "Indonesia";
$no_wa = "083897183906";
$email = "mutiachayu@gmail.com";

$makanan = ["Bakso","Mie Ayam","Nasi Goreng"];
$minuman = ["Es Teh","Jus Jeruk","Susu"];

$motto = "Setiap Kesulitan Ada Kemudahan. Setiap Masalah Pasti Ada Solusi";

$umur = date("Y") - $tahun_lahir;

?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata Chayu</title>

<!-- ICON FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:Arial;
background:linear-gradient(to right,#fbc2eb,#a6c1ee);
margin:0;
}

.box{
width:85%;
margin:30px auto;
background:white;
padding:25px;
border-radius:15px;
}

h1{
text-align:center;
color:#7a1fa2;
}

.profil{
text-align:center;
margin-bottom:20px;
}

.profil img{
width:150px;
border-radius:50%;
border:3px solid purple;
margin-bottom:10px;
}

.card{
background:#f2f2f2;
padding:15px;
margin-top:20px;
border-radius:10px;
}

.bar{
height:15px;
background:purple;
border-radius:8px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #999;
padding:8px;
text-align:center;
}

.btn{
display:inline-block;
margin-top:20px;
background:#7a1fa2;
color:white;
padding:10px 20px;
border-radius:10px;
text-decoration:none;
font-weight:bold;
}

.btn:hover{
background:#5c1580;
}

marquee{
color:red;
font-weight:bold;
}

i{
color:#7a1fa2;
margin-right:5px;
}

</style>
</head>

<body>

<div class="box">

<h1><i class="fa-solid fa-user"></i> BIODATA DIRI</h1>

<!-- FOTO -->
<div class="profil">
<img src="fotochayu.jpeg">
</div>


<!-- DATA DIRI -->
<div class="card">

<p><i class="fa-solid fa-id-card"></i> <b>Nama Lengkap:</b> <?= $nama_lengkap ?></p>
<p><i class="fa-solid fa-user"></i> <b>Nama Panggilan:</b> <?= $nama_panggilan ?></p>
<p><i class="fa-solid fa-mosque"></i> <b>Agama:</b> <?= $agama ?></p>
<p><i class="fa-solid fa-location-dot"></i> <b>Lahir:</b> <?= $tempat_lahir ?>, <?= $tanggal_lahir ?>/<?= $bulan_lahir ?>/<?= $tahun_lahir ?></p>
<p><i class="fa-solid fa-hourglass-half"></i> <b>Umur:</b> <?= $umur ?> Tahun</p>
<p><i class="fa-solid fa-house"></i> <b>Alamat:</b> <?= $alamat ?></p>
<p><i class="fa-brands fa-whatsapp"></i> <b>WA:</b> <?= $no_wa ?></p>
<p><i class="fa-solid fa-envelope"></i> <b>Email:</b> <?= $email ?></p>
<p><i class="fa-solid fa-flag"></i> <b>Kewarganegaraan:</b> <?= $kewarganegaraan ?></p>

</div>


<!-- HOBI -->
<div class="card">

<h3><i class="fa-solid fa-heart"></i> Hobi</h3>

<ul>
<?php foreach($hobi as $h){ ?>
<li><?= $h ?></li>
<?php } ?>
</ul>

</div>


<!-- MAKANAN -->
<div class="card">

<h3><i class="fa-solid fa-utensils"></i> Makanan & Minuman</h3>

<b>Makanan</b>
<ul>
<?php foreach($makanan as $m){ ?>
<li><?= $m ?></li>
<?php } ?>
</ul>

<b>Minuman</b>
<ul>
<?php foreach($minuman as $d){ ?>
<li><?= $d ?></li>
<?php } ?>
</ul>

</div>


<!-- SKILL -->
<div class="card">

<h3><i class="fa-solid fa-laptop-code"></i> Skills</h3>

<?php foreach($skills as $s=>$n){ ?>

<?= $s ?>

<div style="background:#ccc;border-radius:8px">
<div class="bar" style="width:<?= $n ?>%"></div>
</div>

<?php } ?>

</div>

<!-- PENDIDIKAN -->
<div class="card">

<h3><i class="fa-solid fa-school"></i> Pendidikan</h3>

<table>

<tr>
<th>Tingkat</th>
<th>Sekolah</th>
<th>Mulai</th>
<th>Lulus</th>
</tr>

<?php foreach($pendidikan as $p){ ?>
<tr>
<td><?= $p[0] ?></td>
<td><?= $p[1] ?></td>
<td><?= $p[2] ?></td>
<td><?= $p[3] ?></td>
</tr>
<?php } ?>

</table>

</div>


<!-- CITA -->
<div class="card">

<h3><i class="fa-solid fa-star"></i> Keinginan 10 Tahun Lagi</h3>

<p>
Namaku Chayu. Sekarang tahun 2026 dan aku berusia 18 tahun. Sepuluh tahun ke depan, tepatnya di tahun 2036 saat aku berumur 28 tahun, aku ingin menjadi pribadi yang lebih kuat, mandiri, dan siap menghadapi berbagai tantangan hidup.

Aku ingin lulus dari FTTM dengan gelar S.T dan bekerja di bidang pertambangan, ataupun di Pertamina, sesuai dengan jurusan yang aku ambil. Selain itu, aku juga ingin punya pekerjaan sampingan sebagai software engineer supaya bisa terus belajar dan menambah pengalaman.

Untuk mewujudkan semua itu, aku akan belajar lebih giat, fokus dengan apa yang aku jalani sekarang, mencari pengalaman sebanyak mungkin, dan mulai menyiapkan masa depan dari sekarang.
</p>

</div>

<!-- TOMBOL -->
<center>
<a href="jadwal.php" class="btn">
<i class="fa-solid fa-calendar-days"></i> Lihat Jadwal
</a>
</center>

<br>

<marquee><?= $motto ?></marquee>

</div>

</body>
</html>
