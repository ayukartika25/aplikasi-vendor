
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Vendor</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('vendor'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmAddVendor', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Kode Vendor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KodeVendor" name="KodeVendor" value=" <?= set_value('KodeVendor'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('KodeVendor') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Vendor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NamaVendor" name="NamaVendor" value=" <?= set_value('NamaVendor'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NamaVendor') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" value=" <?= set_value('Deskripsi'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Deskripsi') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat" name="Alamat" value=" <?= set_value('Alamat'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Kota" name="Kota" value=" <?= set_value('Kota'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Kota') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Provinsi" name="Provinsi" value=" <?= set_value('Provinsi'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Provinsi') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>