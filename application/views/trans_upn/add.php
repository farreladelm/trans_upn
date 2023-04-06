<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <!-- General Form Elements -->
            <form action="<?= base_url('trans_upn/add') ?>" method="POST">
                <!-- KONDEKTUR -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID Kondektur</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_kondektur">
                            <!-- <option selected>Pilih Kondektur</option> -->
                            <?php foreach ($kondekturs as $kondektur) : ?>
                                <option value="<?= $kondektur['id_kondektur'] ?>"><?= $kondektur['id_kondektur'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <!-- BUS -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID Bus</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_bus">
                            <!-- <option selected>Pilih Bus</option> -->
                            <?php foreach ($buses as $bus) : ?>
                                <option value="<?= $bus['id_bus'] ?>"><?= $bus['id_bus'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <!-- DRIVER -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">ID Driver</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_driver">
                            <!-- <option selected>Pilih Driver</option> -->
                            <?php foreach ($drivers as $driver) : ?>
                                <option value="<?= $driver['id_driver'] ?>"><?= $driver['id_driver'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Jumlah Kilometer</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jumlah_km" value="0">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal">
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