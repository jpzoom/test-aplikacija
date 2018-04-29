@extends('layouts.app')
@section("content")

<div class = "container">
    <h1>Evo ti promjene</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tenetur labore quae perferendis accusamus officiis quasi aperiam exercitationem ipsam ducimus, mollitia a cumque natus? Facilis soluta ratione cum sunt sed?</p>
    </div>
@endsection

@section("sidebar")
    @parent <!--dodaje se za prosljeđivanje contenta iz <p> od app.blade.php -->
    <p>This is appended to the sidebar</p> <!-- bez @parent nema contenta iz app.blade.php -->
@endsection
