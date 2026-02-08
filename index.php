<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="description" content="ДАНИИЛ РОМАНОВИЧ — ювелирный консьерж из Китая. Премиум-камни и изделия под ключ. Прозрачно. Конфиденциально. По договору.">
    <meta name="color-scheme" content="dark only">
    <meta name="theme-color" content="#0B0B0F">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="supported-color-schemes" content="dark">
    <title>ДАНИИЛ РОМАНОВИЧ — Ювелирный консьерж</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="top" aria-hidden="true"></div>


    <!-- ============================================
         HEADER
         ============================================ -->
    <header id="header">
        <div class="container">
            <div class="header-left">
                <div class="logo" data-content="settings.site_name">Daniil Romanovich</div>
            </div>

            <nav class="header-nav" aria-label="Навигация">
                <a href="index.php" class="header-nav__link is-active" data-page="home">Главная</a>
                <a href="catalog.html" class="header-nav__link" data-page="catalog">Каталог</a>
                <a href="bags.html" class="header-nav__link" data-page="bags">Сумки</a>
                <a href="watches.html" class="header-nav__link" data-page="watches">Часы</a>
                <a href="#channels" class="header-nav__link" data-page="channels">Контакты</a>
            </nav>

            <div class="header-right">

                <button class="header-menu-btn" type="button" aria-label="Открыть меню" aria-expanded="false" data-mobile-nav-toggle>
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>

        <div class="header-mobile-nav" data-mobile-nav aria-hidden="true">
            <div class="header-mobile-panel" role="navigation" aria-label="Меню">
                <button class="header-mobile-close" type="button" aria-label="Закрыть меню" data-mobile-nav-close>
                    <span aria-hidden="true">×</span>
                </button>
                <a href="index.php" data-page="home">Главная</a>
                <a href="catalog.html" data-page="catalog">Каталог</a>
                <a href="bags.html" data-page="bags">Сумки</a>
                <a href="watches.html" data-page="watches">Часы</a>
                <a href="#channels" data-page="channels">Контакты</a>
            </div>
        </div>
    </header>

    <!-- ============================================
         HERO SECTION
         ============================================ -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-eyebrow" data-content="hero.eyebrow">Private Jewelry Concierge</div>
                <h1 data-content="hero.title" class="hero-title-gold">
                    Персональный доступ<br>к high-end ювелирным изделиям
                    <span data-content="hero.subtitle">Подбор, проверка и сопровождение сделок с личным контролем на каждом этапе.</span>
                </h1>
<div class="hero-buttons">
                    <a href="https://t.me/Daniil_Dealer" target="_blank" class="btn btn-primary" data-link="settings.telegram_link">
                        <span class="tg-icon-circle">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.161l-1.97 9.296c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.538-.194 1.006.128.833.927z"/>
                            </svg>
                        </span>
                        <span data-content="hero.button_primary_text">Написать в Telegram</span>
                    </a>
                    <a href="#process" class="btn btn-outline" data-content="hero.button_secondary_text">Как проходит сделка</a>
                </div>
                <div class="hero-micro" data-content="hero.micro">Конфиденциально · Безопасно · Агентская модель</div>
                <div class="hero-badges" data-list="hero.badges">
                    <div class="badge">
                        <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                        <span data-content="hero.badge_1">Договор с юрлицом</span>
                    </div>
                    <div class="badge">
                        <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        <span data-content="hero.badge_2">Конфиденциальность</span>
                    </div>
                    <div class="badge">
                        <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <span data-content="hero.badge_3">Подбор камней</span>
                    </div>
                    <div class="badge">
                        <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        <span data-content="hero.badge_4">Сопровождение под ключ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         EXPERT SECTION
         ============================================ -->
    <section class="expert" id="expert">
        <div class="container">
            <div class="expert-grid">
                <div class="expert-image reveal-left">
                    <div class="expert-frame">
                        <span class="corner corner-tl"></span>
                        <span class="corner corner-tr"></span>
                        <span class="corner corner-bl"></span>
                        <span class="corner corner-br"></span>
                    </div>
                    <img src="https://daniil-dealer.ru/images/home/F6.jpg" alt="Даниил Романович — ювелирный агент" data-image="expert.image">
                </div>
                <div class="expert-content reveal-right">
                    <h2 data-content="expert.name">ДАНИИЛ РОМАНОВИЧ</h2>
                    <h3 data-content="expert.role">Ювелирный агент и консьерж по работе с Китаем</h3>
                    <p data-content="expert.description">
                        Я сопровождаю сделки по ювелирным изделиям и драгоценным камням: от подбора и проверки параметров до договора и доставки «под ключ».<br><br>
                        Работаю аккуратно, прозрачно и конфиденциально. Возможна личная встреча для подбора изделия и согласования деталей.
                    </p>
                    <div class="trust-points" data-list="expert.trust_points">
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Договор с юридическим лицом</span>
                        </div>
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Фиксация условий до оплаты</span>
                        </div>
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Проверка характеристик</span>
                        </div>
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Фото- и видео-фиксация</span>
                        </div>
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Трекинг доставки</span>
                        </div>
                        <div class="trust-point">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Конфиденциальность</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         SERVICES SECTION
         ============================================ -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="reveal title-gold" data-content="services.title">Специализация</h2>
            <div class="services-grid" data-list="services.items">
                <div class="glass-card service-card reveal">
                    <h3>Премиум-сегмент</h3>
                    <h4>Инвестиционные камни и ювелирные изделия</h4>
                    <ul class="service-list">
                        <li>Бриллианты высоких характеристик</li>
                        <li>Натуральные сапфиры</li>
                        <li>Бирманские рубины</li>
                        <li>Изумруды Колумбии</li>
                        <li>Индивидуальные заказы</li>
                        <li>Эксклюзивные изделия под заказ</li>
                    </ul>
                </div>
                <div class="glass-card service-card reveal">
                    <h3>Сумки, часы, аксессуары</h3>
                    <h4><span class="kicker-line">Дополнительно</span><span class="kicker-line">к ювелирному направлению</span></h4>
                    <ul class="service-list">
                        <li>Подбираю брендовые позиции оригинального качества</li>
                        <li>Сумки: Hermès, Louis Vuitton, Chanel.<br>Часы: Rolex, Audemars Piguet и другие</li>
                        <li>Аксессуары: очки, портмоне, ремни, мелкая кожгалантерея</li>
                        <li>Доставка под ключ и проверка перед выкупом</li>
                    </ul>
                </div>
                <div class="glass-card service-card reveal">
                    <h3>Брендовые изделия</h3>
                    <h4>Люксовые бренды со скидкой от 50%</h4>
                    <ul class="service-list">
                        <li>Cartier</li>
                        <li>Van Cleef & Arpels</li>
                        <li>Bulgari</li>
                        <li>Tiffany & Co.</li>
                        <li>Chopard</li>
                        <li>И другие мировые бренды</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         PROCESS SECTION
         ============================================ -->
    <section class="process" id="process">
        <div class="container">
            <h2 class="reveal title-gold" data-content="process.title">Прозрачный процесс сделки</h2>
            <p class="process-subtitle reveal" data-content="process.subtitle">Каждый этап фиксируется и согласуется заранее. Вы понимаете, что происходит и где вы находитесь в процессе.</p>
            <div class="process-steps" data-list="process.steps">
                <div class="process-step reveal">
                    <span class="step-number">01</span>
                    <h4>Запрос и задача</h4>
                    <p>Вы описываете изделие, бюджет и требования. Я уточняю детали и формирую параметры сделки.</p>
                </div>
                <div class="process-step reveal">
                    <span class="step-number">02</span>
                    <h4>Подбор и проверка</h4>
                    <p>Я подбираю варианты у проверенных производителей и проверяю соответствие заявленным параметрам.</p>
                </div>
                <div class="process-step reveal">
                    <span class="step-number">03</span>
                    <h4>Согласование перед оплатой</h4>
                    <p>До оплаты вы получаете фото, видео и описание изделия. Оплата — только после вашего подтверждения.</p>
                </div>
                <div class="process-step reveal">
                    <span class="step-number">04</span>
                    <h4>Сопровождение сделки</h4>
                    <p>Я контролирую процесс производства, логистики и оформления, информируя вас о статусе на каждом этапе.</p>
                </div>
                <div class="process-step reveal">
                    <span class="step-number">05</span>
                    <h4>Получение изделия</h4>
                    <p>Вы получаете изделие лично или с доставкой. Сделка считается завершённой только после фактического получения.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         CONFIDENTIALITY SECTION
         ============================================ -->
    <section class="confidentiality" id="confidentiality">
        <div class="container">
            <div class="confidentiality-content reveal">
                <h2 data-content="confidentiality.title" class="title-gold">Конфиденциальность и платежи</h2>
                <p data-content="confidentiality.description">
                    Все сделки проходят в режиме строгой конфиденциальности.<br>
                    Данные клиента, состав заказа и условия не раскрываются третьим лицам.<br><br>
                    В расчётах часто используется Altyn Wallet как удобный сервис для международных сделок. Конкретные способы оплаты согласуются индивидуально.
                </p>
                <div class="confidentiality-icons">
                    <div class="conf-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        <span>Защита данных</span>
                    </div>
                    <div class="conf-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Безопасность</span>
                    </div>
                    <div class="conf-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                        <span>Международные расчёты</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         FEATURES ROW (Urgent + Meeting)
         ============================================ -->
    <section class="features" id="features">
        <div class="container">
            <div class="features-row">
                <div class="feature-block reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <h3>Срочная доставка</h3>
                    <p>В отдельных случаях возможна доставка премиум-изделий и камней до 24 часов при наличии в ближайшем хабе и согласованной логистике. Условия подтверждаются до оплаты.</p>
                </div>
                <div class="feature-block reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                    <h3>Личная встреча</h3>
                    <p>Возможна личная встреча для подбора изделия или камня, обсуждения деталей и согласования параметров заказа.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         CAROUSEL SECTION
         ============================================ -->
    <section class="carousel-section" id="portfolio">
        <div class="container">
            <h2 class="reveal title-gold" data-content="products.title">Примеры изделий</h2>
            <div class="carousel-container reveal">
                <div class="carousel-track" id="carouselTrack" data-list="products.items">
                    <!-- Слайды генерируются JavaScript -->
                </div>
                <div class="carousel-nav">
                    <button class="carousel-btn" id="prevBtn" aria-label="Предыдущий слайд">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"/>
                        </svg>
                    </button>
                    <button class="carousel-btn" id="nextBtn" aria-label="Следующий слайд">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"/>
                        </svg>
                    </button>
                </div>
                <div class="carousel-dots" id="carouselDots">
                    <!-- Точки генерируются JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         TRUST SECTION
         ============================================ -->
    <section class="trust-section" id="trust">
        <div class="container">
            <h2 class="reveal title-gold" data-content="trust.title">Как я защищаю интересы клиента</h2>
            <div class="trust-grid" data-list="trust.items">
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                    <h4>Контроль средств</h4>
                    <p>Работаю по агентской модели. Каждый этап сделки согласуется заранее.</p>
                </div>
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                    <h4>Проверка изделий</h4>
                    <p>Перед оплатой вы получаете фото, видео и характеристики изделия.</p>
                </div>
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <circle cx="8.5" cy="8.5" r="1.5"/>
                        <polyline points="21 15 16 10 5 21"/>
                    </svg>
                    <h4>Прозрачный процесс</h4>
                    <p>Вы понимаете, на каком этапе находится сделка, и получаете обновления.</p>
                </div>
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <h4>Личная ответственность</h4>
                    <p>Сопровождаю сделку от запроса до получения изделия в руки.</p>
                </div>
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <h4>Конфиденциальность</h4>
                    <p>Данные клиента и условия сделки не передаются третьим лицам.</p>
                </div>
                <div class="glass-card trust-card reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    </svg>
                    <h4>Завершение по факту</h4>
                    <p>Сделка считается завершённой только после фактического получения изделия.</p>
                </div>
            </div>
            <p class="trust-note reveal" data-content="trust.note">Я не продаю изделия. Я представляю интересы клиента</p>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         FAQ SECTION
         ============================================ -->
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="reveal title-gold" data-content="faq.title">Частые вопросы</h2>
            <div class="faq-list reveal" data-list="faq.items">
                <!-- FAQ items генерируются JavaScript -->
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         CONTACT SECTION
         ============================================ -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="reveal title-gold" data-content="contact.title">Готовы обсудить задачу?</h2>
            <p class="contact-subtitle reveal" data-content="contact.subtitle">Если вам нужен private-формат high-end ювелирки с полным контролем процесса — напишите мне, и мы обсудим детали.</p>
            
            <!-- 
            ======================================
            BACKEND ДЛЯ ФОРМЫ
            Форма отправляет POST на /send.php
            Нужен backend:
            - Vercel Functions
            - Cloudflare Workers
            - Netlify Functions
            для отправки данных в Telegram-канал
            ====================================== 
            -->
            <form class="contact-form reveal" id="contactForm" action="/send.php" method="POST">
            <input type="text" name="website" autocomplete="off" tabindex="-1" aria-hidden="true" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;opacity:0;">

                <div class="form-group">
                    <label class="form-label" for="name">Ваше имя</label>
                    <input type="text" class="form-input" id="name" name="name" placeholder="Как к вам обращаться" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="contact">Telegram или телефон</label>
                    <input type="text" class="form-input" id="contact" name="contact" placeholder="@username или +7..." required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="request">Что ищете</label>
                    <select class="form-select" id="request" name="request" required>
                        <option value="" disabled selected>Выберите категорию</option>
                        <option value="bags">Сумки</option>
<option value="watches">Часы</option>
<option value="accessories">Аксессуары</option>
<option value="" disabled>— Ювелирные изделия —</option>
<option value="ring">Кольцо</option>
                        <option value="earrings">Серьги</option>
                        <option value="pendant">Кулон</option>
                        <option value="bracelet">Браслет</option>
                        <option value="necklace">Колье</option>
                        <option value="diamonds">Камни (бриллианты)</option>
                        <option value="colored_stones">Камни (цветные)</option>
                        <option value="branded">Брендовые изделия</option>
                        <option value="other">Другое</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="budget">Бюджет</label>
                        <select class="form-select" id="budget" name="budget" required>
                            <option value="" disabled selected>Выберите бюджет</option>
<option value="to_70k">До 70 000 ₽</option>
<option value="up_to_100k">до 100 000 ₽</option>
                            <option value="100k_300k">100 000 – 300 000 ₽</option>
                            <option value="300k_500k">300 000 – 500 000 ₽</option>
                            <option value="500k_1m">500 000 – 1 000 000 ₽</option>
                            <option value="over_1m">от 1 000 000 ₽</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="deadline">Сроки</label>
                        <select class="form-select" id="deadline" name="deadline" required>
                            <option value="" disabled selected>Выберите срок</option>
                            <option value="urgent">Срочно (до 7 дней)</option>
                            <option value="2_3_weeks">2-3 недели</option>
                            <option value="month">Месяц</option>
                            <option value="not_urgent">Не срочно</option>
                        </select>
                    </div>
                </div>
                <div class="form-checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" id="consent" name="consent">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-text">Соглашаюсь с <a href="#" onclick="openModal('privacy'); return false;">обработкой персональных данных</a></span>
                    </label>
                </div>
                <div class="form-buttons-wrapper">
                    <div class="form-buttons-row">
                        <a href="https://t.me/Daniil_Dealer" target="_blank" class="btn btn-outline btn-telegram-form">
                            <span class="tg-icon-circle">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.161l-1.97 9.296c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.538-.194 1.006.128.833.927z"/>
                                </svg>
                            </span>
                            <span style="white-space: nowrap;">Написать в Telegram</span>
                        </a>
                        <button type="submit" class="btn btn-primary">Запросить подбор
                    
                </button>
                    </div>
</div>
            </form>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         SOCIAL CHANNELS SECTION
         ============================================ -->
    <section class="social-channels" id="channels">
        <div class="container">
            <h2 class="reveal title-gold" data-content="channels.title">Мои каналы</h2>
            <p class="social-channels-subtitle reveal" data-content="channels.subtitle">Следите за новинками, акциями и закулисьем</p>
            <div class="social-grid" data-list="channels.items">
                <a href="https://instagram.com/daniil.dealer" target="_blank" class="social-card reveal" data-link="settings.instagram_link">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <h3 class="social-card-title">Instagram</h3>
                    <p class="social-card-desc">Личный блог и закулисье</p>
                </a>
                <a href="https://t.me/+aYiznthd86tmZWQ0" target="_blank" class="social-card reveal" data-link="settings.channel_link">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.161l-1.97 9.296c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.538-.194 1.006.128.833.927z"/>
                        </svg>
                    </div>
                    <h3 class="social-card-title">Telegram-канал</h3>
                    <p class="social-card-desc">Новости, акции и конкурсы</p>
                </a>
                <a href="https://t.me/+dY4peRlG7-I4ZWQ8" target="_blank" class="social-card reveal" data-link="settings.catalog_link">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14l-5-5 1.41-1.41L12 14.17l4.59-4.58L18 11l-6 6z"/>
                        </svg>
                    </div>
                    <h3 class="social-card-title">Каталог</h3>
                    <p class="social-card-desc">Актуальные украшения, камни, сумки, часы и аксессуары</p>
                </a>
                <a href="https://t.me/Daniil_Dealer" target="_blank" class="social-card reveal" data-link="settings.telegram_link">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <h3 class="social-card-title">Написать в личку</h3>
                    <p class="social-card-desc">Задать вопрос напрямую</p>
                </a>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <div class="footer-logo" data-content="settings.site_name">ДАНИИЛ РОМАНОВИЧ</div>
                    <div class="footer-legal" data-content="settings.legal_info">
                        ИП Зубков Даниил Романович<br>
                        ИНН 770704777252<br>
                        ОГРН 325508100339351
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-links">
                        <a href="#" onclick="openModal('oferta'); return false;">Оферта</a>
                        <a href="#" onclick="openModal('privacy'); return false;">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                © <span id="currentYear">2026</span> <span data-content="settings.site_name">ДАНИИЛ РОМАНОВИЧ</span>. Все права защищены.
            </div>
        </div>
    </footer>

    <!-- ============================================
         МОДАЛЬНЫЕ ОКНА
         ============================================ -->
    <div id="modal-oferta" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('oferta')">&times;</button>
            <h2>Публичная оферта</h2>
            <div class="modal-body">
                <p class="modal-subtitle">на оказание агентских услуг (редакция 2026 года)</p>
                
                <p><strong>1. ОБЩИЕ ПОЛОЖЕНИЯ</strong></p>
                <p>1.1. Настоящий документ является официальным предложением (публичной офертой) Индивидуального предпринимателя Зубкова Даниила Романовича, ИНН 770704777252 (далее — Исполнитель), заключить агентский договор на условиях, изложенных ниже, с любым дееспособным физическим или юридическим лицом (далее — Заказчик).</p>
                <p>1.2. Настоящая оферта составлена в соответствии со статьями 435–437 Гражданского кодекса Российской Федерации.</p>
                <p>1.3. Акцептом настоящей оферты считается совершение Заказчиком действий, направленных на получение услуг Исполнителя, включая, но не ограничиваясь: отправку заявки через сайт; обращение по электронной почте или иным каналам связи; оплату услуг Исполнителя полностью или частично.</p>
                <p>1.4. Акцепт оферты означает полное и безоговорочное согласие Заказчика со всеми условиями настоящего договора без каких-либо изъятий или ограничений.</p>
                
                <p><strong>2. ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</strong></p>
                <p>2.1. Исполнитель — Индивидуальный предприниматель Зубков Даниил Романович, оказывающий агентские услуги.</p>
                <p>2.2. Заказчик — физическое или юридическое лицо, принявшее условия настоящей оферты.</p>
                <p>2.3. Услуги — агентские и посреднические услуги по поиску, подбору, выкупу, организации оплаты, логистики и сопровождению доставки товаров по поручению Заказчика.</p>
                <p>2.4. Товар — ювелирные изделия, драгоценные и полудрагоценные камни, сумки, аксессуары и иные товары, приобретаемые у третьих лиц.</p>
                <p>2.5. Поставщик — третье лицо (физическое или юридическое), у которого приобретается Товар.</p>
                <p>2.6. Агентское вознаграждение — вознаграждение Исполнителя за оказание услуг, не включающее стоимость Товара.</p>
                
                <p><strong>3. ПРЕДМЕТ ДОГОВОРА</strong></p>
                <p>3.1. Исполнитель обязуется по поручению и в интересах Заказчика оказывать агентские услуги, связанные с поиском, подбором, выкупом и организацией доставки Товара от Поставщиков, а Заказчик обязуется оплатить услуги Исполнителя.</p>
                <p>3.2. Исполнитель не является продавцом Товара, не осуществляет его реализацию от своего имени и не выступает стороной договора купли-продажи Товара.</p>
                <p>3.3. Все сделки по приобретению Товара совершаются Заказчиком самостоятельно либо через Исполнителя как агента, действующего по поручению Заказчика.</p>
                
                <p><strong>4. ПОРЯДОК ОФОРМЛЕНИЯ ЗАЯВКИ</strong></p>
                <p>4.1. Заказчик направляет заявку на оказание услуг через сайт Исполнителя, электронную почту либо иные согласованные каналы связи.</p>
                <p>4.2. Информация, размещённая на сайте, носит исключительно информационный характер и не является публичной офертой на продажу товаров.</p>
                <p>4.3. Конкретные условия оказания услуг, включая стоимость, объём и сроки, согласовываются с Заказчиком индивидуально.</p>
                
                <p><strong>5. СТОИМОСТЬ УСЛУГ И ПОРЯДОК РАСЧЁТОВ</strong></p>
                <p>5.1. Стоимость услуг Исполнителя определяется индивидуально и включает агентское вознаграждение.</p>
                <p>5.2. Стоимость Товара оплачивается Заказчиком отдельно и не является доходом Исполнителя.</p>
                <p>5.3. Исполнитель вправе требовать полную или частичную предоплату агентских услуг.</p>
                <p>5.4. Комиссии банков, платёжных систем, конвертационные издержки и иные сопутствующие расходы оплачиваются Заказчиком.</p>
                <p>5.5. Исполнитель применяет упрощённую систему налогообложения (УСН 6%).</p>
                
                <p><strong>6. СРОКИ ОКАЗАНИЯ УСЛУГ</strong></p>
                <p>6.1. Сроки оказания услуг носят ориентировочный характер и зависят от: работы Поставщиков; логистических и транспортных компаний; таможенных процедур; иных обстоятельств, не зависящих от Исполнителя.</p>
                <p>6.2. Исполнитель не несёт ответственности за увеличение сроков, вызванное обстоятельствами, находящимися вне его контроля.</p>
                
                <p><strong>7. ПРАВА И ОБЯЗАННОСТИ СТОРОН</strong></p>
                <p>7.1. Исполнитель вправе: привлекать третьих лиц для исполнения поручения; запрашивать у Заказчика необходимую информацию и документы; отказаться от исполнения поручения при невозможности его выполнения.</p>
                <p>7.2. Заказчик обязуется: предоставлять достоверную и полную информацию; своевременно оплачивать услуги Исполнителя; учитывать особенности международных поставок и возможные риски.</p>
                
                <p><strong>8. ОГРАНИЧЕНИЕ ОТВЕТСТВЕННОСТИ</strong></p>
                <p>8.1. Исполнитель не несёт ответственности за: качество, комплектность и потребительские свойства Товара; наличие скрытых дефектов; действия или бездействие Поставщиков и перевозчиков; решения таможенных и иных государственных органов.</p>
                <p>8.2. Заказчик уведомлён о возможных расхождениях в цвете, оттенке, весе, размере, включениях камней и иных характеристиках Товара, обусловленных его природными или производственными особенностями.</p>
                
                <p><strong>9. ОСОБЕННОСТИ ЮВЕЛИРНЫХ ИЗДЕЛИЙ И КАМНЕЙ</strong></p>
                <p>9.1. Ювелирные изделия и драгоценные камни обладают индивидуальными характеристиками и могут иметь допустимые отклонения.</p>
                <p>9.2. Наличие сертификатов, пробирных клейм и иных подтверждающих документов зависит от Поставщика и не является обязательным условием оказания агентских услуг.</p>
                
                <p><strong>10. ВОЗВРАТЫ И ОТМЕНЫ</strong></p>
                <p>10.1. Агентское вознаграждение Исполнителя возврату не подлежит, за исключением случаев, прямо предусмотренных действующим законодательством Российской Федерации.</p>
                <p>10.2. Условия возврата Товара определяются Поставщиком и не находятся в зоне ответственности Исполнителя.</p>
                
                <p><strong>11. ПЕРСОНАЛЬНЫЕ ДАННЫЕ</strong></p>
                <p>11.1. Заказчик даёт согласие на обработку персональных данных в целях исполнения настоящего договора.</p>
                <p>11.2. Обработка персональных данных осуществляется в соответствии с Политикой конфиденциальности Исполнителя и требованиями Федерального закона № 152-ФЗ «О персональных данных».</p>
                
                <p><strong>12. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ</strong></p>
                <p>12.1. К отношениям сторон применяется право Российской Федерации.</p>
                <p>12.2. Все споры и разногласия подлежат рассмотрению в судебном порядке по месту регистрации Исполнителя.</p>
                <p>12.3. Исполнитель вправе в одностороннем порядке вносить изменения в настоящую оферту без предварительного уведомления Заказчика.</p>
                
                <p><strong>КОНТАКТНЫЕ ДАННЫЕ ИСПОЛНИТЕЛЯ</strong></p>
                <p>Индивидуальный предприниматель Зубков Даниил Романович<br>
                ИНН: 770704777252<br>
                Налоговый режим: УСН 6%<br>
                Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f195909f98989ddf9299989f90c2c2c5b1969c90989ddf929e9c">[email&#160;protected]</a></p>
            </div>
        </div>
    </div>

    <div id="modal-privacy" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('privacy')">&times;</button>
            <h2>Политика конфиденциальности</h2>
            <div class="modal-body">
                <p class="modal-subtitle">редакция 2026 года</p>
                
                <p><strong>1. ОБЩИЕ ПОЛОЖЕНИЯ</strong></p>
                <p>1.1. Настоящая Политика конфиденциальности определяет порядок обработки и защиты персональных данных пользователей сайта Индивидуального предпринимателя Зубкова Даниила Романовича, ИНН 770704777252 (далее — Оператор).</p>
                <p>1.2. Политика разработана в соответствии с требованиями Федерального закона Российской Федерации от 27.07.2006 № 152-ФЗ «О персональных данных», а также иных нормативных правовых актов Российской Федерации.</p>
                <p>1.3. Используя сайт Оператора, направляя заявки, сообщения или иным образом передавая персональные данные, пользователь подтверждает своё согласие с настоящей Политикой конфиденциальности.</p>
                
                <p><strong>2. ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</strong></p>
                <p>2.1. Персональные данные — любая информация, относящаяся прямо или косвенно к определённому или определяемому физическому лицу.</p>
                <p>2.2. Пользователь — любое лицо, использующее сайт Оператора или обращающееся к Оператору через формы связи, электронную почту или иные каналы коммуникации.</p>
                <p>2.3. Обработка персональных данных — любое действие (операция) или совокупность действий с персональными данными, включая сбор, запись, систематизацию, хранение, использование, передачу и удаление.</p>
                
                <p><strong>3. ПЕРЕЧЕНЬ ПЕРСОНАЛЬНЫХ ДАННЫХ</strong></p>
                <p>3.1. Оператор может обрабатывать следующие персональные данные Пользователя: имя; адрес электронной почты; номер телефона (при его предоставлении); данные, указанные в тексте заявки или сообщения; иные сведения, добровольно переданные Пользователем.</p>
                <p>3.2. Также автоматически могут собираться обезличенные технические данные: IP-адрес; информация о браузере и устройстве; файлы cookie; данные о действиях Пользователя на сайте.</p>
                
                <p><strong>4. ЦЕЛИ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</strong></p>
                <p>Персональные данные обрабатываются исключительно в следующих целях: обработки входящих заявок и обращений; связи с Пользователем; исполнения договорных и агентских обязательств; предоставления информации об услугах Оператора; ведения бухгалтерского и налогового учёта; выполнения требований законодательства Российской Федерации.</p>
                
                <p><strong>5. ПРАВОВЫЕ ОСНОВАНИЯ ОБРАБОТКИ</strong></p>
                <p>5.1. Оператор обрабатывает персональные данные на следующих правовых основаниях: добровольное согласие Пользователя; необходимость исполнения договора (публичной оферты); требования законодательства Российской Федерации.</p>
                
                <p><strong>6. ПОРЯДОК И УСЛОВИЯ ОБРАБОТКИ</strong></p>
                <p>6.1. Обработка персональных данных осуществляется законным и справедливым способом.</p>
                <p>6.2. Оператор принимает разумные и достаточные меры для защиты персональных данных от неправомерного доступа, изменения, раскрытия или уничтожения.</p>
                <p>6.3. Персональные данные обрабатываются без ограничения срока до достижения целей обработки либо до момента отзыва согласия Пользователем.</p>
                
                <p><strong>7. ПЕРЕДАЧА ПЕРСОНАЛЬНЫХ ДАННЫХ ТРЕТЬИМ ЛИЦАМ</strong></p>
                <p>7.1. Оператор вправе передавать персональные данные третьим лицам исключительно в случаях, необходимых для исполнения услуг, включая, но не ограничиваясь: платёжные сервисы и банки; логистические и транспортные компании; подрядчиков и сервисных партнёров.</p>
                <p>7.2. Передача персональных данных осуществляется в объёме, необходимом для достижения целей обработки.</p>
                
                <p><strong>8. ТРАНСГРАНИЧНАЯ ПЕРЕДАЧА ДАННЫХ</strong></p>
                <p>8.1. В рамках оказания агентских услуг персональные данные могут передаваться за пределы Российской Федерации, в том числе Поставщикам и логистическим компаниям.</p>
                <p>8.2. Пользователь выражает согласие на такую передачу, принимая условия настоящей Политики конфиденциальности.</p>
                
                <p><strong>9. ПРАВА ПОЛЬЗОВАТЕЛЯ</strong></p>
                <p>Пользователь вправе: получать информацию о своих персональных данных; требовать уточнения, блокирования или уничтожения персональных данных; отозвать согласие на обработку персональных данных; направлять обращения и запросы Оператору.</p>
                
                <p><strong>10. ПОРЯДОК ОТЗЫВА СОГЛАСИЯ</strong></p>
                <p>10.1. Отзыв согласия на обработку персональных данных осуществляется путём направления письменного запроса на электронную почту Оператора.</p>
                <p>10.2. После получения запроса Оператор прекращает обработку персональных данных, за исключением случаев, предусмотренных законодательством Российской Федерации.</p>
                
                <p><strong>11. ФАЙЛЫ COOKIE</strong></p>
                <p>11.1. Сайт может использовать файлы cookie для улучшения пользовательского опыта.</p>
                <p>11.2. Пользователь вправе ограничить или отключить использование cookie в настройках своего браузера.</p>
                
                <p><strong>12. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ</strong></p>
                <p>12.1. Оператор вправе вносить изменения в настоящую Политику конфиденциальности без предварительного уведомления Пользователя.</p>
                <p>12.2. Актуальная версия Политики конфиденциальности всегда доступна на сайте Оператора.</p>
                <p>12.3. К отношениям, связанным с обработкой персональных данных, применяется право Российской Федерации.</p>
                
                <p><strong>КОНТАКТНЫЕ ДАННЫЕ ОПЕРАТОРА</strong></p>
                <p>Индивидуальный предприниматель Зубков Даниил Романович<br>
                ИНН: 770704777252<br>
                Налоговый режим: УСН 6%<br>
                Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="482c2926212124662b202126297b7b7c082f25292124662b2725">[email&#160;protected]</a></p>
            </div>
        </div>
    </div>

    <!-- ============================================
         JAVASCRIPT
         ============================================ -->
    

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
        // ============================================
        // ДАННЫЕ ДЛЯ КАРУСЕЛИ
        // Замените на реальные данные изделий
        // ============================================
        const carouselData = [
            {
                image: 'https://daniil-dealer.ru/images/home/F1.jpg',
                title: 'Изумрудное кольцо 18K с бриллиантовой россыпью',
                specs: 'Центральный камень: Натуральный изумруд — 0.60 ct\nДополнительные камни: Бриллианты — 0.60 ct\nМеталл: Золото 18K\nОбщий вес: 4.25 г\nРазмер: 12 (можно изменить)\nСертификат: AGL',
                priceDelivered: '310 000 ₽',
                priceRetail: '580 000 ₽',
                savings: '270 000 ₽ (47%)'
            },
            {
                image: 'https://daniil-dealer.ru/images/home/F2.jpg',
                title: 'Кулон с голубым бриллиантом Fancy Blue 1.59 ct',
                specs: 'IGI Certified · 18K Gold · Pear Cut\nКамень: Laboratory Grown Diamond (HPHT)\nФорма: капля (Pear Modified Brilliant)\nВес основного камня: 1.59 ct\nДополнительные камни: 0.11 ct\nЦвет: Fancy Blue · Чистота: VVS2\nПолировка: Excellent · Симметрия: Very Good\nМеталл: Золото 18K · Вес: 2.47 г\nСертификат: IGI (LG689528746)',
                priceDelivered: '240 000 ₽',
                priceRetail: '650 000 ₽',
                savings: '410 000 ₽ (63%)'
            },
            {
                image: 'https://daniil-dealer.ru/images/home/F3.jpg',
                title: 'Бриллиантовый браслет 5.60 ct Double Row',
                specs: 'Full Eternity · Baguette Cut · High Jewelry\nТип: Жёсткий браслет (полный круг)\nОгранка: Квадратная / Baguette\nОбщий вес камней: 5.60 ct\nПосадка: Двойной ряд (Pavé + baguette)\nМеталл: Белое золото\nСтиль: High Jewelry',
                priceDelivered: '575 000 ₽',
                priceRetail: '980 000 ₽',
                savings: '405 000 ₽ (41%)'
            },
            {
                image: 'https://daniil-dealer.ru/images/home/F4.jpg',
                title: 'Серьги с жёлтыми бриллиантами Fancy Yellow',
                specs: '18K Gold · Halo Setting · Pear Cut\nТип: Серьги-подвески\nФорма камней: капля (Pear)\nЦентральные камни: жёлтые бриллианты — 0.21 ct\nДополнительные камни: бриллианты ореол — 0.70 ct\nМеталл: Золото 18K · Вес: 2.78 г\nСтиль: High Jewelry',
                priceDelivered: '210 000 ₽',
                priceRetail: '520 000 ₽',
                savings: '310 000 ₽ (60%)'
            },
            {
                image: 'https://daniil-dealer.ru/images/home/F5.jpg',
                title: 'Bvlgari Serpenti Viper Earrings',
                specs: '18K White Gold · Pavé Diamonds · Ref. 358360\nБренд: Bvlgari · Коллекция: Serpenti Viper\nТип: Серьги · Металл: Белое золото 18K\nКамни: Натуральные бриллианты — 0.75 ct\nТип закрепки: Pavé · Цвет: White\nСтиль: High Jewelry / Iconic Design',
                priceDelivered: '297 000 ₽',
                priceRetail: '1 700 000 ₽',
                savings: '1 403 000 ₽ (83%)'
            }
        ];

        // ============================================
        // ДАННЫЕ ДЛЯ FAQ
        // ============================================
        const faqData = [
            {
                question: 'Как формируется цена?',
                answer: 'Цена складывается из стоимости изделия у поставщика, логистики, таможенных расходов и моего агентского вознаграждения. Все составляющие прозрачны и фиксируются в договоре до оплаты. Благодаря прямым контактам с производителями в Китае, итоговая цена обычно на 30-50% ниже розничной в России.'
            },
            {
                question: 'Какие сроки доставки?',
                answer: 'Стандартная доставка занимает 14-21 день. При наличии изделия в ближайшем хабе возможна экспресс-доставка за 3-7 дней. В отдельных случаях — до 24 часов. Точные сроки согласовываются до подписания договора.'
            },
            {
                question: 'Как проверяются камни?',
                answer: 'Я запрашиваю сертификаты от признанных лабораторий (GIA, IGI, GRS). Для премиум-камней организую независимую экспертизу. Все характеристики фиксируются в договоре с фото- и видеоподтверждением.'
            },
            {
                question: 'Что входит в договор?',
                answer: 'Договор включает: полное описание изделия и камня, цену «под ключ», сроки, условия оплаты, порядок приёмки, гарантийные обязательства и условия возврата. Договор заключается с юридическим лицом — ИП Зубков Д.Р.'
            },
            {
                question: 'Как обеспечивается конфиденциальность?',
                answer: 'Данные клиента, состав заказа и условия сделки не передаются третьим лицам. Я не публикую информацию о клиентах и их покупках. При необходимости возможна работа через доверенное лицо.'
            },
            {
                question: 'Возможна ли личная встреча?',
                answer: 'Да, возможна личная встреча для обсуждения деталей заказа, просмотра образцов или согласования параметров. Встречи проводятся в Москве в удобное для вас время.'
            },
            {
                question: 'Как работает срочная доставка?',
                answer: 'При наличии изделия в ближайшем логистическом хабе (Гонконг, Дубай) возможна доставка за 24-72 часа. Условия и возможность срочной доставки подтверждаются до оплаты.'
            },
            {
                question: 'Работаете ли с нестандартными заказами?',
                answer: 'Да, я работаю с индивидуальными заказами: изготовление украшений по эскизу, подбор редких камней, комплектация свадебных сетов, корпоративные подарки. Сроки и стоимость оцениваются индивидуально.'
            }
        ];

        // ============================================
        // HEADER SCROLL EFFECT
        // ============================================
        const header = document.getElementById('header');
        
        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        window.addEventListener('scroll', handleScroll, { passive: true });

        // ============================================
        // INTERSECTION OBSERVER FOR ANIMATIONS
        // ============================================
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -80px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all reveal elements
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
            observer.observe(el);
        });

        // ============================================
        // CAROUSEL
        // ============================================
        const carouselTrack = document.getElementById('carouselTrack');
        const carouselDots = document.getElementById('carouselDots');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentSlide = 0;

        // Генерация слайдов
        function renderCarousel() {
            carouselTrack.innerHTML = carouselData.map((item, index) => `
                <div class="carousel-slide">
                    <div class="carousel-card">
                        <div class="carousel-image">
                            <span class="corner corner-tl"></span>
                            <span class="corner corner-tr"></span>
                            <span class="corner corner-bl"></span>
                            <span class="corner corner-br"></span>
                            <img src="${item.image}" alt="${item.title}" 
                                 onerror="this.parentElement.innerHTML='<div class=\\'carousel-image-placeholder\\'>Фото: ${item.image}</div>'">
                        </div>
                        <div class="carousel-info">
                            <h4>${item.title}</h4>
                            <div class="carousel-specs">
                                ${item.specs.split('\n').map(line => `<p>${line}</p>`).join('')}
                            </div>
                            <div class="carousel-prices">
                                <div class="price-row">
                                    <span class="price-label">Цена под ключ:</span>
                                    <span class="price-value gold">${item.priceDelivered}</span>
                                </div>
                                <div class="price-row">
                                    <span class="price-label">Цена в РФ/бутике:</span>
                                    <span class="price-value retail">${item.priceRetail}</span>
                                </div>
                                <div class="price-row">
                                    <span class="price-label">Ваша экономия:</span>
                                    <span class="price-value savings">${item.savings}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

            // Генерация точек
            carouselDots.innerHTML = carouselData.map((_, index) => `
                <div class="carousel-dot ${index === 0 ? 'active' : ''}" data-index="${index}"></div>
            `).join('');
        }

        function goToSlide(index) {
            if (index < 0) index = carouselData.length - 1;
            if (index >= carouselData.length) index = 0;
            
            currentSlide = index;
            carouselTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update dots
            document.querySelectorAll('.carousel-dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
            });
        }

        // Event listeners
        prevBtn.addEventListener('click', () => goToSlide(currentSlide - 1));
        nextBtn.addEventListener('click', () => goToSlide(currentSlide + 1));

        carouselDots.addEventListener('click', (e) => {
            if (e.target.classList.contains('carousel-dot')) {
                goToSlide(parseInt(e.target.dataset.index));
            }
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        carouselTrack.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        carouselTrack.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                goToSlide(currentSlide + 1);
            } else if (touchEndX - touchStartX > 50) {
                goToSlide(currentSlide - 1);
            }
        }, { passive: true });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') goToSlide(currentSlide - 1);
            if (e.key === 'ArrowRight') goToSlide(currentSlide + 1);
        });

        renderCarousel();

        // ============================================
        // FAQ ACCORDION
        // ============================================
        const faqList = document.querySelector('.faq-list');

        function renderFaq() {
            faqList.innerHTML = faqData.map((item, index) => `
                <div class="faq-item" data-index="${index}">
                    <button class="faq-question" aria-expanded="false">
                        ${item.question}
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">${item.answer}</div>
                    </div>
                </div>
            `).join('');
        }

        faqList.addEventListener('click', (e) => {
            const question = e.target.closest('.faq-question');
            if (!question) return;

            const item = question.closest('.faq-item');
            const isActive = item.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.faq-item').forEach(faq => {
                faq.classList.remove('active');
                faq.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            // Open clicked if wasn't active
            if (!isActive) {
                item.classList.add('active');
                question.setAttribute('aria-expanded', 'true');
            }
        });

        renderFaq();

        // ============================================
        // FORM SUBMISSION (send.php) + SUCCESS NOTICE + AUTO SCROLL
        // ============================================
        const contactForm = document.getElementById('contactForm');

        // Создаём/находим блок уведомления под кнопками формы
        function ensureFormNotice() {
            let notice = document.getElementById('contactFormNotice');
            if (notice) return notice;

            notice = document.createElement('div');
            notice.id = 'contactFormNotice';
            notice.className = 'form-notice';
            notice.setAttribute('role', 'status');
            notice.setAttribute('aria-live', 'polite');
            notice.style.display = 'none';

            // Ставим сразу под блоком с кнопками (внутри формы)
            const anchor = contactForm.querySelector('.form-buttons-wrapper') || contactForm;
            anchor.insertAdjacentElement('afterend', notice);
            return notice;
        }

        function showFormNotice(text, type = 'success') {
            const notice = ensureFormNotice();
            notice.textContent = text;
            notice.classList.remove('is-success', 'is-error');
            notice.classList.add(type === 'error' ? 'is-error' : 'is-success');
            notice.style.display = 'block';

            // Автоскролл к уведомлению (чтобы пользователь видел подтверждение)
            notice.scrollIntoView({ behavior: 'smooth', block: 'center' });

            // Автоскрытие (не мешает дальнейшим действиям)
            clearTimeout(notice._hideTimer);
            notice._hideTimer = setTimeout(() => {
                notice.style.display = 'none';
            }, 7000);
        }

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();


            const consentEl = contactForm.querySelector('#consent');
            if (consentEl && !consentEl.checked) {
                showFormNotice('Пожалуйста, подтвердите согласие на обработку персональных данных.', 'error');
                consentEl.focus({ preventScroll: true });
                return;
            }
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;

            // UI: старт
            submitBtn.disabled = true;
            submitBtn.textContent = 'ОТПРАВКА…';

            // Таймаут защиты от зависаний
            const controller = new AbortController();
            const timeout = setTimeout(() => controller.abort(), 15000);

            try {
                const formData = new FormData(contactForm);

                const response = await fetch('/send.php', {
                    method: 'POST',
                    body: formData,
                    signal: controller.signal,
                });

                const data = await response.json().catch(() => ({}));
                if (!response.ok || !data.ok) {
                    throw new Error(data.error || 'Ошибка отправки');
                }

                // Успех: показываем уведомление, очищаем форму
                showFormNotice('Заявка отправлена. Я свяжусь с вами в ближайшее время в Telegram.', 'success');
                contactForm.reset();

            } catch (error) {
                // Ошибка/таймаут: показываем уведомление, без бесконечной загрузки
                const msg = (error && error.name === 'AbortError')
                    ? 'Сервер отвечает слишком долго. Попробуйте ещё раз.'
                    : 'Не удалось отправить заявку. Попробуйте ещё раз.';
                showFormNotice(msg, 'error');
            } finally {
                clearTimeout(timeout);
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        });

        // ============================================
        // SMOOTH SCROLL FOR ANCHOR LINKS
        // (exclude in-file pages like #bags / #watches)
        // ============================================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');

                // Let hash-router handle in-file pages
                if (href === '#bags' || href === '#watches' || href === '#catalog') return;

                // If no target exists, let browser update hash normally
                const target = href ? document.querySelector(href) : null;
                if (!target) return;

                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // ============================================
        // MODAL WINDOWS
        // ============================================
        function openModal(type) {
            const modal = document.getElementById('modal-' + type);
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById('modal-' + type);
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        // Close modal on backdrop click
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal.active').forEach(modal => {
                    modal.classList.remove('active');
                });
                document.body.style.overflow = '';
            }
        });

        // ============================================
        // DISABLE ZOOM ON MOBILE
        // ============================================
        (function() {
            // Блокировка pinch-to-zoom
            document.addEventListener('touchstart', function(e) {
                if (e.touches.length > 1) {
                    e.preventDefault();
                }
            }, { passive: false });

            // Блокировка двойного тапа для зума
            let lastTouchEnd = 0;
            document.addEventListener('touchend', function(e) {
                const now = Date.now();
                if (now - lastTouchEnd <= 300) {
                    e.preventDefault();
                }
                lastTouchEnd = now;
            }, { passive: false });

            // Блокировка жеста зума
            document.addEventListener('gesturestart', function(e) {
                e.preventDefault();
            }, { passive: false });

            document.addEventListener('gesturechange', function(e) {
                e.preventDefault();
            }, { passive: false });

            document.addEventListener('gestureend', function(e) {
                e.preventDefault();
            }, { passive: false });
        })();

        // ============================================
        // AUTO UPDATE YEAR
        // ============================================
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // ============================================
        // DIRECTUS CMS INTEGRATION
        // Раскомментируй и настрой когда поднимешь Directus
        // ============================================
        
        // ============================================
        // NAVIGATION & MOBILE MENU
        // ============================================
        (function () {
            const headerNavLinks = Array.from(document.querySelectorAll('.header-nav__link'));
            const mobileNav = document.querySelector('[data-mobile-nav]');
            const mobileToggle = document.querySelector('[data-mobile-nav-toggle]');
            const mobilePanel = document.querySelector('.header-mobile-panel');
            const header = document.querySelector('header');

            // Функция для установки позиции меню ровно от золотой линии
            function updateMenuPosition() {
                if (header && mobilePanel) {
                    const headerHeight = header.offsetHeight;
                    mobilePanel.style.top = headerHeight + 'px';
                }
            }

            // Обновляем позицию при загрузке и ресайзе
            updateMenuPosition();
            window.addEventListener('resize', updateMenuPosition);
            window.addEventListener('scroll', updateMenuPosition);

            function setActiveNav(page) {
                headerNavLinks.forEach(a => a.classList.toggle('is-active', a.dataset.page === page));
                document.querySelectorAll('.header-mobile-nav a').forEach(a => a.classList.toggle('is-active', a.dataset.page === page));
            }

            // Mobile nav toggle
            function setMobileMenu(open){
                if (!mobileToggle || !mobileNav) return;
                // Обновляем позицию перед открытием
                updateMenuPosition();
                mobileNav.classList.toggle('is-open', open);
                mobileNav.setAttribute('aria-hidden', open ? 'false' : 'true');
                mobileToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                // Добавляем/убираем класс is-active для трансформации бургера в крестик
                mobileToggle.classList.toggle('is-active', open);
            }

            if (mobileToggle && mobileNav) {
                mobileToggle.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const isOpen = mobileNav.classList.contains('is-open');
                    setMobileMenu(!isOpen);
                });

                mobileNav.addEventListener('click', (e) => {
                    if (e.target === mobileNav) setMobileMenu(false);
                });

                mobileNav.querySelectorAll('a').forEach(a => {
                    a.addEventListener('click', () => setMobileMenu(false));
                });

                const closeBtn = mobileNav.querySelector('[data-mobile-nav-close]');
                if (closeBtn) {
                    closeBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        setMobileMenu(false);
                    });
                }

                const panel = mobileNav.querySelector('.header-mobile-panel');
                if (panel) {
                    panel.addEventListener('click', (e) => e.stopPropagation());
                }
                
                // Закрываем при клике вне меню
                document.addEventListener('click', (e) => {
                    if (mobileNav.classList.contains('is-open')) {
                        if (panel && !panel.contains(e.target) && e.target !== mobileToggle && !mobileToggle.contains(e.target)) {
                            setMobileMenu(false);
                        }
                    }
                });
            }

            // Handle hash for channels section
            function syncFromHash() {
                const hash = (location.hash || '').replace('#', '').trim().toLowerCase();
                if (hash === 'channels') {
                    setActiveNav('channels');
                    const channels = document.getElementById('channels');
                    if (channels) {
                        setTimeout(() => channels.scrollIntoView({ behavior: 'smooth', block: 'start' }), 30);
                    }
                } else {
                    setActiveNav('home');
                }
            }

            window.addEventListener('hashchange', syncFromHash);
            setActiveNav('home');
            syncFromHash();
        })();



</script>



</body>
</html>
