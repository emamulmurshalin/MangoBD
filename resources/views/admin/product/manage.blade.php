@extends('admin.master')
@section('content')
    <div class="row" style="position:relative;right: 20px">
        <div class="col-lg-5 text-center">
            {{--@if(session()->has('message'))--}}
            @if($message = Session::get('message'))
                <p class="alert" style="font-weight: 500;font-size: 16px;background-color: #61d864;padding:12px;color:#fff;margin-top: 1px;position:fixed;right: 50px;z-index: 1">{{ $message }}</p>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Management system</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Category Information</h2>
                        <a href="{{ url('/admin/product/create') }}"><h2 style="float: right; margin-left: 10px; padding: 7px; margin-bottom: 20px; border-radius: 6px;" class="btn-success">Add New<i class="fa fa-plus" style="margin-left: 10px; margin-right: 2px;"></i></h2></a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>S.L</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>image</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td><img src="{{asset($product->picture_1)}}" height="100" width="100"/></td>
                                    <td>{{$product->isApprove}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td class="center">
                                        @if($product->isApprove=='Approve')
                                            <a href="{{ url('/admin/product/unpublish/'.$product->unique_id) }}" title="Un Publish" class="btn btn-success"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
                                        @else
                                            <a href="{{ url('/admin/product/publish/'.$product->unique_id) }}" title="Publish" class="btn btn-warning"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                                        @endif
                                        <a href="{{ url('/admin/product/'.$product->unique_id.'/edit') }}" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                        {!! Form::open(['url' => '/admin/product/'.$product->unique_id,'method'=>'DELETE','style'=>'display:inline','id'=>'deleteForm']) !!}
                                        {!! Form::hidden('image',$product->picture_1) !!}

                                        {!! Form::close() !!}
                                        <button class="btn btn-danger" title="Delete" id="deleteFormSubmit"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#deleteFormSubmit').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((result) => {
                    if(result){
                        $("#deleteForm").submit();
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else{
                        swal("Your information is safe!");
                    }

                })
            });
        });
    </script>
@endsection
