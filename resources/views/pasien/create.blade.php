@section('title', 'Tambah Baru Pasien')

<x-app-layout>
    <div class="py-6 max-w-7xl mx-auto">
        @if ($errors->any())
            <div class="my-5 mb-8 px-3">
                <div class="bg-red-300 py-4 rounded-md w-full px-5">
                    <ul>
                        @foreach ($errors->all() as $errorkeren)
                            <li>{{ $errorkeren }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="grid grid-cols-3">
                {{-- <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="nama">
                        Nomor Registrasi
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="nama"
                        type="text" name="noreg">
                </div> --}}
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="nama"
                        type="text" name="nama">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2"
                        for="jenis_kelamin">
                        Jenis Kelamin
                    </label>
                    <div class="relative">
                        <select name="jenis_kelamin"
                            class="block w-full text-gray-800 py-3 px-4 pr-8 rounded leading-tight" id="jenis_kelamin">
                            <option class="hidden" disabled selected value> -- Jenis kelamin -- </option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="no_tlp">
                        Nomor Telepon
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="no_tlp"
                        type="number" name="no_tlp">
                </div>
            </div>
            <div class="w-full px-3 py-4">
                <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="alamat">
                    Alamat
                </label>
                <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="alamat" type="text"
                    name="alamat">
            </div>
            <div class="flex justify-center">
                <button
                    class="text-sm leading-none text-gray-600 py-2 px-7 justify-end bg-yellow-200 rounded hover:bg-gray-200">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
