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
<form method='POST' action='registration'>
    <?php echo csrf_field(); ?>
    <h1 style='text-align: center;'>Регистрация</h1>
    <table>
        <tr>
            <td class='td1'>Номер телефона</td>
            <td class='td2'><input id='phonenumber' name='phonenumber' type='text' placeholder='Ваш номер телефона' value=''>
                <?php $__errorArgs = ['phonenumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class='td1'>Email</td>
            <td class='td2'><input id='email' name='email' type='text' placeholder='Ваш email' value=''>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class='td1'>Пароль</td>
            <td class='td2'><input id='password' name='password' type='password' value='' placeholder='Пароль'>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class='td1'>Повторите пароль</td>
            <td class='td2'><input id='repeatpassword' name='repeatpassword' type='password' value='' placeholder='Повторите пароль'>
                <?php $__errorArgs = ['password_repeat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan='2'><button class='sendMe' name='sendMe' value='1'>Зарегистрироваться</button></td>
        </tr>
        <tr>
            <td colspan='2'> <a href='authorization'>Уже есть аккаунт?</a>
            </td>
        </tr>
    </table>
</form>
<?php /**PATH C:\OSPanel\domains\lomov\TOPYOURCAR\resources\views/registration.blade.php ENDPATH**/ ?>