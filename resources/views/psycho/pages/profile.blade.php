@extends('psycho.template.master')

@section('content')
    <div class="wrapper">
        <div class="profile">
            <ul class="photo">
                <li>
                    <img src="/img/240.jpg" alt="Аватар">
                    <a href="" onclick="event.preventDefault(); document.getElementById('photo-choose').click();">Выбрать фото</a>
                </li>
                <li>
                    <form id="photo-form" action="" method="">
                        <input style="display: none" id="photo-choose" type="file">
                        <input type="submit" value="Редактировать">
                    </form>
                </li>
            </ul>
            <ul class="info">
                <li>
                    <span>Сыч Руслан Вячеславович</span>
                </li>
                <li>
                    <span>Факультет: ФАМИТ</span>
                    <span>Группа: ЭСА-10т</span>
                    <span>Почта: zexely@gmail.com</span>
                </li>
                <li>
                    <table>
                        <tr>
                            <td>
                                <a href="#">Диагностика межличностных отношений</a>
                            </td>
                            <td>
                                <a href="#">Психодиагностика профессиональной деятельности</a>
                            </td>
                            <td>
                                <a href="#">Тестирование памяти и внимания</a>
                            </td>
                            <td>
                                <a href="#">Диагностика уровня интеллекта</a>
                            </td>
                        </tr>
                    </table>
                </li>
            </ul>
        </div>
        <div class="test">
            <ul>
                <li>
                    <span>Тестирование памяти и внимания</span>
                </li>
                <li>
                    <ul>
                        <li>
                            <span>Метод Мюнстенберга</span>
                            <a href="">Результат</a>
                        </li>
                        <li>
                            <span>Тест определения степени переключаемости внимания</span>
                            <a href="">Результат</a>
                        </li>
                        <li>
                            <span>Проверка кратковременной памяти</span>
                            <a href="">Результат</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span>Результаты тестирования</span>
                </li>
                <li>
                    <span>Дата прохождения теста: 17.02.2019</span>
                    <span>Результат "Проверка кратковременной памяти":</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolores cumque reprehenderit, hic iusto nulla earum expedita sed ullam culpa eveniet sapiente fugiat eius adipisci voluptate ea fuga delectus reiciendis! Eos modi quibusdam, voluptas pariatur fuga, nulla quidem laborum ab. Sed distinctio eius quia adipisci nulla ab qui vel, autem iusto dolorum accusamus odit ullam omnis sit doloremque veritatis fugiat recusandae. Alias saepe, optio tempora quam quo temporibus dolores dolore nostrum! Cumque porro, laboriosam exercitationem veniam deserunt reprehenderit delectus molestias.</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
