<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Barang Milik Negara
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="alert alert-primary" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="btn btn-success mb-3">Tambah Barang</button>
            
            @if($isModal)
                @include('livewire.admin.barang.create')
            @endif

            <table class="table w-full">
                <thead class="table-dark">
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Kode Barang</th>
                        <th class="px-4 py-2">NUP</th>
                        <th class="px-4 py-2">Nama Barang</th>
                        <th class="px-4 py-2">Merk/Type</th>
                        <th class="px-4 py-2">Tgl Perolehan</th>
                        <th class="px-4 py-2">Tgl Buku</th>
                        <th class="px-4 py-2">Nilai Perolehan</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($barangs as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->id }}</td>
                            <td class="border px-4 py-2">{{ $row->id_barang }}</td>
                            <td class="border px-4 py-2">{{ $row->nup }}</td>
                            <td class="border px-4 py-2">{{ $row->kode->name }}</td>
                            <td class="border px-4 py-2">{{ $row->merk_type }}</td>
                            <td class="border px-4 py-2">{{ $row->tgl_perolehan }}</td>
                            <td class="border px-4 py-2">{{ $row->tgl_buku }}</td>
                            <td class="border px-4 py-2">{{ $row->nilai_perolehan }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $row->id }})" class="btn btn-warning text-white">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="9">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>