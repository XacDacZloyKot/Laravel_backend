@extends('layout.app')

@section('title', 'Статьи')

@section('content')
    @include('partials.header')
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl float-left ml-5">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-48 object-cover md:h-full md:w-full mr-10" src="https://sun9-71.userapi.com/impg/GIrreYcc9TqMF4NSItCeeeiHOTFknAoUGECY9Q/r796dBnbjX0.jpg?size=244x336&quality=95&sign=560ce0ee5b91f5a4324a946f41bbcca6&type=album" alt="Я">
            </div>
            <p class="mt-5 w-0.2 ml-10 mb-5">
                Всем привет я Болонин Евгений, мне 19 лет и это мой личный блог.<br>
                Я учусь в ИГЭУ на 2 курсе в группе автоматизированных систем управления. Мне нравится создавать что-то новое.<br>
                Знаю такие языки программирования, как C++, C#, и планирую выучить Python.<br>
                Занимаюсь музыкой, играю в баскетбол, хожу в спортзал.<br>
                Вы можете найти меня в ВК: <a href="https://vk.com/iamfromengland" style="color: blue">/iamfromengland</a> и telegram: Neutrino<br>
                Мой контактный номер телефона: <a href="tel:+79005006380">+79005006380</a><br>
            </p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-80 mb-20">
        @foreach($posts as $post)
            @include('posts.partials.item', ["post" => $post])
        @endforeach
        {{  $posts ->links() }}
    </div>
@endsection
