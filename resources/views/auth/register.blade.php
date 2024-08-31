@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="primerNombrePersona" class="col-md-4 col-form-label text-md-end">{{ __('Primer Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="primerNombrePersona" type="text" class="form-control @error('primerNombrePersona') is-invalid @enderror" name="primerNombrePersona" value="{{ old('primerNombrePersona') }}" required autofocus>
                                @error('primerNombrePersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="segundoNombrePersona" class="col-md-4 col-form-label text-md-end">{{ __('Segundo Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="segundoNombrePersona" type="text" class="form-control @error('segundoNombrePersona') is-invalid @enderror" name="segundoNombrePersona" value="{{ old('segundoNombrePersona') }}">
                                @error('segundoNombrePersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="primerApellidoPersona" class="col-md-4 col-form-label text-md-end">{{ __('Primer Apellido') }}</label>
                            <div class="col-md-6">
                                <input id="primerApellidoPersona" type="text" class="form-control @error('primerApellidoPersona') is-invalid @enderror" name="primerApellidoPersona" value="{{ old('primerApellidoPersona') }}" required>
                                @error('primerApellidoPersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="segundoApellidoPersona" class="col-md-4 col-form-label text-md-end">{{ __('Segundo Apellido') }}</label>
                            <div class="col-md-6">
                                <input id="segundoApellidoPersona" type="text" class="form-control @error('segundoApellidoPersona') is-invalid @enderror" name="segundoApellidoPersona" value="{{ old('segundoApellidoPersona') }}">
                                @error('segundoApellidoPersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tipoDocumento_idTipoDocumento" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                            <div class="col-md-6">
                                <select id="tipoDocumento_idTipoDocumento" class="form-control @error('tipoDocumento_idTipoDocumento') is-invalid @enderror" name="tipoDocumento_idTipoDocumento" required>
                                    @foreach($tiposDocumentos as $tipoDocumento)
                                        <option value="{{ $tipoDocumento->idTipoDocumento }}">{{ $tipoDocumento->nombreDoc }}</option>
                                    @endforeach
                                </select>
                                @error('tipoDocumento_idTipoDocumento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numeroDocumentoPersona" class="col-md-4 col-form-label text-md-end">{{ __('Número de Documento') }}</label>
                            <div class="col-md-6">
                                <input id="numeroDocumentoPersona" type="text" class="form-control @error('numeroDocumentoPersona') is-invalid @enderror" name="numeroDocumentoPersona" value="{{ old('numeroDocumentoPersona') }}" required>
                                @error('numeroDocumentoPersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="celularPersona" class="col-md-4 col-form-label text-md-end">{{ __('Celular') }}</label>
                            <div class="col-md-6">
                                <input id="celularPersona" type="text" class="form-control @error('celularPersona') is-invalid @enderror" name="celularPersona" value="{{ old('celularPersona') }}" required>
                                @error('celularPersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="correoPersona" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>
                            <div class="col-md-6">
                                <input id="correoPersona" type="email" class="form-control @error('correoPersona') is-invalid @enderror" name="correoPersona" value="{{ old('correoPersona') }}" required>
                                @error('correoPersona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="direccion_idDireccion" class="col-md-4 col-form-label text-md-end">{{ __('Dirección') }}</label>
                            <div class="col-md-6">
                                <select id="direccion_idDireccion" class="form-control @error('direccion_idDireccion') is-invalid @enderror" name="direccion_idDireccion" required>
                                <div class="container">
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label for="tipoViaPersona">Tipo de Vía</label>
                                                <select id="tipoViaPersona" class="form-control" name="tipoViaPersona" required>
                                                        <option value="Calle">Calle</option>
                                                        <option value="Carrera">Carrera</option>
                                                        <option value="Transversal">Transversal</option>
                                                        <option value="Diagonal">Diagonal</option>
                                                        <option value="Avenida">Avenida</option>
                                                        <option value="Autopista">Autopista</option>
                                </select>
                                </div>
                                
                                            <!-- Número de Vía -->
                                            <div class="col-md-2">
                                                <label for="numeroViaPersona">{{ __('Número de Vía') }}</label>
                                                <input id="numeroViaPersona" type="number" class="form-control" name="numeroViaPersona" required>
                                            </div>

                                            <!-- Nombre de la Vía -->
                                            <div class="col-md-3">
                                                <label for="nombreViaPersona">{{ __('Nombre de la Vía') }}</label>
                                                <input id="nombreViaPersona" type="text" class="form-control" name="nombreViaPersona" required>
                                            </div>

                                            <!-- Cuadrante -->
                                            <div class="col-md-2">
                                                <label for="cuadrantePersona">{{ __('Cuadrante') }}</label>
                                                <select id="cuadrantePersona" class="form-control" name="cuadrantePersona">
                                                    <option value="Norte">Norte</option>
                                                    <option value="Sur">Sur</option>
                                                    <option value="Oriente">Oriente</option>
                                                    <option value="Occidente">Occidente</option>
                                                    <option value="Bis">Bis</option>
                                                    <option value="#">#</option>
                                                </select>
                                            </div>

                                            <!-- Número de Placa -->
                                            <div class="col-md-3">
                                                <label for="numeroPlacaPersona">{{ __('Número de Placa') }}</label>
                                                <input id="numeroPlacaPersona" type="number" class="form-control" name="numeroPlacaPersona" required>
                                            </div>
                                        </div>
                                    </div>
                                </select>
                                @error('direccion_idDireccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nombreUsuario" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario') }}</label>
                            <div class="col-md-6">
                                <input id="nombreUsuario" type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required>
                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="passwordUsuario" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="passwordUsuario" type="password" class="form-control @error('passwordUsuario') is-invalid @enderror" name="passwordUsuario" required>
                                @error('passwordUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="passwordUsuario_confirmation" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="passwordUsuario_confirmation" type="password" class="form-control" name="passwordUsuario_confirmation" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
