@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Список Hовостей</div>
 
                <div class="card-body">
<a class="btn btn-primary" href="/saroy/public/posts/create">Создать Hовость</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="margin-top: 20px;">Все новости</h3> 
                    @if(count($posts)>0)
                       <table class="table table-striped">
                           <tr>
                               <th>Заглавие</th>
                               <th></th>
                               <th></th>
                           </tr>
                           @foreach($posts as $post)
                           <tr>
                               <th>{{$post->title}}</th>
                               <th><a href="/saroy/public/posts/{{$post->id}}/edit" class="btn btn-warning">Изменить</a></th>
                               <th>
                                   {!!Form::open(['action'=>['PostsController@destroy', $post->id]])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Удалит', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
                               </th>
                           </tr>
                           @endforeach
                           @else
                            <tr>
                               <th>Нет новостей</th>
                           </tr>
                       </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
