<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">

            <div class="mb-3"><a href="<?= base_url('driver/add') ?>" class="btn btn-primary px-3">Tambah Data Driver<i class="ms-2 fa-solid fa-arrow-right"></i></a></div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">ID Driver</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No SIM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($drivers as $driver) : ?>
                        <tr>
                            <th scope="row"><?= $driver['id_driver'] ?></th>
                            <td><?= $driver['nama'] ?></td>
                            <td><?= $driver['no_sim'] ?></td>
                            <td><?= $driver['alamat'] ?></td>
                            <td>
                                <a href="<?= base_url('driver/update/' . $driver['id_driver']) ?>" class="btn btn-outline-warning px-3">Edit</a>
                                <a href="<?= base_url('driver/delete/' . $driver['id_driver']) ?>" class="btn btn-outline-danger px-3">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>

</div>