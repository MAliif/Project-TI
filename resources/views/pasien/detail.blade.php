@section('title', $data->nama)

<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <div class="my-5 grid grid-cols-10 text-center">
                <a class="bg-red-300 rounded" href="{{route('pasien')}}">Kembali</a>
            </div>
        </div>
</x-app-layout>
