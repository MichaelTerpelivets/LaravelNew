@extends('layouts.app') 

@section('content') 

<div class="panel panel-default"> 
    <div class="panel-heading"> 
	Товары 
    </div> 
     @include('common.errors')
    <div class="panel-body"> 
	<table class="table table-striped task-table"> 
	    <!— Заголовок таблицы —> 
	    <thead> 
	    <th>Название</th> 
	    <th>Цена</th> 
	    <th>Описание</th> 
	    <th>Качество</th> 
	    <th>Действие</th> 
	    </thead> 
	    <!— Тело таблицы —> 
	    <tbody> 
		 <form action="/editProduct/{{ $product->id }}" method="POST">
		     {{ csrf_field() }}
		<tr> 
		    Имя задачи 
		    <td class="table-text"> 
			<input type="text" name="name" value="{{ $product->name }}"> 
		    </td> 
		    <td class="table-text"> 
			<input type="text" name="price" value="{{ $product->price }}"> 
		    </td> 
		    <td class="table-text"> 
			<input type="text" name="discription" value="{{ $product->discription }}"> 

		    </td> 
		    <td class="table-text"> 
			<div class="col-sm-2">
			    <select name="category">
				<option>low</option>
				<option>medium</option>
				<option>hight</option>
			    </select>
			</div>
		    </td> 
		    <td>
			<button class="btn btn-danger" name="change">Изменить</button>
		    </td>
		</tr>	
	    </form>

	    </tbody> 
	</table> 
    </div> 
</div> 
@endsection