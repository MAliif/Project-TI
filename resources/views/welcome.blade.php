@section('title', 'Selamat Datang')

<x-data-layout>

    <body class="" style="background-image: url('img/rsjpp.png');">
        <nav class="flex justify-center">
            <div style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.3)"
                class="bg-white mt-4 flex justify-between px-4 rounded-md w-11/12 h-24">
                <div class="flex items-center ml-14">
                    <img class="h-16 w-16 rounded-full" src="img/rsjp.png" alt="">
                    <button href="{{ route('HalamanWelcome') }}"
                        class="text-[#d72323] rounded-md px-3 py-3 text-base font-medium font-Lexend"
                        aria-current="page">Indonesia's Leading Healthcare Technology</button>
                </div>

                @if (Route::has('login'))
                    <div class="hidden sm:flex items-center space-x-4 mr-14">
                        @auth
                            <a href="{{ url('/pasien') }}"
                                class="text-base font-bold bg-gray-900 text-[#d72323] font-Lexend px-3 py-3 rounded-xl">Dashboard</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-base font-bold text-[#d72323] font-Lexend px-3 py-3">Register</a>
                            @endif
                            <a href="{{ route('login') }}"
                                class="text-base font-bold bg-gray-900 text-[#d72323] rounded-xl font-Lexend px-3 py-3">Log
                                in</a>
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <div class="flex justify-center mt-4">
            <div class="flex h-full ml-10 mr-10 w-11/12 justify-between">
                <div class="rounded-lg w-5/6">
                    <div class="mt-11 w-auto">
                        <p class="font-Comfortaa text-[35px] "><span
                                class="bg-[#d72323] text-white rounded-tl-lg rounded-tr-lg rounded-br-[-10px] p-2">Selamat
                                datang di aplikasi kami !</span></p>
                        <p class="font-Comfortaa text-[30px]"><span
                                class="bg-[#d72323] text-white rounded-r-lg rounded-bl-lg p-2 tracking-wide">Aplikasi
                                pemeriksaan dan cek data pasien.</span></p>
                        {{-- <hr class="w-11/12 h-4 my-8 bg-black rounded-xl"> --}}
                        <div class="bg-[#d72323] w-11/12 rounded-lg outline outline-slate-800">
                            <p class="p-2 mt-8 font-Comfortaa text-xl font-bold"><span
                                    class="text-slate-50 rounded-lg p-1">Masukan nomer registrasi untuk mencari data
                                    pasien :</span></p>
                            <div class="p-2 flex">
                                <form method="GET" class="flex w-full">
                                    <input type="text" id="search-patient"
                                        class="w-11/12 border border-gray-300 rounded-md px-2 py-1 outline outline-slate-950"
                                        name="Keyword">
                                    <button
                                        class="m-auto w-11 h-w-11 bg-slate-50 rounded-lg p-2 outline outline-slate-950"><img
                                            src="img/cari.png" alt="Dokter"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center rounded-lg h-[375px] w-2/6 mt-3">
                    <img src="img/dktr1.png" alt="Dokter" class="w-auto h-auto">
                </div>
            </div>
        </div>

        @if ($keyword != null)
            <div class="justify-center flex">
                <div class="bg-white w-11/12 rounded-md">
                    <table class="mx-auto table-fixed border font-Comfortaa">
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
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[20%]">
                                Nomor Telepon
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 bg-gray-50 w-[10%]">
                                Actions
                            </th>
                        </tr>
                        @foreach ($pasien as $data)
                            <tr class="even:bg-white odd:bg-red-50">
                                <td class="py-3 px-6 text-center">{{ $data->noreg }}</td>
                                <td class="py-3 px-6">{{ $data->nama }}</td>
                                <td class="py-3 px-6">{{ $data->jenis_kelamin }}</td>
                                <td class="py-3 px-6">{{ $data->alamat }}</td>
                                <td class="py-3 px-6">{{ $data->no_tlp }}</td>
                                <td class="py-3 px-6 mt-2 flex justify-center gap-3 text-center">
                                    <a href="{{ route('pasien_detail', $data->noreg) }}"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-2 px-2 bg-blue-200 rounded hover:bg-gray-200 focus:outline-none">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        @endif

        <footer>
            <svg class="mt-[-50px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#d72323" fill-opacity="1"
                    d="M0,96L180,128L360,96L540,160L720,128L900,224L1080,160L1260,128L1440,224L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z">
                </path>
                <text x="50%" y="85%" text-anchor="middle"
                    class="text-center text-lg font-bold bg-slate-50 !important">Created By: M Alif - Shaffarel - Alisya
                </text>
            </svg>
        </footer>

    </body>
</x-data-layout>
