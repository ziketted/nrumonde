@include('header.header')

<div class="wrapper">
    <div class="container-fluid">
        <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card"><img class="card-img-top img-fluid"
                                src="{{ Storage::url($agent->profile_photo_path) }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">

                                    <div class="mt-3">
                                        <h4>{{ $agent->nom }}</h4>
                                        <p class="text-secondary mb-1">{{ $agent->nationalite }}</p>
                                        <p class="text-muted font-size-sm">{{ $agent->numero }} </p>

                                        <hr>
                                        <form action="{{ route('agent.updateProfilePhoto', $agent->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')

                                            <div class="form-group">
                                                <button type="button" class="fileupload btn btn-secondary waves-effect">
                                                    <i class="ion ion-md-images"></i> <span>Changer Image</span>
                                                    <input type="file" class="upload" name="profile_photo_path"
                                                        @error('profile_photo_path') is-invalid @enderror>
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                @error('profile_photo_path')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe mr-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>E-mail </h6>
                                    <span class="text-secondary">{{ $agent->email }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa fas-home"></i>Adresse</h6> <br>
                                    <span class="text-secondary">{{ $agent->adresse }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="{{ route('agent.updateProfilePhoto', $agent->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 text-secondary">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>Status actuel</label>
                                                    <div>
                                                        <select class="form-control select2" name="sexe"
                                                            style="width: 100%;">
                                                            <option value="" {{ old('is_active')=='' ? 'selected' : ''
                                                                }}>Actif</option>
                                                            <option value="" {{ old('is_active')=='2' ? 'selected' : ''
                                                                }}>Inactif</option>

                                                        </select>
                                                        @error('sexe')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-6 text-secondary">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label>Numéro Agent</label>
                                                    <div>
                                                        <input type="text" name="numero" class="form-control"
                                                            value="{{ old('numero') }}" required placeholder="..." />
                                                        @error('numero')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 text-secondary">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label>Nom complet</label>
                                                    <div>
                                                        <input type="text" name="nom" class="form-control"
                                                            value="{{ old('nom') }}" required
                                                            placeholder="Saisissez le nom complet." />
                                                        @error('nom')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">

                                        <div class="col-sm-12 text-secondary">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label>Sexe</label>
                                                    <select class="form-control select2" name="sexe"
                                                        style="width: 100%;">
                                                        <option value="" disabled {{ old('sexe')=='' ? 'selected' : ''
                                                            }}>Sélectionne le sexe</option>
                                                        <option value="Féminin" {{ old('sexe')=='Féminin' ? 'selected'
                                                            : '' }}>Féminin</option>
                                                        <option value="Masculin" {{ old('sexe')=='Masculin' ? 'selected'
                                                            : '' }}>Masculin</option>
                                                    </select>
                                                    @error('sexe')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Date de naissance</label>
                                                    <div>
                                                        <input type="date" name="date" class="form-control"
                                                            value="{{ old('date') }}" required />
                                                        @error('date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Lieu de naissance</label>
                                                    <div>
                                                        <input type="text" name="lieu_naissance" class="form-control"
                                                            value="{{ old('lieu_naissance') }}" required />
                                                        @error('lieu_naissance')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 text-secondary">
                                            <div class="form-group row">

                                                <div class="col-sm-4">
                                                    <label>Etat civil</label>
                                                    <select class="form-control select2" name="etat_civil"
                                                        style="width: 100%;">
                                                        <option value="" disabled {{ old('etat_civil')=='' ? 'selected'
                                                            : '' }}>Sélectionner votre état civil</option>
                                                        <option value="Célibataire" {{ old('etat_civil')=='Célibataire'
                                                            ? 'selected' : '' }}>Célibataire</option>
                                                        <option value="Marié" {{ old('etat_civil')=='Marié' ? 'selected'
                                                            : '' }}>Marié</option>
                                                    </select>
                                                    @error('etat_civil')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Téléphone</label>
                                                    <div>
                                                        <input type="text" name="phone" class="form-control"
                                                            value="{{ old('phone') }}" required
                                                            placeholder="Votre numéro de téléphone" />
                                                        @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Nationalité</label>
                                                    <select class="form-control country-select" name="nationalite"
                                                        style="width: 100%;">
                                                        <option value="" disabled {{ old('nationalite')=='' ? 'selected'
                                                            : '' }}>Select a country</option>
                                                        <option value="Afghanistan" {{ old('nationalite')=='Afghanistan'
                                                            ? 'selected' : '' }}>Afghanistan</option>
                                                        <option value="Zambia" {{ old('nationalite')=='Zambia'
                                                            ? 'selected' : '' }}>Zambia</option>
                                                        <option value="Zimbabwe" {{ old('nationalite')=='Zimbabwe'
                                                            ? 'selected' : '' }}>Zimbabwe</option>
                                                    </select>
                                                    @error('nationalite')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank"
                                                href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <form action="{{ route('agent.updateProfilePhoto', $agent->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="card mb-3">
                                                <div class="card-body">

                                                    <div class="row">

                                                        <div class="col-sm-6 text-secondary">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label>E-mail</label>
                                                                    <div>
                                                                        <input type="email" name="email"
                                                                            class="form-control"
                                                                            value="{{ old('email') }}" required
                                                                            placeholder="Votre adresse E-mail" />
                                                                        @error('email')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 text-secondary">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label>Niveau</label>
                                                                    <div>
                                                                        <input type="text" name="niveau"
                                                                            class="form-control"
                                                                            value="{{ old('niveau') }}" required
                                                                            placeholder="Votre niveau" />
                                                                        @error('niveau')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row">

                                                        <div class="col-sm-12 text-secondary">
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label>Académique</label>
                                                                    <div>
                                                                        <input type="text" name="academique"
                                                                            class="form-control"
                                                                            value="{{ old('academique') }}" required
                                                                            placeholder="Votre niveau académique" />
                                                                        @error('academique')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Numéro de citoyenneté</label>
                                                                    <div>
                                                                        <input type="text" name="numerocitoyannete"
                                                                            class="form-control"
                                                                            value="{{ old('numerocitoyannete') }}"
                                                                            required
                                                                            placeholder="Votre numéro de citoyenneté" />
                                                                        @error('numerocitoyannete')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Certificat</label>
                                                                    <div>
                                                                        <input type="text" name="certificat"
                                                                            class="form-control"
                                                                            value="{{ old('certificat') }}" required
                                                                            placeholder="Votre certificat" />
                                                                        @error('certificat')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-secondary">
                                                            <div class="form-group row">

                                                                <div class="col-sm-4">
                                                                    <label>Ville</label>
                                                                    <div>
                                                                        <input type="text" name="ville"
                                                                            class="form-control"
                                                                            value="{{ old('ville') }}" required
                                                                            placeholder="Quelle ville ?" />
                                                                        @error('ville')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Commune</label>
                                                                    <div>
                                                                        <input type="text" name="commune"
                                                                            class="form-control"
                                                                            value="{{ old('commune') }}" required
                                                                            placeholder="Quelle commune ?" />
                                                                        @error('commune')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Adresse</label>
                                                                    <div>
                                                                        <textarea required class="form-control"
                                                                            name="adresse"
                                                                            rows="1">{{ old('adresse') }}</textarea>
                                                                        @error('adresse')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <a class="btn btn-info " target="__blank"
                                                                href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('header.footer')
