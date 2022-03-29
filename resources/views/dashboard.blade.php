<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Dokter</th>
                                        <th>Kondisi Kesehatan</th>
                                        <th>Suhu Tubuh</th>
                                        <th>Resep</th>
                                    </tr>
                                </thead>
                                {{-- @foreach ($books as $book)
                                <tbody>
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>
                                            @if($book->image)
                                                <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->judul }}" class="img-fluid mt-3">
                                            @endif
                                        </td>
                                        <td>{{ $book->judul }}</td>
                                        <td>{{ $book->penulis }}</td>
                                        <td>{{ $book->penerbit }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td>{{ $book->berat }}</td>
                                        <td>{{ $book->harga }}</td>
                                    </tr>
                                </tbody>
                                @endforeach --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
