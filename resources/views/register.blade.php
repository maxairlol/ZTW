<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sklep U Jacka | Rejestracja</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/register.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Wprowadź podstawowe dane</h2>
                <h4 class = "form-signin-heading" align="center" style="color:red;">
                   @if(count($errors) > 0)
                       @foreach($errors->all() as $error)
                           {{$error}}
                       @endforeach
                    @endif
                </h4>
            </div>
            <div class="card-body">
                <form method="POST" action = "{{ url('/register') }}">@csrf
                    <div class="form-row m-b-55">
                        <div class="name">Imię i Nazwisko</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="Name">
                                        <label class="label--desc">Imię</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="Surname">
                                        <label class="label--desc">Nazwisko</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <label class="label label--block">Płeć</label>
                        <div class="p-t-15">
                            <label class="radio-container m-r-55">Mężczyzna
                                <input type="radio" checked="checked" name="Sex" value="M">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Kobieta
                                <input type="radio" name="Sex" value="K">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="Email">
                                <label class="label--desc">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Hasło</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="Password">
                                <label class="label--desc">Haslo</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row m-b-55">
                        <div class="name">Telefon</div>
                        <div class="value">
                            <div class="row row-refine">

                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="PhoneNumber">
                                        <label class="label--desc">Numer telefonu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Adres</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="Address">
                                <label class="label--desc">Adres</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Kod pocztowy</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="PostalCode">
                                <label class="label--desc">Kod pocztowy</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Twoje miasto</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select id='item_category' name = 'Id_City' class='form-control' required>
                                        @foreach($cities as $city => $id )
                                            <option value="{{ $id }}">{{ $city }}</option>
                                        @endforeach
                                        <option disabled='disabled' selected='selected'>Wybierz swoje miasto</option></select>
                                        </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Zarejestrować</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>
</html>
