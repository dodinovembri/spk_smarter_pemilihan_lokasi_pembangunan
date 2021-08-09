<div class="wrapper">
    <?php
    $this->load->view('components/header');
    $this->load->view('components/sidebar');
    ?>
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Kriteria</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Kriteria</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php $this->load->view('components/flash') ?>
                                <?php if ($this->session->userdata('role_id') != 1) { ?>
                                    <a href="<?php echo base_url('criteria/create') ?>"><button type="button" class="btn btn-primary mb-15 ml-15">Tambah Baru</button></a>
                                <?php } ?>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>#</th>
                                                <th>Bobot</th>
                                                <th>Status</th>
                                                <th class="last">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($criterias as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->kode_kriteria; ?></td>
                                                    <td><?php echo $value->nama_kriteria; ?></td>
                                                    <td><?php echo $value->prioritas; ?></td>
                                                    <td><?php echo $value->bobot; ?></td>
                                                    <td><?php echo check_status($value->status); ?></td>
                                                    <td class="last">
                                                        <a href="<?php echo base_url('sub_criterias/'); echo $value->id; ?>"><button class="form-control" style="width: 60px;">Pilih</button></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
    <?php $this->load->view('components/footer') ?>
</div>