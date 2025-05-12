<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>This is Go Details</p>
    <h1>This is About Of Blade</h1>

    {{-- @php
        $message = 'This is the Over 18 blade';
        $age = 33;
    @endphp
    @if ($age < 18)
        <h4>He is Child ! </h4>
    @elseif ($age >= 18 && $age < 60)
        <h4>He is Adult ! </h4>
        @else
        <h4>He is Old ! </h4>
    @endif

    
    <p>{{ $message }}</p> --}}

    @php
        $age = 33;
        $gender = "Female";

        // $message = "He is the Over . - $age years old";

        $message = "He is the Over . $gender - $age years old";

    @endphp

    @if ($age < 18)
        <h4>He is Child!</h4>
    @elseif ($age >= 18 && $age < 60)
        <h4>He is Adult!</h4>
    @else
        <h4>He is Old!</h4>
    @endif

    <p>{{ $message }}</p>


    @isset($gender)
        @switch($gender)
            @case('male')
                <h3>He is Man</h3>
            @break

            @case('Female')
                <h3>She is girl</h3>
            @break

            @default
                <h3>He is Unknown</h3>
        @endswitch
    @endisset






    {{-- <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul> --}}



</body>

</html>
