<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>List <strong>Produk</strong></h2>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Cari" aria-label="Cari"
                    aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.tambah') }}" class="btn btn-success btn-block mt-2" style="width: 20%">Tambah Barang</a>

    <section class="produk mb-5">

        <div class="row">
            @foreach ($barangs as $barang)
                <div class="col-md-4">
                    <div class="card shadow mt-5 col">
                        <div class="card-body text-center">
                            <img src="{{ url('build/images') }}/{{ $barang->gambar }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><strong>{{ $barang->nama_barang }}</strong></h5>
                                    <h5>Rp. {{ number_format($barang->harga_barang) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="{{ route('admin.detail', $barang->id) }}"
                                        class="btn btn-dark btn-block w-100">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="container">
                {{ $barangs->links() }}
            </div>
        </div>
    </section>
</div>
