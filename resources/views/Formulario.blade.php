@extends('Plantilla')

@section('contenido')

@if (session()->has('confirmacion'))

    {!! "<script> Swal.fire(
        '¡Correcto!',
        'Tu recuerdo llego el controlador!',
        'success'
        ) </script>" !!}
    
@endif

@if($errors->any())
        @foreach ($errors->all() as $error)
        {!!"<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Revisa todos los campos!'
        })</script>"!!}
    
        @endforeach
    @endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5"> Formulario</h1>

    

    

        <div class="card text-center">

            <div class="card-body">

                <form method="POST" action="guardardatos"> 
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Pon algo aqui</label>
                        <input type="text" class="form-control" name="txtalgo">

                        <p class="text-danger fst.italic">
                            {{$errors->first('txtalgo')}}</p>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Aqui tambien</label>
                        <input type="text" class="form-control" name="txtotroalgo">

                        <p class="text-danger fst.italic">
                            {{$errors->first('txtotroalgo')}}</p>
                    </div>

                    <button type="submit" class="btn btn-primary">Listo!</button>

                </form>

                

            </div>
        </div>
</div>
@stop