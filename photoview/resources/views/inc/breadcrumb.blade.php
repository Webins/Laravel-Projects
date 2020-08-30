
<nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 secondary-bg">
        @for ($i = 0; $i < count($data); $i++)
        @if ($i+1 == count($data)) 
        <a class="text-decoration-none text-white " href="{{$href[$i]}}"><li class="breadcrumb-item text-white" aria-current="page"> {{$data[$i]}}</li></a>
        @else
        <a class="text-decoration-none text-white" href="{{$href[$i]}}"><li class="breadcrumb-item active text-white"> {{$data[$i]}}></li></a>
        @endif
       

        @endfor
       
        </ol>
        </nav>

