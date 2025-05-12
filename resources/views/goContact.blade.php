<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @php
        $message = 'This is the contact blade';
        // $products = ['phone','TV','aircon','power bank','Computer'];
    @endphp

    <p>This is Go Contact</p>

    <ul>{{ $message }}</ul>
    <ul>
        {{-- @foreach ($products as $product)
            <li>{{$product}}</li>
        @endforeach --}}
        @foreach ($users as $key => $user)
            <li>{{ $key }} : {{ $user }}</li>
        @endforeach

    </ul>
</body>

</html>
