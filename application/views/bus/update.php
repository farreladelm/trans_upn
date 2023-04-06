<!-- General Form Elements -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <form action="<?= base_url('bus/update/' . $bus['id_bus']) ?>" method="POST">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Plat Nomor Kendaraan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="plat" value="<?= $bus['plat'] ?>">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="1" <?= $bus['status'] == 1 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="status1">
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="2" <?= $bus['status'] == 2 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="status2">
                                Cadangan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="0" <?= $bus['status'] == 0 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="status3">
                                Rusak
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Total Kilometer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $bus['jumlah_km'] ? $bus['jumlah_km'] : 0 ?>" disabled>
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