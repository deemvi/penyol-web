<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>Hello, <span>Welcome here</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Booking</a>
                    </li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data Booking</h4>
                        <a href="<?php echo base_url() . 'Booking/create' ?>" class="btn btn-rounded btn-success"><span class="btn-icon-left"><i class="fa fa-plus color-success"></i> </span>Tambah Booking</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Kode Booking</th>
                                        <th>Nama Pemesan</th>
                                        <th>Kontak</th>
                                        <th>Nama Lapangan</th>
                                        <th>Jam,Tanggal</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="badge badge-danger" onclick="return confirm('yakin dihapus?'); ">Hapus</a>
                                            <a href="<?php echo base_url() ?>/Booking/update/" class="badge badge-info">Update</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
<!-- #/ content body -->
<!-- row -->