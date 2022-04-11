<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>component</title>
    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    
@include('libs.component.01_btn')

@include('libs.header' )

<div class="c-dev-title1">breadcrumb</div>
@include('libs.breadcrumb')

@include('libs.component.01_btn' )
@include('libs.component.02_title' )
@include('libs.component.03_icon' )
@include('libs.component.04_form' )
@include('libs.component.05_text' )
@include('libs.component.06_navi' )
@include('libs.component.07_img' )
@include('libs.component.08_list' )
@include('libs.component.09_table' )
@include('libs.component.10_line' )
@include('libs.component.11_video' )
@include('libs.component.12_slide' )
@include('libs.component.99_other' )

<div class="c-dev-title1">side</div>
@include('libs.sidebar' )

<div class="c-dev-title1">footer</div>
@include('libs.footer' )

</body>
</html>