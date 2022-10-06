<div class="container mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
</div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Data/tambah" method="post">
            <div class="form-floating mb-3"">
                <input type="text" name="NIM" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">NIM</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="Nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama</label>
            </div>
            <div class="mb-3"> <!-- Vaksin 1  -->
                <select class="form-select" name="Vaksin1" aria-label="Default select example">
                    <option value="-" selected>Jenis Vaksin 1</option>
                    <option value="Sinovac">Sinovac</option>
                    <option value="Sputnik V">Sputnik V</option>
                    <option value="Novavax">Novavax</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                    <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
            </div>
            <div class="mb-3"> <!-- Vaksin 2  -->
                <select class="form-select" name="Vaksin2" aria-label="Default select example">
                    <option value="-" selected>Jenis Vaksin 2</option>
                   <option value="Sinovac">Sinovac</option>
                    <option value="Sputnik V">Sputnik V</option>
                    <option value="Novavax">Novavax</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                    <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
            </div>
            <div class="mb-3"> <!-- Vaksin 3  -->
                <select class="form-select" name="Vaksin3" aria-label="Default select example">
                    <option value="-" selected>Jenis Vaksin 3</option>
                   <option value="Sinovac">Sinovac</option>
                    <option value="Sputnik V">Sputnik V</option>
                    <option value="Novavax">Novavax</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                    <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
            </div>
            <div class="mb-3"> <!-- Vaksin 4  -->
                <select class="form-select" name="Vaksin4" aria-label="Default select example">
                    <option value="-" selected>Jenis Vaksin 4</option>
                   <option value="Sinovac">Sinovac</option>
                    <option value="Sputnik V">Sputnik V</option>
                    <option value="Novavax">Novavax</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                    <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
            </div>
            <div class="mb-3"> <!-- Vaksin 5  -->
                <select class="form-select" name="Vaksin5" aria-label="Default select example">
                    <option value="-" selected>Jenis Vaksin 5</option>
                   <option value="Sinovac">Sinovac</option>
                    <option value="Sputnik V">Sputnik V</option>
                    <option value="Novavax">Novavax</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Pfizer-BioNTech">Pfizer-BioNTech</option>
                    <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
            </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>