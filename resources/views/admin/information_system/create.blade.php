@extends('admin.layouts.main')

@section('title', 'Buat Sistem Informasi')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Membuat Sistem Informasi</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('information_system.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label">Judul<span class="text-danger">*</span></label>
                            <input autocomplete="off" type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan judul.." value="{{ old('title') }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label">Deskripsi<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" style="height:125px" id="description" name="description" placeholder="Masukan deskripsi..">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Provinsi<span class="text-danger">*</span></label>
                            <input autocomplete="off" type="text" name="province" class="form-control @error('province') is-invalid @enderror" placeholder="Masukan provinsi.." value="{{ old('province') }}">
                            @error('province')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Kota<span class="text-danger">*</span></label>
                            <input autocomplete="off" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Masukan kota.." value="{{ old('city') }}">
                            @error('city')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label">Alamat<span class="text-danger">*</span></label>
                            <input autocomplete="off" type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Masukan alamat lengkap.." value="{{ old('address') }}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <small class="text-muted">Masukan titik latitude dan titik longitude saat <strong>zoom maksimal</strong> dari <a href="https://www.google.co.id/maps" target="_blank">Google Maps</a>.</small>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Latitude<span class="text-danger">*</span></label>
                                    <input autocomplete="off" type="number" name="x" class="form-control @error('x') is-invalid @enderror" placeholder="Masukan titik latitude.." value="{{ old('x') }}">
                                    @error('x')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Longitude<span class="text-danger">*</span></label>
                                    <input autocomplete="off" type="number" name="y" class="form-control @error('y') is-invalid @enderror" placeholder="Masukan titik longitude.." value="{{ old('y') }}">
                                    @error('y')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Status<span class="text-danger">*</span></label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                <option disabled {{ (old('status') ? '':'selected') }}>-- Pilih Status --</option>
                                <option value="Daerah Rawan">Daerah Rawan</option>
                                <option value="Daerah Strategis">Daerah Strategis</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label">Gambar<span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input autocomplete="off" type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Pilih Gambar</label>
                                <small class="text-muted">Format yang diperbolehkan hanya jpeg, png, jpg, dan svg. Ukuran maks 5mb.</small>
                                @error('thumbnail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                        <a href="{{ route('information_system.index') }}"><div class="btn btn-secondary">Batal</div></a>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection