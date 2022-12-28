@php
 $class = 'h4' ; 
@endphp
<div class="container">
    <h3>{{App::getNameModule(1)}}: demo 1</h3>
    @include('partials\demo\item', 
    [
        'num1' => $data -> num1,
        'num2' => $data -> num2,
        'num3' => $data -> num3,
        'sub' => $data -> sub,
        'class' => $class,
        
    ]
    )
    {{-- <div>
        <p class="{{$class}}">{{$num1}} + {{$num2}} = {{$num3}}</p>
        <p>Hai + hai = bốn</p>
    </div> --}}
</div>