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
                        <h3 class="page-title">Tambah Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tambah Alternatif</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <!-- right column -->
                    <div class="col-12">
                        <!-- Horizontal Form -->
                        <div class="box">
                            <form class="form-horizontal form-element" action="<?php echo base_url('alternative/store') ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Kode Alternatif</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="kode_alternatif" class="form-control" id="inputEmail3" placeholder="Masukkan kode alternatif" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Nama Alternatif</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="nama_alternatif" class="form-control" id="inputPassword3" placeholder="Masukkan nama alternatif" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Jarak Dengan Aspal</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="jarak_dengan_aspal" class="form-control" id="inputPassword3" placeholder="e.g: 200 m" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="e.g: 325000" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Jarak Dengan Sarana/ Prasarana</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="jarak_dengan_sarana" class="form-control" id="inputPassword3" placeholder="e.g: 200 m" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Luas Lahan</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="luas_lahan" class="form-control" id="inputPassword3" placeholder="e.g: 200 m2" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Tempo Pembayaran</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="tempo_pembayaran" class="form-control" id="inputPassword3" placeholder="e.g: 1 tahun" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>

                                        <div class="col-sm-10">
                                            <textarea name="keterangan" rows="5" class="form-control" id="inputPassword3"> </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                        <div class="col-sm-10">
                                            <select name="status" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                            <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!--/.col (right) -->
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>

    <?php $this->load->view('components/footer') ?>
</div>