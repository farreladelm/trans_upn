<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <!-- General Form Elements -->
            <form action="<?= base_url('kondektur/update/' . $kondektur['id_kondektur']) ?>" method="POST">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kondektur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="<?= $kondektur['nama'] ?>">
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