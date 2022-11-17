@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registre-se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <h3>Dados:</h3>
                        <div class="row mb-3">
                            <label for="Nome_Completo" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="Nome_Completo" type="text" class="form-control @error('Nome_Completo') is-invalid @enderror" name="Nome_Completo" value="{{ old('Nome_Completo') }}" required autocomplete="Nome_Completo" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CPF" class="col-md-4 col-form-label text-md-end">{{__('CPF') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="CPF" id="CPF" class="form-control @error('CPF') is-invalid @enderror" value="{{old('CPF') }}" required>

                                @error('CPF')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Endereço de Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Movie" class="col-md-4 col-form-label text-md-end">{{ __('Filme Preferido') }}</label>

                            <div class="col-md-6">
                                <input id="Movie" type="text" class="form-control" name="Movie" value="{{ old('Movie') }}" required>
                            </div>
                        </div>
                    
                    <h4>Endereço:</h4>

                        <div class="row mb-3">
                            <label for="cep" class="col-md-4 col-form-label text-md-end">{{ __('CEP') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" size="10" maxlength="9" value="{{ old('cep') }}" onblur="pesquisacep(this.value);" required>

                                @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rua" class="col-md-4 col-form-label text-md-end">{{ __('Rua') }}</label>

                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control" name="rua" value="{{ old('rua') }}" size="60" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bairro" class="col-md-4 col-form-label text-md-end">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" size="40" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cidade" class="col-md-4 col-form-label text-md-end">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" size="40" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="uf" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control" name="uf" value="{{ old('uf') }}" size="2" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ibge" class="col-md-4 col-form-label text-md-end">{{ __('IBGE') }}</label>

                            <div class="col-md-6">
                                <input id="ibge" type="text" class="form-control" name="ibge" value="{{ old('ibge') }}" size="8" required>
                            </div>
                        </div>

                    <h4>Senha:</h4>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
