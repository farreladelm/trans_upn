<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">

            <!-- General Form Elements -->
            <form action="<?= base_url('driver/add') ?>" method="POST">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Driver</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nomor SIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_sim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="alamat"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->
        </div>
    </div>
</div>