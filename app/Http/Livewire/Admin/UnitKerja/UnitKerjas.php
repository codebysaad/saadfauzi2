<?php

namespace App\Http\Livewire\Admin\UnitKerja;

use Livewire\Component;
use App\Models\UnitKerja;

class UnitKerjas extends Component
{
    public $unitkerjas, $name, $unitkerja_id;
    public $isModal = 0;

    public function render()
    {
        $this->unitkerjas = UnitKerja::all();
        return view('livewire.admin.unit-kerja.unit-kerjas');
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
        $this->name = '';
        $this->unitkerja_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
        ]);
        
        UnitKerja::updateOrCreate(['id' => $this->unitkerja_id], [
            'name' => $this->name,
        ]);

        session()->flash('message', $this->gedung_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $unitkerja = UnitKerja::find($id);
        $this->unitkerja_id = $id;
        $this->name = $unitkerja->name;

        $this->openModal();
    }

    public function delete($id)
    {
        $gedung = UnitKerja::find($id);
        $gedung->delete();
        session()->flash('message', $gedung->name . ' Dihapus');
    }
}
