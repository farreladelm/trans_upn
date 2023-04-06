<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <div class="mb-3"><a href="<?= base_url('bus/add') ?>" class="btn btn-primary px-3">Tambah Data Bus <i class="ms-2 fa-solid fa-arrow-right"></i></a></div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">ID Bus</th>
                        <th scope="col">Plat</th>
                        <th scope="col">Total KM</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buses as $bus) : ?>
                        <tr>
                            <th scope="row"><?= $bus['id_bus'] ?></th>
                            <td><?= $bus['plat'] ?></td>
                            <td><?= $bus['jumlah_km'] ? $bus['jumlah_km'] : 0 ?></td>
                            <td>
                                <?php
                                echo $bus['status'] == 1 ?
                                    "<a href='" . base_url('bus/aktif') . "' class='badge bg-success'>Aktif</a>" : ($bus['status'] == 2 ?
                                        "<a href='" . base_url('bus/cadangan') . "' class='badge bg-warning'>Cadangan</a>" :
                                        "<a href='" . base_url('bus/rusak') . "' class='badge bg-danger'>Rusak</a>");
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('bus/update/' . $bus['id_bus']) ?>" class="btn btn-outline-warning px-3">Edit</a>
                                <a href="<?= base_url('bus/delete/' . $bus['id_bus']) ?>" class="btn btn-outline-danger px-3">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
</div>