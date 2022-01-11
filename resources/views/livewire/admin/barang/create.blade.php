<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="id_barang" class="block text-gray-700 text-sm font-bold mb-2">Kode Barang</label>
                            <select class="form-control" wire:model="id_barang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                @foreach ($kodebarangs as $row)
                                    <option value="{{ $row->id }}">{{ $row->id }} | {{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('id_barang') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="jenis" class="block text-gray-700 text-sm font-bold mb-2">Jenis Barang</label>
                            <select class="form-control" wire:model="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                <option value="dbl">DBL</option>
                                <option value="dbr">DBR</option>
                                <option value="kib">KIB</option>
                            </select>
                            @error('jenis') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="nup" class="block text-gray-700 text-sm font-bold mb-2">NUP:</label>
                            <input placeholder="Masukkan NUP" type="text" class="form-control" id="nup" wire:model="nup">
                            @error('nup') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="merk_type" class="block text-gray-700 text-sm font-bold mb-2">Merk Type:</label>
                            <input placeholder="Masukkan Merk/Type Barang" type="text" class="form-control" id="merk_type" wire:model="merk_type">
                            @error('merk_type') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="id_unit" class="block text-gray-700 text-sm font-bold mb-2">Milik Unit</label>
                            <select class="form-control" wire:model="id_unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                @foreach ($unitkerjas as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('id_unit') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="id_ruang" class="block text-gray-700 text-sm font-bold mb-2">Ruang</label>
                            <select class="form-control" wire:model="id_ruang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                @foreach ($ruangs as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('id_ruang') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="condition" class="block text-gray-700 text-sm font-bold mb-2">Kondisi</label>
                            <select class="form-control" wire:model="condition" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                <option value="baik">Baik</option>
                                <option value="rr">Rusak Ringan</option>
                                <option value="rb">Rusak Berat</option>
                            </select>
                            @error('condition') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="id_user" class="block text-gray-700 text-sm font-bold mb-2">PIC</label>
                            <select class="form-control" wire:model="id_user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Pilih</option>
                                @foreach ($users as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('id_user') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="tgl_perolehan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Perolehan:</label>
                            <input placeholder="Masukkan Tanggal Perolehan" type="text" class="form-control" id="tgl_perolehan" wire:model="tgl_perolehan">
                            @error('tgl_perolehan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="tgl_buku" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Buku:</label>
                            <input placeholder="Masukkan Tanggal Buku" type="text" class="form-control" id="tgl_buku" wire:model="tgl_buku">
                            @error('tgl_buku') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input placeholder="Masukkan Nilai Perolehan" type="numeric" class="form-control" id="nilai_perolehan" wire:model="nilai_perolehan">
                            @error('nilai_perolehan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="asal" class="block text-gray-700 text-sm font-bold mb-2">Asal Perolehan:</label>
                            <input placeholder="Asal Perolehan" type="text" class="form-control" id="asal" wire:model="asal">
                            @error('asal') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="akun" class="block text-gray-700 text-sm font-bold mb-2">Kode Akun:</label>
                            <input placeholder="Kode Akun Barang" type="numeric" class="form-control" id="akun" wire:model="akun">
                            @error('akun') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="ket" class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <input placeholder="Masukkan Keterangan" type="text" class="form-control" id="ket" wire:model="ket">
                            @error('ket') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
    
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto btn-success">
                        <button wire:click.prevent="store()" type="button"
                            class="btn btn-success inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Simpan
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto btn-danger">
                        <button wire:click="closeModal()" type="button"
                            class="btn-danger inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Tutup
                        </button>
                    </span>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>