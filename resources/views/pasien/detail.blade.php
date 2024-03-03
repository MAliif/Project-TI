@section('title', $data->nama)

@if (Auth::user() != null)
    <x-app-layout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2">
                <div>
                    <div class="flex py-2">
                        <p class="text-2xl font-bold">Nomor Registrasi : </p>
                        <p class="mx-3 mt-[5px]">{{ $data->noreg }}</p>
                    </div>
                    <div class="flex py-2">
                        <p class="text-2xl font-bold">Nama : </p>
                        <p class="mx-3 mt-[5px]">{{ $data->nama }}</p>
                    </div>
                    <div class="flex py-2">
                        <p class="text-2xl font-bold">Jenis Kelamin : </p>
                        <p class="mx-3 mt-[5px]">{{ $data->jenis_kelamin }}</p>
                    </div>
                    <div class="flex py-2">
                        <p class="text-2xl font-bold">Alamat : </p>
                        <p class="mx-3 mt-[5px]">{{ $data->alamat }}</p>
                    </div>
                    <div class="flex py-2">
                        <p class="text-2xl font-bold">Nomor Telepon : </p>
                        <p class="mx-3 mt-[5px]">{{ $data->no_tlp }}</p>
                    </div>
                </div>
                @if ($data->tandaVital != null)
                    <div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Tinggi Badan : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->tinggi_badan }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Berat Badan : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->berat_badan }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Tekanan Darah : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->tekanan_darah }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Nadi : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->nadi }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Pernafasan : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->pernapasan }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Suhu : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->tandaVital->suhu }}</p>
                        </div>
                    </div>
                @else
                    <div></div>
                @endif

                <div class="mt-8">
                    <a class="p-3 bg-blue-300 rounded" href="{{ route('pasien') }}">Kembali</a>
                </div>
            </div>
        </div>
    </x-app-layout>
@else
    <x-app-layout>
        <div class="flex justify-center h-screen">
            <div class="bg-gray-200 rounded-lg max-w-7xl mx-auto px-14 m-auto p-7">
                <div class="grid grid-cols-2 gap-10">
                    <div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Nomor Registrasi : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->noreg }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Nama : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->nama }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Jenis Kelamin : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->jenis_kelamin }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Alamat : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->alamat }}</p>
                        </div>
                        <div class="flex py-2">
                            <p class="text-2xl font-bold">Nomor Telepon : </p>
                            <p class="mx-3 mt-[5px]">{{ $data->no_tlp }}</p>
                        </div>
                    </div>
                    @if ($data->tandaVital != null)
                        <div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Tinggi Badan : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->tinggi_badan }}</p>
                            </div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Berat Badan : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->berat_badan }}</p>
                            </div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Tekanan Darah : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->tekanan_darah }}</p>
                            </div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Nadi : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->nadi }}</p>
                            </div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Pernafasan : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->pernapasan }}</p>
                            </div>
                            <div class="flex py-2">
                                <p class="text-2xl font-bold">Suhu : </p>
                                <p class="mx-3 mt-[5px]">{{ $data->tandaVital->suhu }}</p>
                            </div>
                        </div>
                    @else
                        <div></div>
                    @endif
                </div>
                <div class="mt-8 text-center">
                    <a class="p-3 bg-blue-300 rounded" href="{{ route('HalamanWelcome') }}">Kembali</a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endif
