@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nullam egestas felis eget felis commodo condimentum.
                  Pellentesque mollis quis leo nec dapibus.
                  Maecenas pharetra tortor eget sapien sollicitudin, non bibendum mauris volutpat.
                  Donec eu fringilla mauris. Aliquam ut tincidunt quam.
                  Cras condimentum libero nec tellus ornare, non laoreet nunc posuere.
                  Duis rhoncus, urna vitae semper hendrerit, nunc lacus bibendum augue, vitae interdum nisl mauris eu leo.
                </p>

                <p>
                  Morbi hendrerit sit amet tellus vehicula tempor.
                  Integer hendrerit maximus dolor, quis sagittis purus tincidunt non.
                  Pellentesque posuere justo eu turpis congue, ut fringilla turpis fringilla.
                   Mauris ullamcorper tellus libero, ut aliquet ligula viverra imperdiet.
                   Quisque vulputate et elit eu fringilla.
                   Aliquam purus lectus, euismod eget consequat ut, faucibus quis diam.
                    Proin vel diam varius, auctor leo eu, ultricies nunc.
                </p>



                <form action="{{ url('resposta') }}" method="POST" class="form-horizontal">
                       {{ csrf_field() }}

                       <div class="form-group">
                           <label for="lema" class="col-sm-3 control-label">Lema</label>

                           <div class="col-sm-6">
                               <input type="text" name="lema" id="lema" class="form-control" value="{{$resposta->lema}}">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="defesa" class="col-sm-3 control-label">Defesa</label>

                           <div class="col-sm-6">

                               <textArea name="defesa" id="defesa" class="form-control"> {{$resposta->defesa}} </textArea>
                           </div>
                       </div>

                       <div class="form-group">
                           <div class="col-sm-offset-3 col-sm-6">
                               <button type="submit" class="btn btn-default">
                                   Salvar
                               </button>
                           </div>
                       </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
