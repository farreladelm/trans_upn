<div class="col-lg-12">
    <div class="card">
        <div class="card-body pt-3">

            <div class="mb-3"><a href="<?= base_url('driver/add') ?>" class="btn btn-primary px-3">Tambah Data Driver<i class="ms-2 fa-solid fa-arrow-right"></i></a></div>
            <h5 class="card-title">Pendapatan driver bulan <?= $month ?></h5>

            <form action="<?= base_url('driver/pendapatan') ?>" method="get" class="col-3">
                <div class="d-flex">
                    <select class="form-select" aria-label="Default select example" name="bulan" onchange="this.form.submit()">
                        <option value="1" <?= $month_num == 1 ? 'selected' : ''  ?>>Januari</option>
                        <option value="2" <?= $month_num == 2 ? 'selected' : ''  ?>>Februari</option>
                        <option value="3" <?= $month_num == 3 ? 'selected' : ''  ?>>Maret</option>
                        <option value="4" <?= $month_num == 4 ? 'selected' : ''  ?>>April</option>
                        <option value="5" <?= $month_num == 5 ? 'selected' : ''  ?>>Mei</option>
                        <option value="6" <?= $month_num == 6 ? 'selected' : ''  ?>>Juni</option>
                        <option value="7" <?= $month_num == 7 ? 'selected' : ''  ?>>Juli</option>
                        <option value="8" <?= $month_num == 8 ? 'selected' : ''  ?>>Agustus</option>
                        <option value="9" <?= $month_num == 9 ? 'selected' : ''  ?>>September</option>
                        <option value="10" <?= $month_num == 10 ? 'selected' : ''  ?>>Oktober</option>
                        <option value="11" <?= $month_num == 11 ? 'selected' : ''  ?>>November</option>
                        <option value="12" <?= $month_num == 12 ? 'selected' : ''  ?>>Desember</option>
                    </select>
                </div>
            </form>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">ID Driver</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah KM</th>
                        <th scope="col">Pendapatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($drivers as $driver) : ?>
                        <tr>
                            <th scope="row"><?= $driver['id_driver'] ?></th>
                            <td><?= $driver['nama'] ?></td>
                            <td><?= $driver['jumlah_km'] ?></td>
                            <td><?= $driver['pendapatan'] ?></td>
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