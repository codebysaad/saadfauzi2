<?php

namespace App\Http\Livewire\Admin\KodeBarang;

use Livewire\Component;
use App\Models\KodeBarang;

class Kodebarangs extends Component
{
    public $kodebarangs, $kodebarang_id, $name;
    public $isModal = 0;

    public function render()
    {
        $this->kodebarangs = KodeBarang::all();
        return view('livewire.admin.kode-barang.kode-barangs');
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
        $this->id = '';
        $this->name = '';
    }

    public function store()
    {
        $this->validate([
            'id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        
        KodeBarang::updateOrCreate(['id' => $this->kodebarang_id], [
            'id' => $this->kodebarang_id,
            'name' => $this->name,
        ]);

        session()->flash('message', $this->kodebarang_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $kodebarang = KodeBarang::find($id);
        $this->kodebarang_id = $id;
        $this->name = $kodebarang->name;

        $this->openModal();
    }

    public function delete($id)
    {
        $kodebarang = KodeBarang::find($id);
        $kodebarang->delete();
        session()->flash('message', $kodebarang->name . ' Dihapus');
    }
}
