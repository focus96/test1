@extends('psycho.template.master')

@section('content')
    <div class="endTest">
        <ul class="test">
            <li>
                <span>Тест на проверку памяти</span>
            </li>
            <li>
                <span>1. Сколько телефонных номеров вы храните в голове?</span>
            </li>
            <li>
                <form action="" method="">
                    <table class="radio">
                        <tr>
                            <td>
                                <input type="radio" id="1" name="test">
                                <label for="1">Lorem ipsum dolor sit amet, consectetur adipisicing.</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="2" name="test">
                                <label for="2">Lorem ipsum dolor sit amet, consectetur adipisicing.</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="3" name="test">
                                <label for="3">Lorem ipsum dolor sit amet, consectetur adipisicing.</label>
                            </td>
                        </tr>
                    </table>
                    <input style="display: none;" type="submit">
                </form>
            </li>
            <li class="next">
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Следующий вопрос⟶</a>
            </li>
        </ul>
    </div>
@endsection
