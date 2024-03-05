@section('title', 'Pasien')

<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Session::has('status'))
                <div class="my-5 mb-8 px-3">
                    <div class="bg-green-300 py-4 rounded-md w-full px-5">
                        {{ Session::get('message') }}
                    </div>
                </div>
            @endif
            <div class="my-6 mx-1 flex justify-between">
                <h2 class="text-xl font-semibold text-gray-900 text-center">Daftar Pasien</h2>
                <a href="{{ route('add_pasien') }}"
                    class="text-sm leading-none text-gray-600 py-2 px-7 justify-end bg-yellow-200 rounded hover:bg-yellow-300">Tambah
                    Pasien Baru</a>
            </div>
            <table class="mx-auto table-fixed border font-Comfortaa">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[10%]">
                            Nomor Registrasi
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[20%]">
                            Nama
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[15%]">
                            Jenis Kelamin
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[25%]">
                            Alamat
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[10%]">
                            Nomor Telepon
                        </th>
                        @auth
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[20%]">
                                Actions
                            </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($pasien as $data)
                            <tr class="even:bg-white odd:bg-red-50">
                                <td class="py-3 px-6 text-center">{{ $data->noreg }}</td>
                                <td class="py-3 px-6">{{ $data->nama }}</td>
                                <td class="py-3 px-6">{{ $data->jenis_kelamin }}</td>
                                <td class="py-3 px-6">{{ $data->alamat }}</td>
                                <td class="py-3 px-6">{{ $data->no_tlp }}</td>
                                <td class="py-3 px-1 grid-cols-3 mt-2 grid gap-3 text-center">
                                    <a href="{{ route('pasien_detail', $data->noreg) }}"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 text-sm leading-none text-gray-600 py-2 px-2 bg-blue-200 rounded hover:bg-blue-300 focus:outline-none">Lihat</a>
                                    <a href="{{ route('pasien_edit', $data->noreg) }}"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-green-300 text-sm leading-none text-gray-600 py-2 px-2 bg-green-200 rounded hover:bg-green-300 focus:outline-none">Edit</a>
                                    <form action="{{ route('destroy', $data->noreg) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                            type="submit"
                                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-2 px-2 bg-red-200 rounded hover:bg-red-300 focus:outline-none">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-6">
                    {{ $pasien->links() }}
                </div>

            </div>
    </x-app-layout>
