@include('header.header')

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row p-1 mt-3">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="page-title m-0">La liste des agents </h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore quibusdam ducimus, rem
                                quis delectus itaque nisi et numquam voluptatibus doloremque, omnis tempore. At natus
                                non error qui officiis, nobis nostrum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row ">

            <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30"><img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-dark mt-0">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                    </ul>
                    <div class="card-body"><a href="#" class="card-link">Card link</a> <a href="#"
                            class="card-link">Another link</a></div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6 col-xl-9">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr>

                                <th>Numero</th>
                                <th>Noms</th>
                                <th>Sexe</th>
                                <th>Etat-Civil</th>
                                <th>phone</th>
                                <th>Nationalité</th>
                                <th>Etat</th>
                                <th>...</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($agents as $item)
                            <tr>
                                <td>{{ $item->numero }}</td>
                                <td>{{ $item->nom }}</td>
                                <td>{{ $item->sexe }}</td>
                                <td>{{ $item->etat_civil }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->nationalite }}</td>
                                <td> <span class="badge badge-info"> Actif </span></td>
                                <td> <div class="d-grid gap-2">
                                    <a    class="btn btn-secondary" href="{{ route('agent.show',encrypt($item->id)) }}">

                                        <i class="far fa-edit"></i> Détail
                                </a>
                                </div>
                                 </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <!-- end col -->
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
