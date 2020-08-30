@extends('layouts.app')
@section('content')


<div class="row mt-4">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header bg-dark text-center text-white">
               <h1> About </h1>
            </div>
            <div class="card-body">
                <h1 class="card-title">Information </h1>
                <li class="list-unstyled">
                    <h2 class="card-text mt-1 ">
                    &emsp;&emsp;<div class="badge">Information1</div>
                    </h2>
                </li>
                <li class="list-unstyled">
                    <h2 class="card-text mt-1">
                    &emsp;&emsp;<div class="badge">Information2</div>
                    </h2>
                </li>
                <li class="list-unstyled">
                    <h2 class="card-text mt-1">
                    &emsp;&emsp;<div class="badge">Information3</div>
                    </h2>
                </li>
                <li class="list-unstyled">
                    <h2 class="card-text mt-1">
                    &emsp;&emsp;<div class="badge">Information4</div>
                    </h2>
                </li>
                <footer class="bg-white border-0 blockquote-footer"> <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur perferendis obcaecati, ut, error similique placeat modi corrupti consectetur quod quasi cupiditate numquam odio, beatae hic fuga reiciendis ipsa neque eius?</h2> </footer>
            </div>
        </div>


        </li>
        

    </div>
</div>
@endsection


 


@section('sidebar')
    @parent
    About
@endsection