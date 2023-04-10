<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="card my-3">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="<?= base_url('siswa/new') ?>">Tambah Data Siswa</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Email</th>
                    <th>AKSI</th>
                </tr>
                <?php foreach($siswa as $s) : ?>
                    <tr>
                        <td><?= $s['name'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['email'] ?></td>
                        <td>
                            <ul class="nav">
                                <a href="<?= base_url('siswa/'.$s['id']) ?>" class="btn btn-success mr-2">Show</a>
                                <a href="<?= base_url('siswa/'.$s['id'].'/edit') ?>" class="btn btn-secondary mr-2">Edit</a>
                                <form action="<?= base_url('siswa/' .$s['id']) ?>" method="POST">
                                    <?php csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-warning mr-2" onclick="confirm('Hapus Data?)">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>