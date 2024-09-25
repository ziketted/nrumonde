@include('header.header')

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row p-1">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="page-title m-0">La liste des agents </h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore quibusdam ducimus, rem quis delectus itaque nisi et numquam voluptatibus doloremque, omnis tempore. At natus non error qui officiis, nobis nostrum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>

                <th>Numero</th>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Etat-Civil</th>
                <th>phone</th>
                <th>Academique</th>
                <th>Niveau</th>
                <th>Certificat</th>
                <th>Nationalité</th>
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
                    <td>{{ $item->academique }}</td>
                    <td>{{ $item->niveau }}</td>
                    <td>{{ $item->certificat }}</td>
                    <td>{{ $item->nationalite }}</td>
                </tr>
           @endforeach

        </tbody>
    </table>
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
