<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta content="img/soc.png" property="og:image">
	<meta content="img/soc.png" property="vk:image">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=SSource+Serif+Pro:ital,wght@0,400;0,600;1,400&display=swap&subset=cyrillic-ext"
		rel="stylesheet">
	<title>Доставка оборудования, мебели, света и сантехники из Китая</title>
	<link rel="stylesheet" href="css/modules.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon.ico">
</head>

<body>
	<div class="wrapper main_thank">
		<header class="header-top">
	<div class="header-top__container _container">
		<div class="header-top__logo logo">
			<a href="/" class="logo__img">
				<img width="243px" src="img/full-logo.svg" alt="">
			</a>
			<div class="logo__descriptor">
				Доставка предметов
				интерьера из Китая
			</div>
		</div>
		<div class="header-top__contacts contacts">
			<div class="contacts__phone">
				<a href="tel:+79585771360" class="contacts__number">+7 958 577-13-60</a>
				<span class="contacts__work">
					Сейчас работаем
				</span>
			</div>
			<div class="contacts__button">
				<button data-bs-toggle="modal" data-bs-target="#callback" class="main-btn main-btn_trans">Перезвоните
					мне</button>
			</div>
		</div>
	</div>
</header>

		<main class="main ">
			<section class="section-11">
	<div class="section-11__container _container">
		<div class="section-11__left">
			<h1 class="main-title-section section-11__title">
				Все прошло успешно!
			</h1>
			<h2 class="title-section section-11__subtitle">
				Для составления точной стоимости отправки
				специалисту <strong>необходимо задать вам несколько
					уточняющих вопросов</strong>
			</h2>
			<h3 class="form-thank__title">
				<div class="form-thank__img">
					<img src="img/phone.svg" alt="">
				</div>
				<span class="form-thank__text">
					Пожалуйста, проверьте корректность
					введенного вами номера телефона
				</span>
			</h3>
			<div class="section-11__form form-thank">
				<div class="form-thank__form">
					<input type="tel" class="form-control" name="phone" placeholder="<?php echo $_COOKIE['phone'];?>"
						value="<?php echo $_COOKIE['phone'];?>">
				</div>
				<button data-bs-toggle="modal" data-bs-target="#callback2" class="main-btn">
					<span> Нашли ошибку в номере?</span>
					Нажмите здесь и введите<br>
					корректный номер
				</button>
			</div>
		</div>
		<div class="section-11__img">
			<picture>
				<source srcset="img/manager.webp" type="image/webp">
				<img src="img/manager.png" alt="">
			</picture>
		</div>
	</div>
</section>
		</main>

		<footer class="footer-top">
	<div class="footer-top__container _container">
		<div class="footer-top__logo logo">
			<a href="/" class="logo__img">
				<img width="243px" src="img/full-logo.svg" alt="">
			</a>
			<div class="logo__descriptor">
				Доставка предметов
				интерьера из Китая
			</div>
		</div>
		<div class="footer-top__company company-block" data-da=".footer-bottom,768">
			<button data-bs-toggle="modal" data-bs-target="#security-politics" class="company-block__sec">Политика
				конфиденциальности</button>
			<a href="https://lp.t-f-a.agency" target="_blank" class="company-block__tfa">
				<div class="company-block__img">
					<img src="img/tfa.svg" alt="">
				</div>
				<span class="company-block__txt">
					Разработка<br>
					сайта
				</span>
			</a>
		</div>
		<div class="footer-top__contacts contacts">
			<div class="contacts__phone">
				<a href="tel:+79585771360" class="contacts__number">+7 958 577-13-60</a>
				<span class="contacts__work">
					Сейчас работаем
				</span>
			</div>
			<div class="contacts__button">
				<button data-bs-toggle="modal" data-bs-target="#callback" class="contacts__callback">Перезвоните
					мне</button>
			</div>
		</div>
	</div>
	<div class="_container">
		<div class="footer-bottom"></div>
	</div>
</footer>
	</div>
	<div class="modal fade" id="callback" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
				<img src="img/close.svg" alt="">
			</button>
			<div class="modal-body callback-body">
				<h2 class="callback-body__title">
					Закажите
					обратный звонок,
				</h2>
				<h3 class="callback-body__subtitle">
					наш менеджер свяжется
					с вами в ближайшее время
				</h3>
				<form class="needs-validation form" novalidate="" method="POST" action="#" enctype="multipart/form-data" name="addcom7"
	id="addcom7" onsubmit="return false">
	<div class="form__container">
		<div class="form-block form__in">
			<input type="hidden" name="from" value="Перезвоните мне. Консультация">
			<div class="form-block__input">
				<div class="err" id="cerror7"></div>
				<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон" required="">
			</div>
			<button onclick="doLoad7(document.getElementById('addcom7'))" class="main-btn">
				Заказать обратный звонок
			</button>
			<div class="form-check">
				<input type="checkbox" class="check" checked="" id="check7">
				<label class="form-check-label" for="check7">Я принимаю условия <a data-bs-toggle="modal"
						data-bs-target="#security-politics">политики конфеденциальности</a></label>
			</div>
		</div>
	</div>
</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="callback2" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
				<img src="img/close.svg" alt="">
			</button>
			<div class="modal-body callback-body">
				<h2 class="callback-body__title">
					Введите корректный номер телефона
				</h2>
				<h3 class="callback-body__subtitle">
					наш менеджер свяжется
					с вами в ближайшее время
				</h3>
				<form class="needs-validation form" novalidate="" method="POST" action="#" enctype="multipart/form-data" name="addcom7"
	id="addcom7" onsubmit="return false">
	<div class="form__container">
		<div class="form-block form__in">
			<input type="hidden" name="from" value="Перезвоните мне. Консультация">
			<div class="form-block__input">
				<div class="err" id="cerror7"></div>
				<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон" required="">
			</div>
			<button onclick="doLoad7(document.getElementById('addcom7'))" class="main-btn">
				Заказать обратный звонок
			</button>
			<div class="form-check">
				<input type="checkbox" class="check" checked="" id="check7">
				<label class="form-check-label" for="check7">Я принимаю условия <a data-bs-toggle="modal"
						data-bs-target="#security-politics">политики конфеденциальности</a></label>
			</div>
		</div>
	</div>
</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="quiz-modal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
				<img src="img/close.svg" alt="">
			</button>
			<div class="modal-body">
				<div class="quiz-inner" id="quiz-block">
	<form class="needs-validation" novalidate="" method="POST" action="#" enctype="multipart/form-data" name="quiz2"
		id="quiz2" onsubmit="return false">
		<div class="progress-bar prg1">
			<div class="progress-text">Осталось <strong><span class="current-step">4</span> вопроса из 4</strong></div>
			<div class="progress-line">
				<div class="line" style="left:-75%" data-left="75"></div>
			</div>
		</div>

		<div class="step1 active step quiz-inner__item ">
			<div class="step__block">
				<h3 class="step__title">01. Какие товары необходимо доставить из Китая?</h3>
				<div class="step__variants quiz-variants">
					<div class="quiz-variants__variant" data-step="step2">
						<input type="radio" name="question-1" id="q1-1-1" value="Оборудование" required="" data-index="1-1">
						<label for="q1-1-1" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q1-1.webp" type="image/webp">
										<img src="img/q1-1.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Оборудование
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step2">
						<input type="radio" name="question-1" id="q1-1-2" value="Мебель, свет или сантехника" required=""
							data-index="1-2">
						<label for="q1-1-2" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q1-2.webp" type="image/webp">
										<img src="img/q1-2.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Мебель, свет или сантехника
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step2">
						<input type="radio" name="question-1" id="q1-1-3" value="Другие виды позиций" required="" data-index="1-3">
						<label for="q1-1-3" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q1-3.webp" type="image/webp">
										<img src="img/q1-3.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Другие виды позиций
								</div>
							</div>
						</label>
					</div>
				</div>
			</div>
			<div class="step__buttons">
				<button type="button" class="quiz-variants__btn next-step main-btn" data-step="step2" data-bs-container="body"
					data-bs-toggle="popover" data-bs-placement="bottom"
					data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа" data-bs-original-title=""
					title="" aria-describedby="popover928694">на следующий
					шаг</button>
			</div>
		</div>
		<div class="step2 step quiz-inner__item ">
			<div class="step__block">
				<h3 class="step__title">02. Какое количество товаров необходимо доставить?</h3>
				<div class="step__variants quiz-variants">
					<div class="quiz-variants__variant" data-step="step3">
						<input type="radio" name="question-2" id="q1-2-1" value="Одна или несколько небольших позиций" required=""
							data-index="2-1">
						<label for="q1-2-1" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q2-1.webp" type="image/webp">
										<img src="img/q2-1.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Одна или несколько
									небольших позиций
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step3">
						<input type="radio" name="question-2" id="q1-2-2" value="Одна или несколько габаритных позиций" required=""
							data-index="2-2">
						<label for="q1-2-2" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q2-2.webp" type="image/webp">
										<img src="img/q2-2.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Одна или несколько
									габаритных позиций
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step3">
						<input type="radio" name="question-2" id="q1-2-3" value=" Другой вариант" required="" data-index="2-3">
						<label for="q1-2-3" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q2-3.webp" type="image/webp">
										<img src="img/q2-3.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Другой вариант
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step3">
						<input type="radio" name="question-2" id="q1-2-4" value="Затрудняюсь ответить" required="" data-index="2-4">
						<label for="q1-2-4" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__picture">
									<picture>
										<source srcset="img/q2-4.webp" type="image/webp">
										<img src="img/q2-4.jpg" alt="">
									</picture>
								</div>
								<div class="quiz-question__label">
									Затрудняюсь ответить
								</div>
							</div>
						</label>
					</div>
				</div>

			</div>
			<div class="step__buttons">
				<button type="button" class="quiz-variants__btn next-step main-btn" data-step="step3" data-bs-container="body"
					data-bs-toggle="popover" data-bs-placement="bottom"
					data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа" data-bs-original-title=""
					title="" aria-describedby="popover928694">на следующий
					шаг</button>
			</div>
		</div>
		<div class="step3 step quiz-inner__item ">
			<div class="step__block">
				<h3 class="step__title">03. Когда необходимо организовать доставку?</h3>
				<div class="step__variants quiz-variants">
					<div class="quiz-variants__variant" data-step="step4">
						<input type="radio" name="question-3" id="q1-3-1" value="Как можно скорее" required="" data-index="3-1">
						<label for="q1-3-1" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__label">
									Как можно<br>
									скорее
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step4">
						<input type="radio" name="question-3" id="q1-3-2" value="В течение месяца" required="" data-index="3-2">
						<label for="q1-3-2" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__label">
									В течение<br>
									месяца
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step4">
						<input type="radio" name="question-3" id="q1-3-3" value=" Через месяц	или более" required=""
							data-index="3-3">
						<label for="q1-3-3" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__label">
									Через месяц<br>
									или более
								</div>
							</div>
						</label>
					</div>
					<div class="quiz-variants__variant" data-step="step4">
						<input type="radio" name="question-3" id="q1-3-4" value="Затрудняюсь ответить" required="" data-index="3-4">
						<label for="q1-3-4" class="quiz-variants__radio-label">
							<div class="quiz-variants__question quiz-question">
								<div class="quiz-question__label">
									Затрудняюсь<br>
									ответить
								</div>
							</div>
						</label>
					</div>
				</div>

			</div>
			<div class="step__buttons">
				<button type="button" class="quiz-variants__btn next-step main-btn" data-step="step4" data-bs-container="body"
					data-bs-toggle="popover" data-bs-placement="bottom"
					data-bs-content="Чтобы открыть следующий вопрос, выберите один из вариантов ответа" data-bs-original-title=""
					title="" aria-describedby="popover928694">на следующий
					шаг</button>
			</div>
		</div>
		<div class="step4 step step-final">
			<div class="step-final__block">
				<div class="step-final__form form-block">
					<h2 class="form-block__title form-title">
						Оставьте ваши
						контакты и получите
					</h2>
					<h3 class="form-block__subtitle form-subtitle">
						предварительный расчет
						стоимости доставки из Китая
					</h3>
					<div class="form__container">
						<div class="form-block form__in">
							<input type="hidden" name="from" value="Рассчитайте стоимость	доставки из Китая за 4 шага">
							<div class="form-block__input">
								<div class="err" id="cerror2"></div>
								<input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон" required="">
							</div>
							<button onclick="doLoad2(document.getElementById('quiz2'))" class="main-btn">
								Получить расчет стоимости
							</button>
							<div class="form-check">
								<input type="checkbox" class="check" checked="" id="check2">
								<label class="form-check-label" for="check2">Я принимаю условия <a data-bs-toggle="modal"
										data-bs-target="#security-politics">политики конфеденциальности</a></label>
							</div>
						</div>
					</div>
				</div>
				<div class="step-final__right">
					<div class="step-final__pic">
						<picture>
							<source srcset="img/smeta.webp" type="image/webp">
							<img src="img/smeta.png" alt="">
						</picture>
					</div>
					<div class="step-final__text">
						<div class="step-final__img">
							<picture>
								<source srcset="img/big-check.webp" type="image/webp">
								<img src="img/big-check.png" alt="">
							</picture>
						</div>
						<h3 class="step-final__title">Предварительный расчет
							стоимости доставки товаров готов</h3>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
			</div>
		</div>
	</div>
</div>
	<div class="modal fade" id="security-politics" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="img/close.svg" alt="">
				</button>
				<h3 class="text-center mt-5"><strong>Политика конфиденциальности</strong></h3>
				<div class="text p-5">
					Администрация данного Сайта не может передать или раскрыть информацию предоставленную пользователем
					(далее Пользователь) при регистрации и использовании функций сайта третьим лицам, кроме случаев,
					описанных законодательством страны, на территории которой пользователь ведет свою деятельность.
					<br><br>
					Для регистрации на сайте, пользователь обязан внести некоторую персональную информацию. Для проверки
					предоставленных данных, сайт оставляет за собой право потребовать доказательства идентичности
					в онлайн или офлайн режимах.
					<br><br>
					Сайт использует личную информацию Пользователя для обслуживания и для улучшения качества
					предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе,
					в случае, если предоставление этой информации обусловлено процедурой перевода средств платежной
					системе, услугами которой Пользователь желает воспользоваться.
					<br><br>
					Сайт прилагает все усилия для сбережения в сохранности личных данных Пользователя.
					Личная информация может быть раскрыта в случаях, описанных законодательством, либо
					когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного
					распоряжения или легального процесса необходимого для работы Пользователя с Сайтом.
					<br><br>
					В других случаях, ни при каких условиях, информация, которую Пользователь передает Сайту,
					не будет раскрыта третьим лицам.
				</div>
			</div>
		</div>
	</div>
</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/modules.min.js"></script>
<script src="js/main.min.js"></script>
<script src="JsHttpRequest.js"></script>
<script src="comm.js"></script>
</body>

</html>