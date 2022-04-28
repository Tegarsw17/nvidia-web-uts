<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center mb-3 text-success">NVIDIA</h1>
                    Nvidia Profile Inspector (NPI) is an open source third-party tool created for pulling up and editing application profiles within the Nvidia display drivers. It works much like the Manage 3D settings page in the Nvidia Control Panel but goes more in-depth and exposes settings and offers functionality not available through the native control panel. <br>

                    <br> The tool was spun out of the original Nvidia Inspector which featured an overclocking utility and required the user to create a shortcut to launch the profile editor separately. <br>

                    <br> As of July 2020, Nvidia Profile Inspector sees maintenance updates released every couple of months, keeping it aligned with changes introduced in newer versions of the drivers. As of April 2022, a unofficial update was released with the newer API from the new drivers.
                    <br>
                    <img src="/img/nvidia_logo.png" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>