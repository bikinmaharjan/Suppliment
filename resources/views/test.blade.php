<?php
if (isset($_POST['check_list[]'])) {
    echo $_POST['check_list[]'];
    # code...
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="{{ url('/js/filter.js') }}">
    </script>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/test.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="main">
        <div class="header">
            <h1>Header</h1>
        </div>
        {{-- <div class="supplement">
            <input type="hidden" name="supplement" id="supplement"
                value="{{ URL::to(Request::route()->getPrefix()) }}" />
        <select name="selectCompany" id="selectCompany">
            <option value="">Select Company</option>
            @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->company_name }}</option>

            @endforeach
        </select>

    </div> --}}
    <div class="search">
        <input type="text" name="search" id="supplementInput" onkeyup="searchSupplement()" placeholder="Search Supplements........" >
    </div>
    <div>
        <form action="{{ route('calculate.show') }}" method="post" class="gridContent">

            @csrf
            
            <div class="selectSupplement" height="10">

                <table class="table table-dark table-striped table-responsive" id="selectSupplementTable">
                    <thead>
                        <tr class="header">
                            <th>#</th>
                            <th>Supplement Name</th>
                            <th>Company Name</th>
                        </tr>
                    <tbody style="display:block;  height: 750px; overflow-y: scroll">
                        @foreach ($supplements as $Supplement)
                        <tr>
                            <td><input type="checkbox" value="{{ $Supplement-> name }}" class="checks" name="check_list[]"></td>
                            <td>{{ $Supplement-> name }}</td>
                            <td>{{ $Supplement-> company -> company_name }}</td>
                        </tr>

                        @endforeach
                    </tbody>

                    </thead>
                </table>


            </div>

            <div class="selectedSupplement">
                <table class="table table-striped table-bordered" id="selectedSupplementTable">
                    <thead>
                        <tr>
                            <th>Selected Supplements</th>
                        </tr>

                    </thead>
                    <tbody id="list" name='test[]'>

                    </tbody>
                </table>



            </div>

            <div class="claculateSupplement">
                <table class="table table-active table-responsive" id="calculateTable">
                    <thead>
                        <tr>
                            <th>Micro Nutrients</th>
                            <th>Total Micro Nutrient Level</th>
                            <th>Threat level</th>
                        </tr>
                    </thead>
                    <tbody id="calculatedList" style="display:block;  height: 750px; overflow-y: scroll">

                        @foreach ($micro_nutrients as $Nutrient)
                        <tr>
                            <td><label value="{{ $Nutrient->id }}">{{ $Nutrient->name }}</label></td>
                            <td>10 mg</td>
                            <td>Over Limit </td>
                        </tr>
                        @endforeach



                    </tbody>

                </table>

            </div>

            <div class="leftbtn">
                <input type="button" value="Confirm" class="btn btn-primary" id="selectBtn" onclick="getSelected()">
            </div>
            <div class="middlebtn">


                {{-- <input type="button" value="Test Supplement Level" class="btn btn-success" id="testBtn"
                    onclick="calculate()"> --}}
                <button type="submit" class="btn  btn-success"></button>

                {{-- <a href="{{ url('/calculate') }}" class="btn btn-success">Test</a> --}}
                <input type="button" value="Remove Supplement" class="btn btn-danger" id="deleteBtn"
                    onclick="deleteSelected()">
            </div>

        </form>

    </div>
    <div class="button">


    </div>

    <div class="footer">
        <small>Footer</small>
    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>




</body>

</html>
