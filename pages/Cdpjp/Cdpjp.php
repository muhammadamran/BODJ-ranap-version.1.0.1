<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-user1"></span> Input DPJP</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input DPJP</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Berikut merupakan inputan DPJP.</label> <br><hr>
                                    <label>Klik icon <button type="button" class="btn btn-outline-primary"><i class="icon-copy ion-plus-circled"></i></button> untuk menambahkan data DPJP</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-light"><i class="icon-copy ion-edit"></i></button> untuk mengupdate data DPJP</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-danger"><i class="icon-copy ion-trash-b"></i></button> untuk menghapus data DPJP</label>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="mode/vendors/images/02.png">
                    </div>
                </div>
            </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <a href="index.php?m=Cdpjp&s=Cdpjp_add" class="btn btn-outline-primary">
                        <i class="icon-copy ion-plus-circled"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">ID</th>
                                    <th>SIP</th>
                                    <th>Nama DPJP</th>
                                    <th>Spesialis</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DATA -->
                                <?php 
                                $data = $db->query("SELECT * FROM tb_dpjp ORDER BY id ASC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id'] ?></td>
                                        <td><?= $row['SIP'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['SIP'] ?></td>
                                        <td><?= $row['gelar_depan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['gelar_depan'] ?><?= $row['nama_dpjp'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_dpjp'] ?><?= $row['gelar_belakang'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['gelar_belakang'] ?></td>
                                        <td><?= $row['spesialis'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['spesialis'] ?></td>
                                        <td><?= $row['status'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['status'] ?></td>
                                        <td>
                                            <a href="index.php?m=Cdpjp&s=Cdpjp_edit&id=<?= $row['id'] ?>"><span class="btn btn-light btn-sm"><i class="icon-copy ion-edit"></i> </span></a>
                                            <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-danger btn-sm" style="color:#fff;cursor:pointer"><i class="icon-copy ion-trash-b"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <!-- END DATA -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function deleteData(id) {
                var r = confirm("Anda yakin ingin menghapus ini");
                if (r == true) {
                    location.href = "pages/Cdpjp/Cdpjp_proses.php?aksi=hapus&id=" + id;
                }
            }
        </script>