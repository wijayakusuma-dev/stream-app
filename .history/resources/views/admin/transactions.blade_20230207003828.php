@extends('admin.layouts.base');

@section('title', 'Transaction');

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Transactions</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Package</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Transaction Code</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                      <td>{{ $transaction->id }}</td>
                      <td>{{ $transaction->package->name }}</td>
                      <td>{{ $transaction->user->name }}</td>
                      <td>{{ $transaction->amount }}</td>
                      <td>{{ $transaction->transaction_code }}</td>
                      <td>{{ $transaction->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

@section('js')
  <script>
    $('#transaction').DataTable();
  </script>
@endsection
