<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pesanan;
use App\Models\pesanandetail;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $jumlah = 0;
    protected $listeners = [
        'masukKeranjang' => 'updateKeranjang'
    ];

    public function updateKeranjang()
    {
        if (Auth::user()) {
            $pesanan = pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = pesanandetail::where('id_pesanan', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }

    public function mount()
    {
        if (Auth::user()) {
            $pesanan = pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = pesanandetail::where('id_pesanan', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.navbar', [
            'jumlah_pesanan' => $this->jumlah
        ]);
    }
}
