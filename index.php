<?php

include 'layout/header.php';

$data_barang = select("SELECT * FROM barang") // barang itu adalah nama tabel yang di ambil di database

?>

<div class="container mt-5">
    <!-- perintah untuk memberikan spasi antara navbar dengan tulisan dibawahnya -->
    <h1>Data Barang Rasl_Computer</h1>
    <hr>
    <a href="form-tambah.php" class="btn btn-primary mt-2 mb-0">Tambah Barang</a>
    <!-- codingan Bagian Tabel -->
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $barang) : ?>
                <tr>
                    <td><?= $no++; ?></td> <!--  no didapatkan dari tabel barang yang di database -->
                    <td><?= $barang['nama']; ?></td> <!--  nama didapatkan dari tabel barang yang di database -->
                    <td><?= $barang['jumlah']; ?></td> <!--  jumlah didapatkan dari tabel barang yang di database -->
                    <td>Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></td> <!--  harga didapatkan dari tabel barang yang di database -->
                    <td><?= date('d/m/Y | H:i:s', strtotime($barang['tanggal'])); ?></td> <!--  tanggal didapatkan dari tabel barang yang di database -->
                    <td width="15%" class="text-center">
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php

include 'layout/footer.php';
?>