<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data forms Rawat Inap</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Input forms</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi_col_order"
                            class="table table-striped table-bordered display no-wrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>No.RM</th>
                                    <th>Nama Pasien</th>
                                    <th>Kelas</th>
                                    <th>DPJP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $data = $db->query("SELECT * FROM `tb_soap` GROUP BY no_rm ORDER BY `tb_soap`.`tgl_jaga` DESC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id'] ?></td>
                                        <td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?></td>
                                        <td><?= $row['nama_pasien'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_pasien'] ?></td>
                                        <td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                                        <td><?= $row['DPJP'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['DPJP'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer text-center text-muted">
    All Rights Reserved by Adminmart. Designed and Developed by <a
    href="https://wrappixel.com">WrapPixel</a>.
</footer>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/forms/forms_proses.php?aksi=hapus&id=" + id;
  }
}
</script>