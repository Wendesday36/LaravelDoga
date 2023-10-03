@foreach ($participates as $participate)
    <form action="/api/participates/{{$participate->participate_id}}" method="post">
        @csrf
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$participate->participate_id}}">
        </div>
    </form>
@endforeach