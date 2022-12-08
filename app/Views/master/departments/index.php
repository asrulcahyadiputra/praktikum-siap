<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!-- Start Content-->
<div class="container-fluid">

    <div class="row" id="data-content">
        <div class="col-12">
            <div class="card-box">
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="card-title">
                            <h4>Data Departemen</h4>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" id="btn-tambah" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover" id="table-data">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th class="text-center">Aksi</th>
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
    </div>

    <form method="POST" id="form-tambah" style="display:none;">

        <input type="hidden" class="form-type" value="post">
        <div class="row">
            <div class="container">
                <div class="col-6 mx-auto">
                    <div class="card-box">
                        <div class="card-title">
                            <h4>
                                <a href="#" id="btn-kembali" class="" title="Kembali"> <i class="fas fa-arrow-left"></i> </a>
                                <span id="form-title">FORM TITLE</span>
                            </h4>
                        </div>


                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama Departemen</label>
                                    <input type="text" class="form-control form-control-sm" name="nama" id="nama" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end row -->
</div>
<!-- container-fluid -->
<?= $this->endSection() ?>

<?= $this->section('custom-js') ?>

<script>
    const tableData = $('#table-data');
    const dataContent = $('#data-content');
    const formTambah = $('#form-tambah');
    const btnTambah = $('#btn-tambah');
    const btnKembali = $('#btn-kembali');
    const formTitle = $('#form-title');

    $(document).ready(function() {
        getData();
    })

    let actionHtml = "<a href='javascript:void(0)' class='text-warning'><i class='fa fa-edit'></i></a>"

    let dataTables = tableData.DataTable({
        "columnDefs": [
            {
                "searchable": true,
                "orderable": false,
                "targets": 2,
                'defaultContent': actionHtml,
                "className": 'text-center'
            }
        ],
        "columns": [
            {
                'data': 'department_id'
            },
            {
                'data': 'department_name'
            },
        ]
    })

    // datatables.on('order.dt search.dt', function() {
    //     datatables.column(0, {
    //         search: 'applied',
    //         order: 'applied'
    //     }).nodes().each(function(cell, i) {
    //         cell.innerHTML = i + 1;
    //     });
    // }).draw();

    function getData() {
        dataTables.clear().draw();
        $.ajax({
            type: 'get',
            url: '<?= site_url("departments") ?>',
            dataType: 'json',
            success: function(res){
                console.log(res);
                dataTables.rows.add(res.results).draw(false)
            },
            error: function(err){
                console.log(err);
            }
        })
    }

    btnTambah.on('click', (e) => {
        e.preventDefault();
        console.log('BTN TAMBAH CLICKED');
        formTitle.html('Tambah Departemen Baru');
        dataContent.hide();
        formTambah.show();
    });

    btnKembali.on('click', (e) => {
        e.preventDefault();
        console.log('BTN KEMBALI CLICKED');
        dataContent.show();
        formTambah.hide();
    });

    $('#form-tambah').on('click', '.add-record', function(e) {
        e.preventDefault();
        addRow();
    });


    formTambah.validate({
        rules: {
            username: {
                required: true,
                minlength: 5,
                maxlength: 16
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 16
            },

        },
        submitHandler: function(form, event) {
            event.preventDefault();
            let formData = new FormData(form);
            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
            //    saveData(formData);
        }
    });


    const saveData = (form_data) => {
        $.ajax({
            type: 'post',
            url: '<?= site_url("departments") ?>',
            data: form_data,
            dataType: 'json',
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: (res) => {
                console.log(res);
                if (res.status) {
                    getData();
                }
                Swal.fire({
                    title: res.title,
                    text: res.message,
                    type: res.type,
                    confirmButtonClass: "btn btn-confirm mt-2",
                });
            },
            error: (jqXHR, exception) => {
                Swal.fire({
                    title: jqXHR.status,
                    text: 'Terjadi Kesalahan, silahkan refresh halaman ini!' + jqXHR.responseText,
                    type: 'error',
                    confirmButtonClass: "btn btn-confirm mt-2",
                });
            }
        });
    }
</script>

<?= $this->endSection() ?>