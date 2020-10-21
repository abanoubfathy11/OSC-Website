@extends('layout.master')
@section('content')
<h1>English Committee</h1>
    <form action="" method="POST">
        {{ csrf_field() }}
        <div class="row py-2">
            <div class="offset-4 col-4">
                <label for="">Date</label>
                <input type="text" name="Date" class="form-control">
            </div>

        </div>
        <div class="row py-2">
            <div class=" offset-4 col-4">
                <label for="">Time</label>
                <input type="text" name="Time" class="form-control">
            </div>
        </div>
        <div class="row py-2">
            <div class=" offset-4 col-4">
                <label for="">Number of Avalliable</label>
                <input type="number" name="NumberOfAva" class="form-control" min="0">
            </div>
        </div>
        <div class="row py-2">
            <div class="offset-4 col-4">
                <input type="submit" value="Add to Committee" class="btn btn-primary">
            </div>
        </div>
    </form>
    <style>
        td{
            border-bottom: 1px solid #09c;
        }
    </style>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Number of Avalliable</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
            </div>
        </div>
@endsection

