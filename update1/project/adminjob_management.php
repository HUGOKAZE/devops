
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Boxicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/admin.css">

    <title>Admin Job management</title>
</head>
<body>
    <!-- CONTENT -->
	 <section id="content">
		 <!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="images/c2.png.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
							<a class="active" href="#">Home</a>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>6</h3>
						<p>jobs Posted</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>3</h3>
						<p>from 4 diffrent Employers</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>3</h3>
						<p>Postulate</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All postulated jobs</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Date postulated</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="images/php.png.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td> 
                                   <a href="#" ></a><i class="fa fa-info-circle"></i>
                                   <a href="#"></a><i class="fa fa-trash-alt"></i>
                                   <a href="#"><i class="fa fa-save"></i></a>
                               </td>
							</tr>
							<tr>
								<td>
									<img src="images/html.png.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td> 
                                   <a href="#" ></a><i class="fa fa-info-circle"></i>
                                   <a href="#"></a><i class="fa fa-trash-alt"></i>
                                   <a href="#"><i class="fa fa-save"></i></a>
                               </td>
							</tr>
							<tr>
								<td>
									<img src="images/food.png.jpg">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td> 
                                   <a href="#" ></a><i class="fa fa-info-circle"></i>
                                   <a href="#"></a><i class="fa fa-trash-alt"></i>
                                   <a href="#"><i class="fa fa-save"></i></a>
                               </td>
							</tr>
							<tr>
								<td>
									<img src="images/js.png.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td> 
                                   <a href="#" ></a><i class="fa fa-info-circle"></i>
                                   <a href="#"></a><i class="fa fa-trash-alt"></i>
                                   <a href="#"><i class="fa fa-save"></i></a>
                               </td>
							</tr>
							<tr>
								<td>
									<img src="images/java.png.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td> 
                                   <a href="#" ></a><i class="fa fa-info-circle"></i>
                                   <a href="#"></a><i class="fa fa-trash-alt"></i>
                                   <a href="#"><i class="fa fa-save"></i></a>
                               </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

	 </section>
	 <!-- CONTENT -->

</body>
</html>