<form action="/api/participations/{{$participate->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="present" placeholder="present">
    <select name="participate_id" placeholder="Participate Id">
        @foreach ($users as $user)
        <option value="{{$participate->id}}" 
        {{$participate->id  == $participate->participate_id ? 'selected' : ''}}
    >{{$participate->name}}</option>
            @endforeach
    </select>
    <input type="date" name="end_date" placeholder="End_date"> 
    <select name="status" placeholder="Status">
        <option value=1 
        <?php echo $participate->status == 1 ? 'selected' : '' ?>
        >Open</option>
        <option value=0 
        <?php echo $participate->status == 0 ? 'selected' : '' ?>
        >Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>