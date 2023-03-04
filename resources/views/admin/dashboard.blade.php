@extends('layouts.app')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    My Camps
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkout as $checkout)
                                <tr>
                                    <td>{{ $checkout->User->name }}</td>
                                    <td>{{ $checkout->Camp->title }}</td>
                                    <td>{{ $checkout->Camp->price }}</td>
                                    <td>{{ $checkout->created_at->format('M-d-y') }}</td>
                                    <td>
                                        @if ($checkout->is_paid)
                                            <div class="span badge bg-success">Paid</div>
                                        @else
                                            <div class="span badge bg-warning">Waiting</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if (!$checkout->is_paid)
                                            <form action="{{route('admin.checkout.update' ,$checkout->id)}}" method="post">
                                                @csrf
                                                <button class="btn-primary btn-sm">Set to Paid</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Camps Registered</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection