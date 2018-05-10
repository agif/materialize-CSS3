<!doctype html>
<html>

<?php
include ('layouts/include.php');
include_once ("parsedown.php");
$parsedown = new Parsedown();
$md        = $parsedown->text('Hallo saya lagi belajar _Markdown_');
$itu       = $parsedown->text('##itu');
?>
<body>

<div class="phone-wd">

<?php include ('layouts/header.php');?>
    <?php include ('layouts/banner.php');?>

<?php
if (isset($_GET['pa'])) {
	$page = $_GET['pa'];

	switch ($page) {
		case 'home':
			include "pages/home.php";
			break;
		case 'profil':
			include "pages/profil.php";
			break;
		case 'tim-ahli':
			include "pages/tim-ahli.php";
			break;
		case 'teknologi':
			include "pages/teknologi.php";
			break;
		case 'rute':
			include "pages/rute.php";
			break;

			// Untuk Halaman Penyakit
			// Keputihan
		case 'gejala-keputihan':
			include "penyakit/keputihan/gejala-keputihan.php";
			break;
		case 'cara-merawat-keputihan':
			include "penyakit/keputihan/cara-merawat-keputihan.php";
			break;
		case 'bahaya-keputihan':
			include "penyakit/keputihan/bahaya-keputihan.php";
			break;

		case 'biaya-perawatan-keputihan':
			include "penyakit/keputihan/biaya-perawatan-keputihan.php";
			break;

			// Vaginitis
		case 'gejala-vaginitis':
			include "penyakit/vaginitis/gejala-vaginitis.php";
			break;
		case 'cara-merawat-vaginitis':
			include "penyakit/vaginitis/cara-merawat-vaginitis.php";
			break;
		case 'bahaya-vaginitis':
			include "penyakit/vaginitis/bahaya-vaginitis.php";
			break;
		case 'biaya-perawatan-vaginitis':
			include "penyakit/vaginitis/biaya-perawatan-vaginitis.php";
			break;

			// Vagina Gatal
		case 'gejala-vagina-gatal':
			include "penyakit/vagina-gatal/gejala-vagina-gatal.php";
			break;
		case 'cara-merawat-vagina-gatal':
			include "penyakit/vagina-gatal/cara-merawat-vagina-gatal.php";
			break;
		case 'bahaya-vagina-gatal':
			include "penyakit/vagina-gatal/bahaya-vagina-gatal.php";
			break;
		case 'biaya-perawatan-vagina-gatal':
			include "penyakit/vagina-gatal/biaya-perawatan-vagina-gatal.php";
			break;

			// Vulvitis
		case 'gejala-vulvitis':
			include "penyakit/vulvitis/gejala-vulvitis.php";
			break;
		case 'cara-merawat-vulvitis':
			include "penyakit/vulvitis/cara-merawat-vulvitis.php";
			break;
		case 'bahaya-vulvitis':
			include "penyakit/vulvitis/bahaya-vulvitis.php";
			break;
		case 'biaya-perawatan-vulvitis':
			include "penyakit/vulvitis/biaya-perawatan-vulvitis.php";
			break;

			// Radang Panggul
		case 'gejala-radang-panggul':
			include "penyakit/radang-panggul/gejala-radang-panggul.php";
			break;
		case 'cara-merawat-radang-panggul':
			include "penyakit/radang-panggul/cara-merawat-radang-panggul.php";
			break;
		case 'bahaya-radang-panggul':
			include "penyakit/radang-panggul/bahaya-radang-panggul.php";
			break;
		case 'biaya-perawatan-radang-panggul':
			include "penyakit/radang-panggul/biaya-perawatan-radang-panggul.php";
			break;

			// Erosi Serviks
		case 'gejala-erosi-serviks':
			include "penyakit/erosi-serviks/gejala-erosi-serviks.php";
			break;
		case 'cara-merawat-erosi-serviks':
			include "penyakit/erosi-serviks/cara-merawat-erosi-serviks.php";
			break;
		case 'bahaya-erosi-serviks':
			include "penyakit/erosi-serviks/bahaya-erosi-serviks.php";
			break;
		case 'biaya-perawatan-erosi-serviks':
			include "penyakit/erosi-serviks/biaya-perawatan-erosi-serviks.php";
			break;

			// Operasi Ginekologis
		case 'perbaikan-selaput-dara':
			include "penyakit/operasi-ginekologis/perbaikan-selaput-dara.php";
			break;
		case 'pengencangan-vagina':
			include "penyakit/operasi-ginekologis/operasi-pengencangan-alat-kelamin-wanita.php";
			break;

			// Penyakit Lainnya
			// case 'pelajari-lebih-lanjut':
			//     include "penyakit/penyakit-lainnya/pelajari-lebih-lanjut.php";
			//     break;
			// case 'konsultasi-dokter':
			//     include "penyakit/penyakit-lainnya/konsultasi-dokter.php";
			//     break;

			// Operasi Kewanitaan (Vagina)
			// case 'operasi-kewanitaan':
			//     include "penyakit/pengencangan_vagina/operasi-pengencangan-alat-kelamin-wanita.php";
			//     break;
			// case 'cara-pengencangan-kewanitaan':
			//     include "penyakit/pengencangan_vagina/cara-pengencangan-alat-kelamin-wanita.php";
			//     break;
		case 'biaya-pengencangan-kewanitaan':
			include "penyakit/pengencangan_vagina/biaya-operasi-pengencangan-alat-kelamin-wanita.php";
			break;

		case '404':
			include "errors/404.php";
			break;

			// Cystitis
		case 'pengertian-cystitis':
			include "penyakit/cystitis/cystitis.php";
			break;
		case 'gejala-cystitis':
			include "penyakit/cystitis/gejala-cystitis.php";
			break;
		case 'cara-merawat-cystitis':
			include "penyakit/cystitis/cara-merawat-cystitis.php";
			break;
		case 'bahaya-cystitis':
			include "penyakit/cystitis/bahaya-cystitis.php";
			break;
		case 'biaya-perawatan-cystitis':
			include "penyakit/cystitis/biaya-perawatan-cystitis.php";
			break;
		case 'klinik-perawatan-cystitis':
			include "penyakit/cystitis/klinik-perawatan-cystitis.php";
			break;
		case 'penyebab-cystitis':
			include "penyakit/cystitis/penyebab-cystitis.php";
			break;

    // Ini untuk Radang Kemih Besok hari sabtu
    case 'penyebab-radang-kandung-kemih':
			include "penyakit/rkk/penyebab-rkk.php";
			break;
    case 'gejala-radang-kandung-kemih':
  		include "penyakit/rkk/gejala-rkk.php";
  		break;
    case 'radang-kandung-kemih':
      include "penyakit/rkk/rkk.php";
      break;
    case 'bahaya-radang-kandung-kemih':
			include "penyakit/rkk/bahaya-rkk.php";
			break;

      // case selanjutnya ada di folder download

			// Default Halaman
		default:
			echo "<br><center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
			break;
	}
} else {
	include "pages/home.php";
}
?>

<?php include ('layouts/footer.php');?>
</div>
</body>
</html>
