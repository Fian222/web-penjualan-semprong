<h1 class="mt-3">Selamat Datang, Admin</h1>

<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card-data order">
            <div class="row">
                <div class="col-6"><i class="fas fa-list-check"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Pesanan</div>
                    <div class="card-count">{{ $dataorder }}</div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="fas fa-users"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">User</div>
                    <div class="card-count">{{ $user }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <h2 class="mt-4">Daftar User</h2>
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @forelse ($pengguna as $pengguna)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pengguna->name }}</td>
                            <td>{{ $pengguna->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Data Kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
