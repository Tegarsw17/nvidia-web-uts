<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td id="content"></td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
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