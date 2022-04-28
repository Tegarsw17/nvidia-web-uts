<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Company</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Job Role</label>
                    <select id="inputState" class="form-select">
                        <option selected>Pelajar/Mahasiswa</option>
                        <option>Pegawai Negeri Sipil</option>
                        <option>Pegawai Swasta</option>
                        <option>Tentara</option>
                        <option>Pengusaha</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Indonesia</option>
                        <option>Malaysia</option>
                        <option>Singapura</option>
                        <option>Brunei</option>
                        <option>Vietnam</option>
                        <option>Thailand</option>
                        <option>Filipina</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">What's Your Question</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Service VGA">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" disabled>Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>