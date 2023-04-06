<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <div class="mb-3"><a href="<?= base_url('trans_upn/add') ?>" class="btn btn-primary px-3">Tambah Data Trans UPN<i class="ms-2 fa-solid fa-arrow-right"></i></a></div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">ID trans UPN</th>
                        <th scope="col">ID Kondektur</th>
                        <th scope="col">ID Bus</th>
                        <th scope="col">ID Driver</th>
                        <th scope="col">Total KM</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trans_upns as $trans_upn) : ?>
                        <tr>
                            <th scope="row"><?= $trans_upn['id_trans_upn'] ?></th>
                            <td scope="row"><?= $trans_upn['id_kondektur'] ?></td>
                            <td scope="row"><?= $trans_upn['id_bus'] ?></td>
                            <td scope="row"><?= $trans_upn['id_driver'] ?></td>
                            <td scope="row"><?= $trans_upn['jumlah_km'] ?></td>
                            <td scope="row"><?= $trans_upn['tanggal'] ?></td>

                            <td>
                                <a href="<?= base_url('trans_upn/update/' . $trans_upn['id_trans_upn']) ?>" class="btn btn-outline-warning px-3">Edit</a>
                                <a href="<?= base_url('trans_upn/delete/' . $trans_upn['id_trans_upn']) ?>" class="btn btn-outline-danger px-3">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>

</div>