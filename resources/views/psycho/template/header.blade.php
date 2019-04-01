<header>
    <nav>
        <div class="wrapper">
            <a class="logo" href="/">
                <img src="/images/logo.png" alt="Логотип">
            </a>
            <ul>
                <li>
                    <a href="/">На главную</a>
                </li>
                <li>
                    <a href="#">О сайте</a>
                </li>
                <li>
                    <a href="#">Обратная связь</a>
                </li>
            </ul>
            @auth
                {{--Приветствие пользователя--}}
            @else
            <form id="login" action="" method="POST">
                @csrf
                <div>
                    <input type="text" name='login' placeholder="Логин">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div>
                    <input type="button" value="Войти">
                </div>
            </form>
            @endauth
        </div>
        <?php
            if ($_SERVER['REQUEST_URI'] == '/') { ?>
        <div class="headerInfo">
            <span>Пройди тестирование, узнай больше о себе.</span>
            <span>Простые и интересные тесты для студентов</span>
        </div>
        <?php } ?>
    </nav>
</header>
<?php

?>
<script>
    $(function () {
        $('#login input[type=button]').click(function () {

            $.ajax({
                url: '{{route('login')}}',
                type: 'POST',
                cache: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: $('#login').serialize(),
                dataType: 'json',
                success: function (query) {

                     //alert(query);

                    $('#login input[name=password]').focus(function () {
                        $('#login input[name=password]').removeClass('error');
                    });

                        if(query.login == 'empty') {
                            $('#login input[name=login]').addClass('error').attr('placeholder', query.errorLog);
                        } else if (query.login == 'range') {
                            $('#login input[name=login]').addClass('error').val('').attr('placeholder', query.errorLog);
                        }

                        if (query.password == 'empty') {
                            $('#login input[name=password]').addClass('error').attr('placeholder', query.errorPass);
                        } else if (query.password == 'range') {
                            $('#login input[name=password]').addClass('error').val('').attr('placeholder', query.errorPass);
                        }

                        if (query.user == 'empty' || query.user == 'false') {
                            $('#login input[name=login]').addClass('error');
                            $('#login input[name=password]').addClass('error');
                        } else if (query.user == 'true') {
                            $('#login input[name=login]').css({background: '#81e2bb'});
                            $('#login input[name=password]').css({background: '#81e2bb'});
                        }
                },
                error: function () {
                    alert('error');
                }
            })
        });
    })
</script>
