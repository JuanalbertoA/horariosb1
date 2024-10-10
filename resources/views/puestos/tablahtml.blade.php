    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <ul>
    
    </ul>
    <a href="{{'puestos.create'}}" class="btn button btn-primary">Nvo</a>
    <div
        class="table-responsive-md"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">idpuesto</th>
                    <th scope="col">nombre</th>
                    <th scope="col">tipo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($puestos as $puesto )
                <tr class="">
                    <td scope="row">{{$puesto->id}}</td>
                    <td>{{$puesto->nombre}}</td>
                    <td>{{$puesto->tipo}}</td>
                    <td><a href="{{route('puestos.edit',$puesto->id)}}" class="btn button btn-primary">ED</td>
                    <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary">X</td>
                    <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary">Ver</td>    
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$puestos->links() }}
    </div>