<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use App\Models\UnitKerja;

class Users extends Component
{
    public $users, $name, $username, $email, $role, $id_unit, $position, $password, $confirm_password, $unit_kerjas, $user_id;
    public $isModal = 0;

    public function render()
    {
        $this->users = User::all();
        $this->unit_kerjas = UnitKerja::all();
        return view('livewire.admin.user.users');
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
        $this->username = '';
        $this->email = '';
        $this->role = '';
        $this->id_unit = '';
        $this->position = '';
        $this->password = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|string',
            'id_unit' => 'required|numeric',
            'position' => 'required|string',
            'password' => 'required|string',
        ]);
        
        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'role' => $this->role,
            'id_unit' => $this->id_unit,
            'position' => $this->position,
            'password' => $this->password,
        ]);

        session()->flash('message', $this->user_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->user_id = $id;
        $this->name = $user->name;

        $this->openModal();
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message', $user->name . ' Dihapus');
    }
}
