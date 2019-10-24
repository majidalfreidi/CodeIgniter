<div class="container">

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <h1>Daftar Mahasiswa</h1>
                <?php foreach( $mahasiswa as $mhs ): ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>