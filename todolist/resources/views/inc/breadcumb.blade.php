
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        @for ($i = 0; $i < count($data); $i++)
        @if ($i+1 == count($data)) 
        <a class="text-decoration-none " href="{{$href[$i]}}"><li class="breadcrumb-item" aria-current="page"> {{$data[$i]}}</li></a>
        @else
        <a class="text-decoration-none" href="{{$href[$i]}}"><li class="breadcrumb-item active"> {{$data[$i]}}></li></a>
        @endif
       

        @endfor
       
        </ol>
        </nav>

