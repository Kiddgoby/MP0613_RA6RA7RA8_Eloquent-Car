@extends('layouts.base')

@section('title', 'Not found')

@section('body')
    <!-- main content -->
	<main class="main main--sign" data-bg="img/bg/bg.png">
		<!-- error -->
		<div class="page-404">
			<div class="page-404__wrap">
				<div class="page-404__content">
					<h1 class="page-404__title">404</h1>
				<p class="page-404__text">The page you are looking for is not available!</p>
				<a href="{{ route('home.index') }}" class="page-404__btn"><span>Go back</span></a>
				</div>
			</div>
		</div>
		<!-- end error -->
	</main>
	<!-- end main content -->
@endsection