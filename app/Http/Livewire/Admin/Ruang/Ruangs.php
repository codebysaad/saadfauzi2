<?php

namespace App\Http\Livewire\Admin\Ruang;

use Livewire\Component;
use App\Models\Ruang;
use App\Models\Gedung;
use App\Models\User;

class Ruangs extends Component
{
    public $ruangs, $id_gedung, $name, $id_user, $ruang_id, $gedungs, $users, $name_gedung;
    public $isModal = 0;

    public function render()
    {
        $this->ruangs = Ruang::with('gedung', 'user')->get();
        $this->gedungs = Gedung::all();
        $this->users = User::all();
        return view('livewire.admin.ruang.ruangs');
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
        $this->id_gedung = '';
        $this->name = '';
        $this->id_user = '';
    }

    public function store()
    {
        $this->validate([
            'id_gedung' => 'required|string',
            'name' => 'required|string',
            'id_user' => 'required|string',
        ]);
        
        Ruang::updateOrCreate(['id' => $this->ruang_id], [
            'id_gedung' => $this->id_gedung,
            'name' => $this->name,
            'id_user' => $this->id_user,
        ]);

        session()->flash('message', $this->ruang_id ? 'Ruang ' . $this->name . ' Diperbaharui': 'Ruang ' . $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $ruang = Ruang::find($id);
        $this->ruang_id = $id;
        // $this->id_gedung = $ruang->id_gedung;
        $this->name = $ruang->name;
        // $this->id_user = $ruang->id_user;

        $this->openModal();
    }

    public function delete($id)
    {
        $ruang = Ruang::find($id);
        $ruang->delete();
        session()->flash('message', 'Ruang ' . $ruang->name . ' Dihapus');
    }
}
