<div id="reg">
    <span>Регистрация для прохождения тестов</span>
</div>
<div class="registration">
    <div class="wrapper">
        <form id="register" action="{{route('create')}}#register" method="POST">
            @csrf
            <ul>
                <li>
                    <span>Регистрация</span>
                </li>
                <li>
                    <label for="name">Имя</label>
                    <input id="name" type="text" name="name" value="{{old('name')}}">
                    <div class="error">
                        @if ($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </div>
                </li>
                <li>
                    <label for="surname">Фамилия</label>
                    <input id="surname" type="text" name="surname" value="{{old('surname')}}">
                    <div class="error">
                        @if ($errors->has('surname'))
                            {{$errors->first('surname')}}
                        @endif
                    </div>
                </li>
                <li>
                    <label for="patronymic">Отчество</label>
                    <input id="patronymic" type="text" name="patronymic" value="{{old('patronymic')}}">
                    <div class="error">
                        @if ($errors->has('patronymic'))
                            {{$errors->first('patronymic')}}
                        @endif
                    </div>
                </li>
                <li>
                    <label for="faculty">Факультет</label>
                    <select name="faculty" id="faculty">
                        <option selected="selected" disabled="disabled" value="0">Не выбрано</option>
                        @foreach($faculty as $facult)
                            <option value="{{$facult->faculty_id}}">{{$facult->name_facult}}</option>
                        @endforeach
                    </select>
                    <div class="error">
                        @if ($errors->has('faculty'))
                            {{$errors->first('faculty')}}
                        @endif
                    </div>
                </li>
                <li>
                    <label for="group">Группа</label>
                    <select name="group" id="group">

                    </select>
                    <div class="error">
                        @if ($errors->has('group'))
                            {{$errors->first('group')}}
                        @endif
                    </div>
                </li>
                <li>
                    <label for="email">Почта</label>
                    <input id="email" type="email" name="email" value="{{old('email')}}">
                    <div class="error">
                        @if ($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </div>
                </li>
                <li>
                    <input type="submit" value="Зарегистрироваться">
                </li>
            </ul>
        </form>
    </div>
</div>
<script>
    $('#group').html('<option selected="selected" disabled="disabled" value="0">Выберите факультет</option>');

    $('select[name=faculty]').change(function () {
        var faculty = $('select[name=faculty]').val();

        var selects = '<option selected="selected" disabled="disabled" value="0">Не выбрано</option>';
        @foreach($groups as $group)
        if (faculty == {{$group->facult_id}}) {
            selects += "<option value='{{$group->group_id}}'>{{$group->name_group}}</option>";
        }
        @endforeach

        $('#group').html(selects);
    });
</script>
