@extends('admin.layouts.master')

@section('content')
<main class="app-layout-content">
  <div  class="container-fluid p-y-md">
    <ul style="list-style: none;" class="navbar-nav mr-auto">
                        <li><a href="{{route('admin.products.index')}}"> Quần áo</a></li> 
                        <li>&nbsp;&nbsp;&nbsp; </li>
                        <li><a href="{{ route('admin.product.create')}}"> Tạo Quần áo mới </a></li>           
    </ul>
  </div>

  <div  class="container-fluid p-y-md">      
    <div class="container">
      <div class="card">
        <div class="card-header">Chỉnh sửa Quần áo</div>
          <div class="card-body">
            <form action="{{ route('admin.products.update', $product->id)}}" method="POST">
             @csrf
             @method('PUT')
              <div class="container mt-3">
                <fieldset class="form-group">
                   <label>Code</label>
                   <input type="text" class="form-control" id="code" value="{{$product->code}}" name="code">
                </fieldset>
                <fieldset class="form-group">
                   <label>Name</label>
                   <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name">
                </fieldset>
                <fieldset class="form-group">
                   <label>Brand</label>
                   <input type="text" class="form-control" id="brand" value="{{$product->brand}}" name="code">
                </fieldset>
                <fieldset class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="5" id="description" name="description">{{$product->description}}</textarea>
                </fieldset>
                <fieldset class="form-group">
                  <label for="image">Price</label>
                  <input type="number" name="price" value="{{$product->price}}" class="form-control">                    
                </fieldset>
                <fieldset class="form-group">
                  <label for="formGroupExampleInput">Category_id</label>
                  <select class="form-control" name="category_id">
                    @foreach ($categories as $key => $value)
                    @if ($product->category_id == $key) 
                    <option value="{{$key}}" selected>{{$value}}</option>
                    @else
                    <option value="{{$key}}">{{$value}}</option>
                    @endif
                    @endforeach
                    </select>
                    </fieldset>
              </div>

              <div class="form-group">
                <button class="form-control btn btn-success" type="submit">Lưu</button>
              </div>
          </form>
        </div>
    </div>
  </div>
</div>
</main>




@endsection