<div class="container">
				<div class="page-inner">
					<h3 class="p-3">Absensi</h3>
				<div class="card mb-4">
    <div class="card-header">
        <i class="
fas fa-users"></i>
        Data Absensi Personal
    </div>	
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
					<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        
                        <td>
                            <a href="?p=buku&aksi=ubah&id=<?= $pecahBuku['id_buku']; ?>" class="btn btn-info btn-sm "><i class="far fa-check-circle"></i></a>
                            <a href="?p=buku&aksi=hapus&id=<?= $pecahBuku['id_buku']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-sign-out-alt" onclick="return confirm('Yakin ?')"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
					</div>
					</div>
					</div>
					</div>