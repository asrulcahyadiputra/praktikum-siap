<?= $this->extend('main') ?>

<?= $this->section('content')?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Produk</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengelola</th>
                                    <th>Nama Unit Bank Sampah</th>
                                    <th>Jumlah Anggota</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=$this->endsection()?>


<?php $this->section('custom-js')?>
<script>

    const tableData = $('#table-data tbody');

    $(document).ready(function (){
        getData();
    })

    function getData() {
        $.ajax({
            type: 'get',
            url : "<?=site_url('test-api')?>",
            dataType: 'json',
            success: function (res) {
                console.log(res);
                var data = res;
                let html = '';
                let no = 1;
                for (let i = 0; i < data.length; i++){
                    let line = data[i];
                    html += `<tr>
                        <td>${no}</td>
                        <td>${line.nama_pengelola}</td>
                        <td>${line.nama_unit_bank_sampah}</td>
                        <td>${line.jumlah_anggota}</td>
                    </tr>`
                    no++
                }
               tableData.html(html);
            },
            error: function (err){
                console.log('error= ',err);
            }
        })
    }
</script>
<?php $this->endSection() ?>
