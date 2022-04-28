<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Versi</th>
                        <th scope="col">Operating System</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col" class="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $l) : ?>
                        <tr>
                            <td><?= $l['versi']; ?></td>
                            <td><?= $l['os']; ?></td>
                            <td><?= $l['ukuran']; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary">Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>