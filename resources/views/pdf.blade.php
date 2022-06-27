<!DOCTYPE html>

<html>

<head>

    <title>laravel-pdf</title>
{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
{{--    <script src="{{asset('js/app.js')}}"></script>--}}
    <style>
        table{
            width: 100%;

        }

        table tr th{
            background-color:#04AA6D;

            color:white;

            border: 1px solid #ddd;

            padding: 8px;

        }

        table tr td{

            border: 1px solid #ddd;

            padding: 8px;

        }
        .page-break {
            page-break-after: always;
        }
    </style>

</head>

<body>

<h3>Laravel 8 PDF Example Using dompdf </h3>
<a class="btn btn-primary" href="{{ route('download-pdf') }}">Export to PDF</a>
<div class="row">
    <div class="col-12">
        <table class="table">

            <tr>
                <th>#</th>
                <th>Full Name</th>

                <th>Email Id</th>

                <th>Age</th>

                <th>Phone Number</th>

            </tr>
            @foreach($employee ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone_number }}</td>
                    <td>{{ $data->dob }}</td>
                </tr>
            @endforeach

            <tr>
                {{--        <td>{{$full_name}}</td>--}}
            </tr>

        </table>
        <div class="page-break"></div>
        <div class="">This is Another Page2</div>
    </div>
</div>

</body>

</html>
