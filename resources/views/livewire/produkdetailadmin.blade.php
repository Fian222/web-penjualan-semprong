<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk">
                <div class="card-body">
                    <img src="{{ url('build/images') }}/{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><strong>{{ $product->nama_barang }}</strong>
            </h2>
            <h4>Rp. {{ number_format($product->harga_barang) }}</h4>
            <hr>
            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="edit({{ $product->id }})">
                        <table class="table" style="border-top: hidden">
                            <tr>
                                <td>Varian Rasa</td>
                                <td>:</td>
                                <td>{{ $product->nama_barang }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Barang yang tersedia</td>
                                <td>:</td>
                                <td>{{ $product->stok_barang }}</td>
                            </tr>
                            <tr>
                                <td>Tambah/Kurangi Stok</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_tambah" type="number" class="form-control"
                                        wire:model="jumlah_tambah">
                                </td>
                            </tr>
                            <tr>
                                <td>Ubah Harga</td>
                                <td>:</td>
                                <td>
                                    <input id="ubah_harga" type="number" class="form-control" wire:model="ubah_harga">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-dark col-lg-12">Selesai
                                        Edit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
