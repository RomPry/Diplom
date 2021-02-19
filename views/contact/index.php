<? include_once('views/common/header.php'); ?>


<!-- Map and contacts -->
    <iframe src="https://www.google.com/maps/d/embed?mid=160WilXQ2hynp9NI6YVYCNQkbb1VDq_pa" width="100%" height="450"></iframe>    

    <section class="section featured">    
        <div class="title">
            <h1>Наши контакты</h1>
        </div>
        <div id="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1">
					
					<div class="fh5co-contact-info">
						<h3>Контактная информация</h3>
						<Arcticle>
                            <div><i class='bx bxs-map' style='color:#301d55'  ></i>Санкт-Петербург, Коломенская ул., д. 8, офис 17</div>
						    <p><i class='bx bxs-phone' style='color:#301d55' ></i>8 (812) 717-00-00</p>
						    <p><i class='bx bx-envelope-open' style='color:#301d55' ></i>tng-apparel@gmail.com</p>
						</Arcticle>
						<ul>
							
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Напишите нам</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Имя">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Фамилия">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Тема обращения">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Текст сообщения"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Отправить" class="btn btn-primary">
						</div>
					</form>		
				</div>
			</div>
		 </div>
	    </div>
        <section class="indent">
        </section>  
    </section>


<? include_once('views/common/footer.php'); ?>