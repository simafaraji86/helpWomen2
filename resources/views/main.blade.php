<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('css/main.css') }}" />

    <script src="{{ url('js/jquery.min.js') }}"></script>

</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-2">
                Sima
            </div>
            <div class="col-sm-8">
                <div class="media">
                    <a href="" class="media-right">
                        <img src="{{ url('img/Koala.jpg') }}" class="media-object media-bottom" width="100px" height="100px" alt="">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">کوالا</h2>
                            <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                Sima
            </div>
        </div>
        <div class="row">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-danger">
                    <input type="checkbox" checked autocomplete="off">
                    چکباکس1
                </label>
                <label class="btn btn-danger">
                    <input type="checkbox" autocomplete="off">
                    چکباکس2
                </label>
                <label class="btn btn-danger">
                    <input type="checkbox" autocomplete="off">
                    چکباکس3
                </label>

            </div>
        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<a href="" class="btn btn-primary">What's happen</a>

<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/tether.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js')}}"></script>
</body>
</html>