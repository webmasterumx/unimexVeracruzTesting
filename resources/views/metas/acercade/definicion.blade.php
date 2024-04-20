@switch($acercadeFirst->id)
    @case(1)
        @section('titulo') Historia de UNIMEX | UNIMEX Veracruz @endsection
        @include('metas.acercade.historia')
    @break

    @case(2)
        @section('titulo') Mensaje del Rector | UNIMEX Veracruz @endsection
        @include('metas.acercade.mensaje')
    @break

    @case(3)
        @section('titulo') Servicios en los Planteles | UNIMEX Veracruz @endsection
        @include('metas.acercade.servicios')
    @break

    @case(4)
        @section('titulo') Valores Institucionales | UNIMEX Veracruz @endsection
        @include('metas.acercade.valores')
    @break

@endswitch
