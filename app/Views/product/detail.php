<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail Barang</h1>
            <div class="row g-3">
                <div class="col-6">
                    <table class="table table-striped mt-5">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td><?= $product['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td><?= $product['cpu']; ?></td>
                            </tr>
                            <tr>
                                <td>GPU</td>
                                <td><?= $product['gpu']; ?></td>
                            </tr>
                            <tr>
                                <td>Memory</td>
                                <td><?= $product['memori']; ?></td>
                            </tr>
                            <tr>
                                <td>Display</td>
                                <td><?= $product['display']; ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?= number_format($product['harga'], 2, ',', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <img src="/img/product/<?= $product['gambar']; ?>" class="img-fluid mt-5 ms-4" alt="...">
                </div>
            </div>
            <a href="/product" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>