<?php
// File tempat menyimpan data
$file = 'data.csv';

// Ambil data dari POST
$nama   = isset($_POST['nama']) ? $_POST['nama'] : '';
$ip     = isset($_POST['ip']) ? $_POST['ip'] : '';
$lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
$waktu  = date('Y-m-d H:i:s');

// Validasi
if ($nama && $ip && $lokasi) {
    $data = [$nama, $ip, $lokasi, $waktu];

    // Simpan ke CSV
    $fp = fopen($file, 'a');
    fputcsv($fp, $data);
    fclose($fp);

    echo "✅ Absensi berhasil disimpan!";
} else {
    echo "❌ Data tidak lengkap.";
}
?>
