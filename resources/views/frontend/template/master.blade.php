<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/unisco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 20:39:34 GMT -->
<head>

    @include('frontend.template.partials.header')
</head>
<body>

@include('frontend.template.partials.headertopbar')
<div data-toggle="affix">
    <div class="container nav-menu2">
        <div class="row">
            <div class="col-md-12">
               @include('frontend.template.partials.navbar')
            </div>
        </div>
    </div>
</div>
@yield('body')


<footer>
    @include('frontend.template.partials.footers')
</footer>


@include('frontend.template.partials.scripts')
</body>

</html>
