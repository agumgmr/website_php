<?php include('inc/header.php'); ?>

<h1>Selamat Datang di Situs Artikel</h1>
<p>Temukan berbagai artikel menarik dari berbagai kategori.</p>

<h2>Kategori Artikel</h2>
<ul>
<?php
$base = __DIR__ . '/artikel';
$kategori_list = array_filter(glob($base . '/*'), 'is_dir');

foreach ($kategori_list as $kategori_path) {
    $kategori = basename($kategori_path);
    $kategori_nama = ucwords(str_replace('-', ' ', $kategori));
    echo "<li><a href=\"?kategori=$kategori\">$kategori_nama</a></li>";
}
?>
</ul>

<?php
if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $folder = "$base/$kategori";

    if (is_dir($folder)) {
        echo "<h2>Artikel dalam Kategori: " . ucwords(str_replace('-', ' ', $kategori)) . "</h2><ul>";
        $files = glob($folder . '/*.php');

        if (empty($files)) {
            echo "<li>Tidak ada artikel dalam kategori ini.</li>";
        } else {
            foreach ($files as $file) {
                $filename = basename($file); // contoh: teknologi-5g.php
                $title = ucwords(str_replace(['-', '.php'], [' ', ''], $filename));
                $url = "/artikel/$kategori/$filename";
                echo "<li><a href=\"$url\">$title</a></li>";
            }
        }

        echo "</ul>";
    } else {
        echo "<p><strong>Kategori tidak ditemukan.</strong></p>";
    }
}
?>

<?php include('inc/footer.php'); ?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9253708767393970"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-9253708767393970"
     data-ad-slot="9174681194"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


USDC_BSC: 0x0e4bDa59D09b4BeEe953ad5F495aF216745B4651<br>
USDC_ETH: 0x0e4bDa59D09b4BeEe953ad5F495aF216745B4651<br>
USDT_ETH: 0x0e4bDa59D09b4BeEe953ad5F495aF216745B4651<br>
USDT_BSC: 0x0e4bDa59D09b4BeEe953ad5F495aF216745B4651<br>
BTC: bc1qkrnguyx4vrzwhlrjk88wxm8rfzvap2ge7gt775<br>