<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>@lang('main.contact_us')</title>
</head>
<body>
<header>
    @include('layout/header')
</header>

<div class="greenscreen">
    <h1>@lang('main.how_to_contact_us')</h1>
</div>

<main id="contactmain">
    <p>@lang('main.could_find')<br>
        Instagram - <a href="https://www.instagram.com">jewelleryShop</a> <br>
        Telegram - <a href="https://web.telegram.org">JewelleryShopHere</a></p>

    <container id="contactform">
        <form action="{{route('send.email')}}" method="post">
            @csrf
            <p>@lang('main.write_on_post')<br> @lang('main.have_questions') </p>
            <input class="inputcontact" type="text" name = "name" placeholder="@lang('main.your_fio')">
            <input class="inputcontact" type="text" name = "email" placeholder="@lang('main.your_email')">
            <input class="inputcontact" type="text" name = "message" placeholder="@lang('main.message_text')">
            <div>
                <center>
                    <button class="butcontact" type="reset">@lang('main.clear')</button>
                    <button class="butcontact" type="submit">@lang('main.send')</button>
                </center>
            </div>
        </form>
    </container>
</main>

<container class="maps">
    <h1>@lang('main.on_maps')</h1>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7ebc470a1ac025f43d036e76443c832f07bc86221bdeeabf1fc39e2d9a4bd895&amp;width=1280&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
</container>

</body>
</html>
