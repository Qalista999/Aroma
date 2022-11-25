
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Авторизация</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Авторизация</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Впервые на нашем сайте?</h4>
							<p>Каждый день появляется все больше научных или технологичных фич, и одна из них это...</p>
							<a class="button button-account" href="register">Регистрация</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Авторизоваться</h3>
						<form class="row login_form" onsubmit="sendData(this); return false;">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="pass" placeholder="Пароль" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Пароль'" required>
							</div>
							<p id="info" style="color: red; padding-left: 1.5rem"></p>
							<div class="col-md-12 form-group">
							 <!-- <div class="creat_account">
									<input type="checkbox" name="selector" required>
									<label for="f-option2">Запомнить меня</label>
								</div> -->
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" class="button button-login w-100">Вход</button>
								<a href="#">Забыл пароль?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<script>
      async function sendData(form) {
			info.innerText = "";
        let response = await fetch("authUser", {
          method: "POST",
          body: new FormData(form),
        });
        let res = await response.json();
        if (res.result == "ok") {
          location.href = "users/profile";
        } else if (res.result = "not_found") {
          info.innerText = "Такого пользователя не существует!";
        }
      }
    </script>
