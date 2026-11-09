@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="card">

    <h1>My Profile</h1>

    <p>Here is the user information stored in the database.</p>

    @if ($user)

        <p><strong>Username:</strong> {{ $user->username }}</p>

        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>

        <p><strong>Email:</strong> {{ $user->email }}</p>

    @else

        <p>No user information found.</p>

    @endif

</div>

@endsection