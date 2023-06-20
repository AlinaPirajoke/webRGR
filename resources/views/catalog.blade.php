<!DOCTYPE HTML>
<html lang="en">
<head>
    @vite(['resources/css/catalog.css'])

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>Каталог</title>
</head>
<body>
<header>
    @include('layout/header')
</header>
<div class="greenscreen">
    <h1>@lang('main.catalog')</h1>
</div>
<container class="menucactalog">
    <a href="#new"><img  src="img\newpic.svg" alt=""></a>
    <container class="col">
        <container class="horiz">
            <a href="#rings"><img  src="img\ringspic.svg" alt=""></a>
            <a href="#earrings"><img  src="img\earringspic.svg" alt=""></a>
        </container>
        <container class="horiz">
            <a href="#chain"><img  src="img\chainpic.svg" alt=""></a>
            <a href="#bracelets"><img  src="img\braceletpic.svg" alt=""></a>
        </container>
    </container>
</container>
<div class="greenscreen"></div>

<!-- тут кнопочка для поднятия наверх -->
<button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
<script>
    @vite(['resources/js/scrollButton.js'])
</script>
<!--  -->

<!-- кольца -->
<div id="rings" class="product">
    <h1 class="section_name">@lang('main.rings')</h1>
    <div class="line"></div>
    <container class="item_block">

        @foreach($products as $product)
            @if ($product->category === 'ring')
                @include('layout/card', compact('product'))
            @endif
        @endforeach
    </container>
</div>
<!-- сережки -->
<div id="earrings" class="product">
    <h1 class="section_name">@lang('main.earrings')</h1>
    <div class="line"></div>
    <container class="item_block">

    @foreach($products as $product)
        @if ($product->category === 'earrings')
            @include('layout/card', compact('product'))
        @endif
    @endforeach

    </div>
</container>
</div>

<!-- ОЖЕРЕЛЬЕ     -->
<div id="chain" class="product">
    <h1 class="section_name">@lang('main.chains')</h1>
    <div class="line"></div>
    <container class="item_block">

        @foreach($products as $product)
            @if ($product->category === 'chain')
                @include('layout/card', compact('product'))
            @endif
        @endforeach

    </container>
</div>

<!-- БРАСЛЕТЫ -->
<div id="bracelets" class="product">
    <h1 class="section_name">@lang('main.bracelets')</h1>
    <div class="line"></div>
    <container class="item_block">

        @foreach($products as $product)
            @if ($product->category === 'bracelet')
                @include('layout/card', compact('product'))
            @endif
        @endforeach

    </container>
</div>

<!-- новинки -->
<div id="new" class="product">
    <h1 class="section_name">@lang('main.new')</h1>
    <div class="line"></div>
    <container class="item_block">

        @foreach($newProducts->take(3) as $product)
                @include('layout/card', compact('product'))
        @endforeach

    </container>
</div>
<footer>
    @include('layout/footer')
</footer>
</body>
</html>
