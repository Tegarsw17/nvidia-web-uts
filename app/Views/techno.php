<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-4">Technologise</h1>
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/technologies/battery-boost/battery-boost-og-1200x627.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BatteryBoost</h5>
                    <p class="card-text">An ultra-efficient mode that delivers the same great 30+ FPS experience, but with up to 2x longer battery life while gaming.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajax({
        type: "GET",
        url: "http://devel.crissad.com/api/nvidia",
        success: function(data) {
            $('#content').html($(data).find('#content').html())
        },
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    });
</script>
<?= $this->endSection(); ?>