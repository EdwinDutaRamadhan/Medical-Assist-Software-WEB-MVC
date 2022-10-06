<div class="container mt-3">
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Vaksin 1</th>
            <th>Vaksin 2</th>
            <th>Vaksin 3</th>
            <th>Vaksin 4</th>
            <th>Vaksin 5</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($data['mahasiswa'] as $mahasiswa): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mahasiswa['NIM']; ?></td>
                <td><?= $mahasiswa['Nama']; ?></td>
                <td><?= $mahasiswa['Vaksin1']; ?></td>
                <td><?= $mahasiswa['Vaksin2']; ?></td>
                <td><?= $mahasiswa['Vaksin3']; ?></td>
                <td><?= $mahasiswa['Vaksin4']; ?></td>
                <td><?= $mahasiswa['Vaksin5']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</div>