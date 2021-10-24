
<br><br><br>
<h1 align="center">
    {{"id : ".$id}}
</h1>
<h1 align="center">
    {{"name : ".$name}}
</h1>
<h1 align="center">
    {{"age : ".$age}}
</h1>

@for ($i=0; $i < 10; $i++)
    <h1 align="center">
        {{$name}}
        <br>
    </h1>
@endfor
