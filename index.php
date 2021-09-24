<html>

<head>
    <title>Membuat Website dinamis dengan PHP dan CSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="header">
        <li><a href="index.php?page=beranda">Beranda Website Peruahaan</a></li>
        <li><a href="index.php?page=about">About Perusahaan</a></li>
        <li><a href="index.php?page=blog">Blog Peruahaan</a></li>
		<li><a href="index.php?page=alamat">Alamat Perusahaan</a></li>
		<li><a href="index.php?page=profil">Profil Perusahaan</a></li>
		<li><a href="index.php?page=baju">Produk Baju</a></li>
		<li><a href="index.php?page=sepatu">Produk Sepatu</a></li>
		<li><a href="index.php?page=tas">Produk Tas</a></li>
		<li><a href="index.php?page=sandal">Produk Sandal Gunung</a></li>
		<li><a href="index.php?page=koper">Produk Koper</a></li>
		<li><a href="index.php?page=jeans">Produk Celana Jeans</a></li>
    </section>
    <section class="content">
        <?php
        if (isset($_GET['page'])) {
            if ($_GET['page'] == "about") {
                include "about.php";
            } elseif ($_GET['page'] == "blog") {
                include "blog.php";
			} elseif ($_GET['page'] == "alamat") {
				include "alamat.php";
			} elseif ($_GET['page'] == "profil") {
				include "profil.php";
			} elseif ($_GET['page'] == "baju") {
				include "baju.php";
			} elseif ($_GET['page'] == "sepatu") {
				include "sepatu.php";
			} elseif ($_GET['page'] == "tas") {
				include "tas.php";
			} elseif ($_GET['page'] == "sandal") {
				include "sandal.php";
			} elseif ($_GET['page'] == "koper") {
				include "koper.php";
				} elseif ($_GET['page'] == "jeans") {
				include "jeans.php";
            } else {
                include "beranda.php";
            }
        } else {
            include "beranda.php";
        }
        ?>
    </section>
    <section class="footer">
        <p>
            PERUSAHAAN DIDIRIKAN PADA TAHUN 2021
        </p>
    </section>
</body>

</html>