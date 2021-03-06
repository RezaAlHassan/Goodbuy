@extends('layouts.appadmin')
@section('title')
Edit Category
@endsection
@section('content')
<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>


                {!!Form::open(['action'=> 'App\Http\Controllers\CategoryController@updatecategory', 'class'=>'cmxform',
                'method'=>'POST', 'id'=>'commentForm'])!!}
                {{csrf_field()}}
                <div class="form-group">
                    {{Form::hidden('id', $category->id)}}
                    {!!Form::label('', 'Product Category', ['for'=>'cname'])!!}
                    {!!Form::text('category_name', $category->category_name, ['class'=>'form-control',
                    'minlength'=>'2'])!!}

                </div>
                {!!Form::submit('Update', ['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}

            </div>
        </div>
    </div>
</div>

@endsection