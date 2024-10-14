<style>
    body {
        font-family: Calibri;
        display: flex;
        justify-content: center;
    }

    .sendMe {
        width: 100%;
    }

    table {
        font-size: 18px;
        max-width: 360px;
        min-width: 360px;
    }

    input {
        font-size: 18px;
        width: 100%;
        font-family: Calibri;
    }

    button {
        font-size: 18px;
        width: 100%;
        font-family: Calibri;
    }

    .td1 {
        width: 30%;
    }

    .td2 {
        width: 70%;
    }
</style>
<form method='POST' action="authorization">
    @csrf
    <h1 style="text-align: center;">Авторизация</h1>
    <table>
        <tr>
            <td class='td1'>Номер телефона</td>
            <td class='td2'><input id='phonenumber' name='phonenumber' type='text' placeholder='Ваш номер телефона' value=''>
                @error('phonenumber')
                <div>{{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class='td1'>Пароль</td>
            <td class='td2'><input id="password" name="password" type="password" value="" placeholder="Пароль">
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            @error('auth')
            <div>{{ $message }}</div>
            @enderror
        </tr>
        <tr>
            <td colspan="2"> <button class="sendMe" name="sendMe" value="1">Войти</button></td>
        </tr>
        <tr>
            <td colspan="2"><a href="registration">Нет аккаунта?</a></td>
        </tr>
    </table>
</form>
</body>
