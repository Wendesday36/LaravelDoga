@foreach ($participates as $participate)
    <form action="/api/participate/{{$participate->participate?id}}" method="post">
        @csrf
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$participate->participate?id}}">
        </div>
    </form>
@endforeach