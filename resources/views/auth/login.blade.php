@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/ZK-TECO.png" alt="IMG">
                </div><br>

                <form class="login100-form validate-form" METHOD="POST" action="{{route('login')}}">
                    {{csrf_field()}}
					<span class="login100-form-title">
						INGRESO AL SISTEMA BIOMETRICO
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese usuario: @empetec">
                        <input class="input100" type="text" name="user" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>

                    <div class="text-center p-t-12">
						<span class="txt1">
							Me olvidé
						</span>
                        <a class="txt2" href="#">
                            Usuario / Contraseña?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection