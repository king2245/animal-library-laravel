@extends('layouts.app')

@section('content')

<div style="text-align: center; padding: 35px 15px;">

    <h2>Welcome to the Animal Library!</h2>

    <p>
        Discover the fascinating animals created by Hungarian author
        István Fekete and explore the novels in which they appear.
    </p>

    <h3>Explore our collection</h3>

    <p>
        Our library contains 200 animal characters and 38 novels.
        You can explore the database and discover connections
        between animals and literary works.
    </p>

    <p style="margin-top: 30px;">
        <a href="/database"
           style="background: #285943; color: white; padding: 12px 25px;
           text-decoration: none; border-radius: 6px;">
            Explore the Database
        </a>
    </p>

</div>

@endsection