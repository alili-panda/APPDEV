@include('partials.header')

		<header>
			<div class="login-container">
				<h4>Welcome back</h4>
					<nav class="navbar">
						<a href="/">Home</a>
						<a href="#">About</a>
						<a href="#" class="button">Log out</a>
					</nav>
			</div>
		</header>

			<div class="login-box">
				<form action="POST">
			
					<label>Username:</label>
					<input type="text" name="username">
					<br>

					<label>Case Number:</label>
					<input type="text" name="case_number"
					placeholder="CASE-1111">
					<br>

					<label>Password:</label>
					<input type="text" name="pasword">
					<br>

					<button>Login</button>

				</form>
			</div>
	@include('partials.footer')