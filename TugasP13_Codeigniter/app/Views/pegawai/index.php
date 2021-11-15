<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card bg-transparent" >
        <div class="card-header">
            <h2>Welcome</h2>
            <h3>Data Pegawai</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/pegawai/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($pegawai as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= $row->jenis_kelamin; ?></td>
                        <td><?= $row->no_telp; ?></td>
                        <td><?= $row->email; ?></td>
                        <td><?= $row->alamat; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("pegawai/edit/$row->id_pegawai"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("pegawai/delete/$row->id_pegawai") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>