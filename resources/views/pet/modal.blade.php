@foreach ($pets as $pet)
    <div class="modal fade" id="edit_hewan_modal{{ $pet->id }}" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <form action='/pet/{{ $pet->id }}' method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="container py-4 rounded ">
                            <div class="container d-flex justify-content-center">
                                <h1 class="h2">Edit Hewan</h1>
                            </div>

                            @error('photo1')
                                <div class="alert alert-danger col-lg-8" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!-- form modal -->

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-center mb-3">
                                            <img id="selectedAvatarModal{{ $pet->id }}" src="{{ asset('storage/' . $pet->photo)}}" class="rounded-circle"
                                                style="width: 103px; height: 103px; object-fit: cover;"
                                                alt="" />
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-primary btn-rounded">
                                                <label class="form-label text-white" for="inputPhoto3{{ $pet->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" fill="currentColor" class="bi bi-plus"
                                                        viewBox="0 0 15 15">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                    </svg>
                                                </label>
                                                <input type="hidden" name="oldImage1" value="{{ $pet->photo }}">
                                                <input type="file" class="form-control d-none" name="photo1"
                                                    id="inputPhoto3{{ $pet->id }}"
                                                    onchange="displaySelectedImage(event, 'selectedAvatarModal{{ $pet->id }}')"
                                                     />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group row mt-4">
                                        <label for="inputNamaHewan" class="col-form-label col-md-2">Nama
                                            Hewan</label>
                                        <div class="col-lg-10">
                                            <input type="text"
                                                class="form-control @error('name1') is-invalid @enderror" name="name1"
                                                id="inputNamaHewan" placeholder=""
                                                value='{{ old('name1', $pet->name) }}'>

                                            @error('name1')
                                           

                                            <script>
                                                       
                                                // Panggil SweetAlert setelah dokumen selesai dimuat
                                                swal("Gagal!", "{{ $message }}", "error");
                                           
                                           </script>
                        
                        
                                           
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputJenisHewan" class="col-form-label col-md-2">Jenis
                                            Hewan</label>
                                        <div class="col-lg-10">
                                            <input type="text"
                                                class="form-control"
                                                name="species1" id="inputJenisHewan" placeholder=""
                                                value='{{ old('species1', $pet->species) }}'>

                                            @error('species1')
                                            <script>
                                                       
                                                // Panggil SweetAlert setelah dokumen selesai dimuat
                                                swal("Gagal!", "{{ $message }}", "error");
                                           
                                           </script>
                                           
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-secondary" data-dismiss='modal'>Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
