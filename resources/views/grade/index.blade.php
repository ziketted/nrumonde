@include('header.header')

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row p-1">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="page-title m-0">Nos agences </h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore quibusdam ducimus, rem quis delectus itaque nisi et numquam voluptatibus doloremque, omnis tempore. At natus non error qui officiis, nobis nostrum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-4">
            <div class="col-sm-12">



                <div class="row">
                            <div class="col-sm-4">
                    <div class="card">

                        <div class="card-body">
                                <h3 class="header-title m-t-0"><small class="text-primary"><b>Nouvelle Agence </b></small></h3>

                                <div class="m-t-20">
                                    <form action="{{ route('grade.store') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label>Votre grade</label>
                                            <div>
                                                <input type="text" name="sousregion" class="form-control" required parsley-type=""
                                                    placeholder="Type de grade ?" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Votre fonction</label>
                                            <div>
                                                <input type="text" name="ville" class="form-control" required parsley-type=""
                                                    placeholder="Quelle est la fonction ? " />
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <textarea required class="form-control" name="description" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                id="submitButton">
                                                    Enregistrer
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    Annuler
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                        </div>
                    </div>
                            </div>
                    <div class="col-sm-8">
                        <h3 class="m-t-0"><small class="text-primary"><b></b></small></h3>

                        <div class="m-t-20">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Grade</th>
                                        <th>Fonction</th>
                                    </tr>
                                </thead>


                                <tbody>
                                   @foreach ($fonctions as $items)

                                        <tr>
                                            <td>{{ $items->id }}</td>
                                            <td>{{ $items->grade }}</td>
                                            <td>{{ $items->fonction }}</td>
                                        </tr>

                                   @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- end row -->
            </div>
        </div>





    </div> <!-- end row -->
</div>

<script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js') }}"></script>

<script>
    // Initialize Select2 for the country-select element
    $(document).ready(function() {
        $('.country-select').select2({
            placeholder: 'Select a country',
            allowClear: true
        });
    });
</script>

<script src="{{ 'https://cdn.jsdelivr.net/npm/sweetalert2@11' }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            Swal.fire({
                title: 'Succès',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Erreur',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>
<!-- end wrapper -->
@include('header.footer')
