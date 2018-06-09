<form method="post" action="/aulas/agregar">
    {{csrf_field()}}
    <div class="form-group">

        <label for="aulaNombre">Número</label>

        <input type="text" class="form-control" id="aulaNombre" name="aulaNombre">

    </div>

    <div class="form-group">

        <label for="aulaSector">Sector</label>

        <select id="aulaSector"  name="sector_id">

            @foreach($sectores as $sector):

                <option value="{{$sector->id}}">{{$sector->nombre}}</option>

            @endforeach

        </select>

    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>