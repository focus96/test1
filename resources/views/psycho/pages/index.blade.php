@extends('psycho.template.master')
{{--Главная страница о всеми категориями тестов и их статистикок. И регистрацией--}}

@section('content')
    <span>Мы предлагаем пройти тесты по таким методикам: {{ Auth::id() }}</span>
    <div class="wrapper">
        <ul class="plates">
            @foreach($methods as $method)
                <li>
                    <ul class="container">
                        <li>
                            <img src="{{$method->image}}" alt="Метод тестирования">
                            <span>{{$method->name}}</span>
                        </li>
                        <li>
                            @foreach($tests as $test)
                                @if($test->method_id == $method->id)
                                    <span>-{{$test->test_name}};</span>
                                @endif
                            @endforeach
                        </li>
                        <li>
                            <ul class="statistic">
                                <li>
                                    <span>Количество проведённых тестов</span>
                                    <span>70</span>
                                </li>
                                <li>
                                    <span>Дата последнего тестирования</span>
                                    <span>12.01.19</span>
                                </li>
                                <li>
                                    <span>Дата последнего обновления</span>
                                    <span>10.01.19</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('registration')
    @include('psycho.template.registration')
@endsection
