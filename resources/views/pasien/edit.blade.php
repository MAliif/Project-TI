@section('title', $data->nama)

<x-app-layout>
    <div class="py-6 max-w-7xl mx-auto">
        <form action="{{ route('update', $data->noreg) }}" method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-3">
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="nama" type="text"
                        name="nama" value="{{$data->nama}}">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2"
                        for="jenis_kelamin">
                        Jenis Kelamin
                    </label>
                    <div class="relative">
                        <select name="jenis_kelamin"
                            class="block w-full text-gray-800 py-3 px-4 pr-8 rounded leading-tight" id="jenis_kelamin">
                            <option class="hidden" disabled selected value> {{$data->jenis_kelamin}} </option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="no_tlp">
                        Nomor Telepon
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="no_tlp"
                        type="number" name="no_tlp" value="{{$data->no_tlp}}">
                </div>
            </div>
            <div class="w-full px-3 py-4">
                <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="alamat">
                    Alamat
                </label>
                <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="alamat" type="text"
                    name="alamat" value="{{$data->alamat}}">
            </div>
            <div class="flex justify-center">
                <button
                    class="text-sm leading-none text-gray-600 py-2 px-7 justify-end bg-green-200 rounded hover:bg-gray-200">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
