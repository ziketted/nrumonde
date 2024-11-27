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
                            <div class="col-sm-8">
                    <div class="card">

                        <div class="card-body">
                                <h3 class="header-title m-t-0"><small class="text-primary"><b>Nouvel agent </b></small></h3>

                                <div class="m-t-20">
                                    <form action="{{ route('agent.store') }}" method="post">
                                        @csrf

                                        <!-- Numéro Agent -->
                                        <div class="form-group">
                                            <label>Numéro Agent</label>
                                            <div>
                                                <input type="text" name="numero" class="form-control" value="{{ old('numero') }}" required placeholder="Quelle sous-région ?" />
                                                @error('numero')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Nom complet -->
                                        <div class="form-group">
                                            <label>Nom complet</label>
                                            <div>
                                                <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required placeholder="Saisissez le nom complet." />
                                                @error('nom')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Sexe -->
                                        <div class="form-group">
                                            <label>Sexe</label>
                                            <select class="form-control select2" name="sexe" style="width: 100%;">
                                                <option value="" disabled {{ old('sexe') == '' ? 'selected' : '' }}>Sélectionne le sexe</option>
                                                <option value="Féminin" {{ old('sexe') == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                                                <option value="Masculin" {{ old('sexe') == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                            </select>
                                            @error('sexe')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Date de naissance -->
                                        <div class="form-group">
                                            <label>Date de naissance</label>
                                            <div>
                                                <input type="date" name="date" class="form-control" value="{{ old('date') }}" required />
                                                @error('date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Lieu de naissance -->
                                        <div class="form-group">
                                            <label>Lieu de naissance</label>
                                            <div>
                                                <input type="text" name="lieu_naissance" class="form-control" value="{{ old('lieu_naissance') }}" required />
                                                @error('lieu_naissance')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <div>
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="Votre adresse E-mail" />
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Téléphone -->
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <div>
                                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required placeholder="Votre numéro de téléphone" />
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Etat civil -->
                                        <div class="form-group">
                                            <label>Etat civil</label>
                                            <select class="form-control select2" name="etat_civil" style="width: 100%;">
                                                <option value="" disabled {{ old('etat_civil') == '' ? 'selected' : '' }}>Sélectionner votre état civil</option>
                                                <option value="Célibataire" {{ old('etat_civil') == 'Célibataire' ? 'selected' : '' }}>Célibataire</option>
                                                <option value="Marié" {{ old('etat_civil') == 'Marié' ? 'selected' : '' }}>Marié</option>
                                            </select>
                                            @error('etat_civil')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Niveau -->
                                        <div class="form-group">
                                            <label>Niveau</label>
                                            <div>
                                                <input type="text" name="niveau" class="form-control" value="{{ old('niveau') }}" required placeholder="Votre niveau" />
                                                @error('niveau')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Académique -->
                                        <div class="form-group">
                                            <label>Académique</label>
                                            <div>
                                                <input type="text" name="academique" class="form-control" value="{{ old('academique') }}" required placeholder="Votre niveau académique" />
                                                @error('academique')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Numéro de citoyenneté -->
                                        <div class="form-group">
                                            <label>Numéro de citoyenneté</label>
                                            <div>
                                                <input type="text" name="numerocitoyannete" class="form-control" value="{{ old('numerocitoyannete') }}" required placeholder="Votre numéro de citoyenneté" />
                                                @error('numerocitoyannete')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Certificat -->
                                        <div class="form-group">
                                            <label>Certificat</label>
                                            <div>
                                                <input type="text" name="certificat" class="form-control" value="{{ old('certificat') }}" required placeholder="Votre certificat" />
                                                @error('certificat')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Nationalité -->
                                        <div class="form-group">
                                            <label>Nationalité</label>
                                            <select class="form-control country-select" name="nationalite" style="width: 100%;">
                                                <option value="" disabled {{ old('nationalite') == '' ? 'selected' : '' }}>Select a country</option>
                                                <option value="Afghanistan" {{ old('nationalite') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                                <option value="Zambia" {{ old('nationalite') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                                                <option value="Zimbabwe" {{ old('nationalite') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                            </select>
                                            @error('nationalite')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Ville -->
                                        <div class="form-group">
                                            <label>Ville</label>
                                            <div>
                                                <input type="text" name="ville" class="form-control" value="{{ old('ville') }}" required placeholder="Quelle ville ?" />
                                                @error('ville')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Commune -->
                                        <div class="form-group">
                                            <label>Commune</label>
                                            <div>
                                                <input type="text" name="commune" class="form-control" value="{{ old('commune') }}" required placeholder="Quelle commune ?" />
                                                @error('commune')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Adresse -->
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <div>
                                                <textarea required class="form-control" name="adresse" rows="3">{{ old('adresse') }}</textarea>
                                                @error('adresse')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Boutons -->
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Enregistrer</button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Annuler</button>
                                            </div>
                                        </div>
                                    </form>



                                </div>


                        </div>
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
