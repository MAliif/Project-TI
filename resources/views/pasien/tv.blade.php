@section('title', 'Tambah Baru Pasien')

<x-app-layout>
    <div class="py-6 max-w-7xl mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errorkeren)
                        <li>{{ $errorkeren }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tv_store') }}" method="post">
            @csrf
            <div class="px-3 py-4 grid grid-cols-3">
                <div>
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="pasien_id">
                        Pasien
                    </label>
                    <div>
                        <select name="pasien_id" class="w-1/2 text-gray-800 py-3 px-4 pr-8 rounded leading-tight"
                            id="pasien_id">
                            <option class="hidden" disabled selected value> -- Pilih pasien -- </option>
                            @foreach ($pasien as $data)
                                <option value="{{ $data->noreg }}"> {{ $data->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 py-4">
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="tinggi_badan">
                        Tinggi Badan
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="tinggi_badan"
                        type="text" name="tinggi_badan">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="berat_badan">
                        Berat Badan
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="berat_badan"
                        type="number" name="berat_badan">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="tekanan_darah">
                        Tekanan Darah
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="tekanan_darah"
                        type="number" name="tekanan_darah">
                </div>
                <div class="px-3 py-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="nadi">
                        Nadi
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="nadi"
                        type="number" name="nadi">
                </div>
                <div class="px-3 py-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="pernapasan">
                        Pernapasan
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="pernapasan"
                        type="number" name="pernapasan">
                </div>
                <div class="px-3 py-3">
                    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="suhu">
                        Suhu
                    </label>
                    <input class="w-full text-gray-800 rounded py-3 px-4 mb-3 leading-tight" id="suhu"
                        type="number" name="suhu">
                </div>
            </div>
            <div class="flex justify-center">
                <button
                    class="text-sm leading-none text-gray-600 py-2 px-7 justify-end bg-yellow-200 rounded hover:bg-gray-200">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>
