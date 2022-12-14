@extends('admin.template.base')
@section('content')
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Responsive Hover Table</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Discount</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($foods as $food)
                      <tr>
                        <td>{{$food->id}}</td>
                        <td>{{$food->name}}</td>
                        <td>Rp.{{number_format($food->price,2)}}</td>
                        <td>{{$food->quantity}}</td>
                        <td>{{$food->discount}}</td>
                        <td><span class="tag tag-success">{{$food->status}}</span></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {{ $foods->links('admin.template.pagination') }}
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
          <div>
          </div>
@endsection