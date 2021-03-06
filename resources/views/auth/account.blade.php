@extends('admin.layouts.dashboard.app')

@section('content')
<!-- Page-Title -->

<div class="row">
	<div class="col-sm-12">
		<div class="page-title-box">
			<div class="btn-group">

			</div>
		</div>
	</div>
</div>
<!-- end page title end breadcrumb -->

<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-12">
			<!-- meta -->
			<div class="profile-user-box card-box">
				<div class="row">
					<div class="col-sm-9">
						<div class="media-body">
							<h4 class="mt-1 mb-1 font-18">{{ $user->name }}</h4>

						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-right">
							<a href="{{ route('change-password') }}" class="btn btn-light btn-block">
								<i class="mdi mdi-account-settings-variant mr-1"></i> Alterar Senha
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--/ meta -->
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3 class="text-center mb-40">
						Minha Conta
					</h3>
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif

					<form class="form-horizontal" method="POST" action="{{ route('my.account.post') }}">
						@csrf
						<div class="form-group row">
							<div class="col-12">
								<label for="name">{{ __('labels.FullName') }}</label>

								<input id="name" type="text"
									class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
									value="{{ !is_null(auth()->user()->name)  ? auth()->user()->name : old('name') }}"
									required autofocus placeholder="{{ __('placeholders.FullName') }}">

								@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif

							</div>
						</div>

						<div class="form-group row mb-40">
							<div class="col-12 col-lg-9 mb-20">
								<label for="email">{{ __('labels.Email') }}</label>

								<input id="email" type="email"
									class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
									value="{{ !is_null(auth()->user()->email)  ? auth()->user()->email : old('email') }}" required placeholder="{{ __('placeholders.Email') }}">

								@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>

						</div>

						<hr>

						<div class="form-group row">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-purple block" type="submit">
									{{ __('labels.Update') }}
								</button>
								<a href="javascript:history.back()" class="btn btn-danger block">Voltar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection