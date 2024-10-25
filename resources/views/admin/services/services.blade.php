@extends('admin.layout.master')
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet"/>
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hizmetler</li>
        </ol>
        <div class="right">
            <a type="button" class="btn btn-primary" href="{{route("servicesAdd")}}">
                Hizmet Ekle
            </a>

        </div>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Hizmetler</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Hizmet Adı</th>
                                <th>Eklenme Tarihi</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><img src="" style="object-fit: cover;" alt="">
                                    </td>
                                    <td>asdad</td>
                                    <td>asdasd</td>
                                    <!--  data-bs-toggle="modal"
                                           data-bs-target=".bd-example-modal-xl"
                                           -->
                                    <td><a href="javascript:void(0);"
                                           onclick="">Düzenle</a>
                                        | <a href="">Sil</a></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="example">
        <!-- Button trigger modal -->

        <div class="modal fade bd-example-modal-xl"  tabindex="-1" aria-labelledby="myExtraLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Kategori Ekle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body" >
                        <form id="servicesCategoryUpdate" action="{{route('servicesCategoryAdd')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Kategori Fotoğraf</h6>
                                        <input type="file" class="dropify" name="photoUrl" id="myDropify"/>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Kategori Adı</label>
                                <input id="name" class="form-control" name="categoryName" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Kategori Açıklama</label>
                                <input id="description" class="form-control" name="description" type="text">
                            </div>


                            <button class="btn btn-primary">Kaydet</button>
                        </form>



                    </div>
                    <div class="modal-footer">
                        <!--
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary">Kaydet</button>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>

    <div class="example">
        <!-- Button trigger modal -->

        <div class="modal fade bd-example-modal-xl" id="sevices_category_modal" tabindex="-1" aria-labelledby="myExtraLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Kategori Ekle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body" id="services_category_update">


                    </div>
                    <div class="modal-footer">
                        <!--
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary">Kaydet</button>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script>

    </script>
    <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pickr/pickr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>


@endpush

@push('custom-scripts')
    <script type="text/javascript">

        site_url = "{{url("/")}}"
        token = "{{csrf_token()}}"
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/pickr.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

@endpush

