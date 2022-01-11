<?php

namespace App\Http\Livewire\Admin\Barang;

use Livewire\Component;
use App\Models\Barang;
use App\Models\Gedung;
use App\Models\Ruang;
use App\Models\User;
use App\Models\KodeBarang;
use App\Models\UnitKerja;

class Barangs extends Component
{
    public $barangs, $id_barang, $jenis, $nup, $merk_type, $id_unit, $id_ruang, $condition, $id_user, $tgl_perolehan, $tgl_buku, $nilai_perolehan, $asal, $akun, $ket, $barang_id;
    public $gedungs, $ruangs, $users, $kodebarangs, $unitkerjas;
    public $isModal = 0;

    public function render()
    {
        $this->barangs = Barang::all();
        $this->gedungs = Gedung::all();
        $this->ruangs = Ruang::all();
        $this->users = User::all();
        $this->kodebarangs = KodeBarang::all();
        $this->unitkerjas = UnitKerja::all();
        return view('livewire.admin.barang.barangs');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->id_barang = '';
        $this->jenis = '';
        $this->nup = '';
        $this->merk_type = '';
        $this->id_unit = '';
        $this->id_ruang = '';
        $this->condition = '';
        $this->id_user = '';
        $this->tgl_perolehan = '';
        $this->tgl_buku = '';
        $this->nilai_perolehan = '';
        $this->asal = '';
        $this->akun = '';
        $this->ket = '';
    }

    public function store()
    {
        $this->validate([
            'id_barang' => 'required|numeric',
            'jenis' => 'required|string',
            'nup' => 'required|numeric',
            'merk_type' => 'required|string',
            'id_unit' => 'required|numeric',
            'id_ruang' => 'required|numeric',
            'condition' => 'required|string',
            'id_user' => 'required|numeric',
            'tgl_perolehan' => 'required|string',
            'tgl_buku' => 'required|string',
            'nilai_perolehan' => 'required|numeric',
            'asal' => 'required|string',
            'akun' => 'required|numeric',
            'ket' => 'required|string',
        ]);
        
        Barang::updateOrCreate(['id' => $this->barang_id], [
            'id_barang' => $this->id_barang,
            'jenis' => $this->jenis,
            'nup' => $this->nup,
            'merk_type' => $this->merk_type,
            'id_unit' => $this->id_unit,
            'id_ruang' => $this->id_ruang,
            'condition' => $this->condition,
            'id_user' => $this->id_user,
            'tgl_perolehan' => $this->tgl_perolehan,
            'tgl_buku' => $this->tgl_buku,
            'nilai_perolehan' => $this->nilai_perolehan,
            'asal' => $this->asal,
            'akun' => $this->akun,
            'ket' => $this->ket,
        ]);

        session()->flash('message', $this->barang_id ? $this->merk_type . ' Diperbaharui': $this->merk_type . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $this->barang_id = $id;
        $this->id_barang = $barang->id_barang;
        $this->jenis = $barang->jenis;
        $this->nup = $barang->nup;
        $this->merk_type = $barang->merk_type;
        $this->id_unit = $barang->id_unit;
        $this->id_ruang = $barang->id_ruang;
        $this->condition = $barang->condition;
        $this->id_user = $barang->id_user;
        $this->tgl_perolehan = $barang->tgl_perolehan;
        $this->tgl_buku = $barang->tgl_buku;
        $this->nilai_perolehan = $barang->nilai_perolehan;
        $this->asal = $barang->asal;
        $this->akun = $barang->akun;
        $this->ket = $barang->ket;

        $this->openModal();
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        session()->flash('message', $barang->merk_type . ' Dihapus');
    }
}
