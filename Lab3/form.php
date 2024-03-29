<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Lab 3</title>
    <style>
        input {
            height: 3em;
            margin-bottom: 1em;
            box-shadow: tomato 0 0 6px;
            border: 1px orange solid;
        }
    </style>
</head>

<body
    style="display: flex; flex-direction: column; justify-content: center; align-items: center; background-image: url(backgr.jpg); background-repeat: no-repeat; background-size: cover">
    <h1 style="color: white; font-weight: bold; text-shadow: orangered 1px 0 6px;">Форма</h1>
    <form method="post" style="display: flex; flex-direction: column; justify-content: center; width: 35%">
        <input name="name" placeholder="ФИО" required type="text">
        <input name="phone" placeholder="Номер телефона" required type="tel">
        <input name="email" placeholder="Email" required type="email">
        <input name="year" placeholder="Дата рождения" required type="date">
        <div style="flex-direction: row;margin-top: 20px">
            <input name="sex" required style="height: fit-content; box-shadow: none" type="radio" value="M"><span
                style="color: white; font-weight: bold; text-shadow: darkblue 1px 0 6px;">Мужской</span>
            <input name="sex" required style="height: fit-content; box-shadow: none" type="radio" value="F"><span
                style="color: white; font-weight: bold; text-shadow: darkblue 1px 0 6px;">Женский</span>
        </div>
        <select multiple name="language[]" style="margin-top: 20px; height: 7em">
            <option value="Pascal">Pascal</option>
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="Haskel">Haskel</option>
            <option value="Clojure">Clojure</option>
            <option value="Prolog">Prolog</option>
            <option value="Scala">Scala</option>
        </select>
        <textarea name="biography" placeholder="Расскажите о себе..." required
            style="margin-top: 20px; height: 10em; resize: none"></textarea>
        <p><input name="contract_agreement" required style="height: fit-content; box-shadow: none" type="checkbox"
                value="yes"><span style="color: white; font-weight: bold; text-shadow: darkblue 1px 0 6px;">Я согласен с
                условиями контракта</span></p>
        <input required type="submit" value="Отправить">
    </form>
</body>

</html>