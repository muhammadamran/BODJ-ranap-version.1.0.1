<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Laporan Total SOAP Per-Pasien</a></li>
  </ol>
  <h1 class="page-header">Laporan Total SOAP Per-Pasien</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <!-- <a href="index.php?m=laporan&s=laporan_add" target="_blank" class="btn btn-icon btn-sm btn-inverse"><i class="fa fa-plus-square"></i></a> -->
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <!-- <div class="alert alert-warning fade show">
          <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          </button>
          <p>Silahkan input <b>Laporan Buku Operan Dokter Jaga Rawat Inap</b> Pada Button icon "<i class="fa fa-plus-square"></i>"</p>
        </div> -->
        <div style="overflow-x:auto;">
          <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
              <thead>
                <tr align="center">
                  <th class="text-nowrap" rowspan="2">No RM</th>
                  <th class="text-nowrap" rowspan="2">Nama Pasien</th>
                  <th class="text-nowrap" rowspan="2">Total SOAP</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $data = $db->query("SELECT COUNT(no_rm) AS total, no_rm, nama_pasien FROM tb_soap GROUP BY no_rm", 0);
                  while($row = $data->fetch_assoc()) {
              ?>
                <tr align="center">
                  <td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?></td>
                  <td><?= $row['nama_pasien'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_pasien'] ?></td>
                  <td><?= $row['total'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['total'] ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-10 -->
  </div>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/laporan/laporan_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>