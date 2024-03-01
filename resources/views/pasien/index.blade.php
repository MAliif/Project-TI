@section('title', 'Pasien')

<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 mx-1 flex justify-between">
                <h2 class="text-xl font-semibold text-gray-900 text-center">Daftar Pasien</h2>
                <a href="{{ route('add_pasien') }}"
                    class="text-sm leading-none text-gray-600 py-2 px-7 justify-end bg-yellow-200 rounded hover:bg-gray-200">Create</a>
            </div>
            <table class="mx-auto table-fixed border">
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
                                <td class="py-3 px-6 grid-cols-3 mt-2 grid gap-3 text-center">
                                    <a href="{{ route('pasien_detail', $data->noreg) }}"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-2 px-2 bg-blue-200 rounded hover:bg-gray-200 focus:outline-none">View</a>
                                    <a href="{{ route('pasien_edit', $data->noreg) }}"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-2 px-2 bg-green-200 rounded hover:bg-gray-200 focus:outline-none">Update</a>
                                    <a onclick="openModal('modelConfirm')"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-2 px-2 bg-red-200 rounded hover:bg-gray-200 focus:outline-none">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div id="modelConfirm"
                    class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <form action="{{ route('destroy', $data->noreg) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="p-6 pt-0 text-center">
                                <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Apakah anda yakin menghapus data
                                    pasien
                                    ini?</h3>
                                <div class="flex justify-center">
                                    <button type="submit" onclick="closeModal('modelConfirm')"
                                        class="text-white bg-red-600 hover:bg-red-800 w-[20%] focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base items-center px-3 py-2.5 text-center mr-4">
                                        Ya
                                    </button>
                                    <a href="#" onclick="closeModal('modelConfirm')"
                                        class="text-gray-900 bg-white hover:bg-gray-100 w-[20%] focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium items-center rounded-lg text-base px-3 py-2.5 text-center"
                                        data-modal-toggle="delete-user-modal">
                                        Tidak
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script type="text/javascript">
                    window.openModal = function(modalId) {
                        document.getElementById(modalId).style.display = 'block'
                        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
                    }

                    window.closeModal = function(modalId) {
                        document.getElementById(modalId).style.display = 'none'
                        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                    }

                    // Close all modals when press ESC
                    document.onkeydown = function(event) {
                        event = event || window.event;
                        if (event.keyCode === 27) {
                            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                            let modals = document.getElementsByClassName('modal');
                            Array.prototype.slice.call(modals).forEach(i => {
                                i.style.display = 'none'
                            })
                        }
                    };
                </script>


                <div class="my-5">
                    {{ $pasien->links() }}
                </div>
            </div>
    </x-app-layout>
