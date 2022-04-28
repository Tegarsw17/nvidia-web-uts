<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Product</h1>

            <div class="col-4">
                <form action="" method="post">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Cari Barang ..." name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Find</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <!-- looping dari sini -->
                <?php foreach ($list as $l) : ?>
                    <div class="col">
                        <div class="card my-2" style="width: 18rem;">
                            <img src="/img/product/<?= $l['gambar']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $l['nama']; ?></h5>
                                <p class="card-text fs-4 fw-bold">Rp. <?= number_format($l['harga'], 2, ',', '.'); ?></p>
                                <a href="/product/detail/<?= $l['id']; ?>" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Sampe Sini -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>