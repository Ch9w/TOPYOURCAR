<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }

    .DIV {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .head {
        font-size: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 40px 0 40px;
    }

    .logo {
        padding: 10px 0 0 10px;
        height: 100px;
    }
    a {
        text-decoration: none;
        color: #000;
    }

    .hr1 {
        height: 10px;
        border: none;
        margin: 0;
        padding: 0;
        background: linear-gradient(hsl(39, 100%, 50%, 0.25), #FF8C00);
        margin-bottom: 50px;
        margin-top: -10px;
    }

    .info {
        text-align: center;
        font-size: 20px;
        margin-bottom: 40px;
    }

    .hr2 {
        background-color: hsl(0, 0%, 50%);
        height: 4px;
    }
    footer {
        display: flex;
        justify-content: space-between;
        font-size: 40px;
        align-items: center;
        padding: 60px;
    }

    footer div {
        width: calc(100%/3);
    }
    .footer-div1 {
        text-align: left;
    }
    .footer-div2 {
        text-align: center;
    }
    .footer-div3 {
        text-align: right;
    }

</style>

<body>
    <div class='DIV'>
        <div>
            <div class='head'>
                <a href='main'><img class="logo" src='{{ asset('images/TOPYOURCAR.png') }}'></a>
                <a href='catalog'>Каталог</a>
                <a href='news'>Новости</a>
                <a href='profile'>{{$email}}</a>
            </div>
            <div class='hr1'></div>
            <div>
            </div>
            <div class='info'>
                Компания TOPYOURCAR — это современный автосалон, который предлагает широкий выбор автомобилей различных
                марок и
                моделей.<br>
                Мы стремимся предоставить нашим клиентам высококачественные услуги, индивидуальный подход и оптимальные
                условия
                покупки и обслуживания автомобилей.<br>
                В нашем автосалоне вы сможете найти автомобиль на любой вкус и кошелёк.<br>
                Мы предлагаем автомобили в отличном состоянии, с полной историей обслуживания и гарантией от
                производителя.<br>
                Наши специалисты помогут вам выбрать автомобиль, соответствующий вашим потребностям и предпочтениям,<br>
                а также предоставят профессиональную консультацию по всем вопросам, связанным с покупкой и эксплуатацией
                автомобиля.<br>
                В TOPYOURCAR вы найдёте не только автомобили, но и атмосферу комфорта и уюта.<br>
                Наш автосалон оснащён современным оборудованием и технологиями, которые позволяют нашим клиентам
                чувствовать
                себя комфортно и уверенно во время выбора и покупки автомобиля.
            </div>
        </div>
        <div>
            <div class='hr2'></div>
            <footer>
                <div class="footer-div1">
                    <a href='#'>Политика конфиденциальности</a>
                </div>
                <div class="footer-div2">
                    <a href='#'>О компании</a>
                </div>
                <div class="footer-div3">
                    <a href='#'>Социальные сети</a>
                </div>
            </footer>
        </div>
    </div>
</body>
