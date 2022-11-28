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

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome Completo" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" size="30">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CPF" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="CPF" type="text" class="form-control @error('CPF') is-invalid @enderror" placeholder="___.___.___-__" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"name="CPF" required autocomplete="CPF" autofocus>

                                @error('CPF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cep" class="col-md-4 col-form-label text-md-end">{{ __('CEP') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" placeholder="_____-___" pattern="\d{5}-\d{3}" onblur="pesquisacep(this.value);" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus size="10">

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
                                <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{ old('rua') }}" required autocomplete="rua" autofocus size="60">

                                @error('rua')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bairro" class="col-md-4 col-form-label text-md-end">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" size="40" autofocus>

                                @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cidade" class="col-md-4 col-form-label text-md-end">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" size="40" required autocomplete="cidade" autofocus>

                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="uf" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" value="{{ old('uf') }}" required autocomplete="uf" autofocus size="2">

                                @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ibge" class="col-md-4 col-form-label text-md-end">{{ __('Ibge') }}</label>

                            <div class="col-md-6">
                                <input id="ibge" type="text" class="form-control" name="ibge" value="{{ old('ibge') }}" required autocomplete="ibge" size="8" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Movie" class="col-md-4 col-form-label text-md-end">{{ __('Filme preferido') }}</label>

                            <div class="col-md-6">
                                <input id="Movie" type="text" class="form-control @error('Movie') is-invalid @enderror" name="Movie" value="{{ old('Movie') }}" required autocomplete="Movie" autofocus>

                                @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="No mínimo 8 caracteres" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme sua senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                            <div class="col-md-6">
                                <input id="tipo" type="hidden" class="form-control" name="tipo" required autocomplete="tipo" value="Aluno" autofocus>
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