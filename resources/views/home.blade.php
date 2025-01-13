<h1>home Page</h1>
<h1>{{$name}}</h1>

<!-- //if else -->
@if($name=='anil')
<h2>the name is anil</h2>
@elseif($name=='sunil')
<h2>the name is sunil</h2>
@else
<h2>No name</h2>
@endif

<!-- //foreach loop -->
@foreach($users as $user)
<h2>{{$user}}</h2>
@endforeach


<!-- //for loop -->
<div>
    @for($i=1;$i<=10;$i++)
    <h2>{{"2 * ".$i." = ".$i*2}}</h2>
    @endfor
</div>


<!-- //while loop -->
<div>
    @php
    $i=1;
    @endphp
    @while($i<=10)
    <h2>{{"3 * ".$i." = ".$i*3}}</h2>
    @php
    $i++;
    @endphp
    @endwhile
</div>