@extends('admin.layouts.main')

@section('title', 'Sistem Informasi')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Sistem Informasi</h1>
    <p class="mb-4">Halaman ini menampilkan data pada <a target="_blank" href="/sistem-informasi">halaman sistem informasi</a>.</p>
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('information_system.create') }}">
                <button type="button" class="btn btn-success mb-3">Tambah Data</button>
            </a>
        </div>
        <div class="col-md-4 text-center">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <span>{{ $message }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{-- Tabel Data --}}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Sistem Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th class="text-left">Judul</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Created At</th>
                                    <th width="15%">Updated At</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%">No</th>
                                    <th class="text-left">Judul</th>
                                    <th width="15%">Status</th>
                                    <th width="15%">Created At</th>
                                    <th width="15%">Updated At</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if ($informationSystem->count())
                                    @foreach ($informationSystem as $index => $informationSystem)
                                    <tr>
                                        <td class="text-center">{{ ++$index }}</td>
                                        <td class="text-left">{{ $informationSystem->title }}</td>
                                        @if($informationSystem->status =='Daerah Rawan')
                                            <td class="text-center"><span class="badge badge-danger">{{ $informationSystem->status }}</span></td>
                                        @elseif($informationSystem->status =='Daerah Strategis')
                                            <td class="text-center"><span class="badge badge-success">{{ $informationSystem->status }}</span></td>
                                        @elseif($informationSystem->status =='Dalam Pembangunan')
                                            <td class="text-center"><span class="badge badge-warning">{{ $informationSystem->status }}</span></td> 
                                        @endif
                                        <td class="text-center">{{ $informationSystem->created_at }}</td>
							            <td class="text-center">{{ $informationSystem->updated_at }}</td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm my-1" href="{{ route('information_system.show',$informationSystem->id) }}"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-outline-primary btn-sm my-1" href="{{ route('information_system.edit',$informationSystem->id) }}"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deleteeventModal-{{ $informationSystem->id }}"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Delete Sistem Informasi Modal -->
                                    <div class="modal fade" id="deleteeventModal-{{ $informationSystem->id }}" tabindex="-1" aria-labelledby="deleteeventModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-name" id="deleteeventModal">Yakin untuk dihapus?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Sistem Informasi <strong>{{ $informationSystem->title }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('information_system.destroy', $informationSystem->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger" onclick="disableButton(this)">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- End tabel Data --}}
        </div>
    </div>
@endsection