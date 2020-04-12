<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Car</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        

                <div class="links">
                    <a href="{{url('/adminhome')}}">Homepage</a>
                    <a href={{url('/delete')}}>Delete</a>
                </div>
                <h1>Add Car</h1>
                <form method="post">
                 <!-- @csrf -->
                <!--{{ csrf_field()}} -->   
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    Car Name: <input type="text" name="carname" > <br><br>
                    Type: <input type="text" name="type" > <br><br>
                    Price: <input type="text" name="price" ><br>
                    <input type="submit" name="submit" value="Submit" >
                </form>
            </div>
        </div>
    </body>
</html>
