<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">
            <div class="mb-3"><a href="<?= base_url('kondektur/add') ?>" class="btn btn-primary px-3">Tambah Data Kondektur<i class="ms-2 fa-solid fa-arrow-right"></i></a></div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">ID Kondektur</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kondekturs as $kondektur) : ?>
                        <tr>
                            <th scope="row"><?= $kondektur['id_kondektur'] ?></th>
                            <td><?= $kondektur['nama'] ?></td>
                            <td>
                                <a href="<?= base_url('kondektur/update/' . $kondektur['id_kondektur']) ?>" class="btn btn-outline-warning px-3">Edit</a>
                                <a href="<?= base_url('kondektur/delete/' . $kondektur['id_kondektur']) ?>" class="btn btn-outline-danger px-3">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>

</div>