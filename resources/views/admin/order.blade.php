@extends('admin.template.template')
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
                        <th>Buyer</th>
                        <th>Producst</th>
                        <th>Total Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->foods->count()}}x</td>
                        <td>Rp.{{number_format($order->totalPayment(),2)}}</td>
                        <td><span class="tag tag-success">{{$order->status}}</span></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
@endsection