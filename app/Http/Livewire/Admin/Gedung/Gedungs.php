<?php

namespace App\Http\Livewire\Admin\Gedung;

use Livewire\Component;
use App\Models\Gedung;

class Gedungs extends Component
{
    public $gedungs, $name, $id_unit, $gedung_id;
    public $isModal = 0;

    public function render()
    {
        $this->gedungs = Gedung::all();
        return view('livewire.admin.gedung.gedungs');
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
        $this->id_unit = '';
        $this->gedung_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'id_unit' => 'required|numeric',
        ]);
        
        Gedung::updateOrCreate(['id' => $this->gedung_id], [
            'name' => $this->name,
            'id_unit' => $this->id_unit,
        ]);

        session()->flash('message', $this->gedung_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $gedung = Gedung::find($id);
        $this->gedung_id = $id;
        $this->name = $gedung->name;
        $this->id_unit = $gedung->id_unit;

        $this->openModal();
    }

    public function delete($id)
    {
        $gedung = Gedung::find($id);
        $gedung->delete();
        session()->flash('message', $gedung->name . ' Dihapus');
    }
}
