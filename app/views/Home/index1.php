<!--Side Bar-->
<div class = "ui sidebar menu large compact container icon labeled vertical thin">
	<a class = "item" href="#"><i class="global icon"></i>Cities</a>
	<a class = "item" href="#"><i class="car icon"></i>Find A Doctor</a>
	<div class = "ui buttons">
		<button class= "ui button black">
			<i class = "sign in icon"></i>Login
		</button>
		<div class = "or"></div>
		<button class= "ui button green">
			<i class = "users icon"></i>Sign Up
		</button>
	</div>
</div>

<!--Main Content-->
<div class="pusher">
	<div class = "ui vertical aligned center segment landing inverted">
		<div class = "transbg">
			<div class = "ui container">
				<div class = "ui secondary inverted top large pointing menu">
					<div class = "left item">
						<a class="toc item">
							<i class = "sidebar icon"></i>
						</a>
					</div>
					<div class = "right item">
						<a class= "active item" href="#">Home</a>
						<a class = "item" href="#">Cities</a>
						<a class = "item" href="#">Find A Doctor</a>
						<div class = "item">
						<div class = "ui buttons">
							<button class= "ui button black">
								<i class = "sign in icon"></i>Login
							</button>
							<div class = "or"></div>
							<button class= "ui button green">
								<i class = "users icon"></i>Sign Up
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "ui container text">
			<h1 class = "ui header centered inverted">Look up for doctor near you<h1>
			<div class = "container fluid findbg">
				<form class = "ui form">
                                    <div class = "field">
                                            <div class = "fields">
                                                    <div class = "eleven wide field">
                                                            <div class = "ui search location">
                                                                    <div class = "ui left icon input">
                                                                            <i class = "inverted circular blue map icon"></i>
                                                                            <input class = "prompt" type = "text" name = "location" placeholder = "Enter Your Location...">
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class = "three wide field">
                                                            <div class = "ui selection dropdown">
                                                                    <div class = "default text">Speciality</div>
                                                                            <i class = "dropdown icon"></i>
                                                                            <input type = "hidden" name = "speciality">
                                                                            <div class = "menu">
                                                                                    <div class = "item" data-value = "dentist">Dentist</div>
                                                                                    <div class = "item" data-value = "Cardiologist">Cardiologist</div>
                                                                                    <div class = "item" data-value = "Neuro-Surgeon">Neuro-Surgeon</div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="field">
                                        <button class = "ui submit green container animated button" tabindex="0">
                                            <div class= "visible content"><i class = "search icon"></i>Search</div>
                                            <div class= "hidden content"><i class = "search icon"></i>Find Your Doctor &nbsp;</div>
                                            
                                        </button>
                                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
