<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>Events — Yogesh Nauhwar MLC | Jan Sampark, Rallies & Public Programs Mathura</title>
	<meta name="description" content="View all events, public meetings, rallies, cultural programs, and Jan Sampark activities of Chaudhary Yogesh Nauhwar MLC — RLD leader serving the people of Mant and Mathura, Uttar Pradesh.">
	<?php include 'components/links.php'; ?>
</head>

<body class="inner-page">
<?php include 'components/loader.php'; ?>
<?php include 'components/header.php'; ?>

<?php
$events = [
	[
		'image' => 'assets/img/events/event1.jpg',
		'category' => 'Legislative',
		'title' => 'Hindi Bhasha Samman Protest - Vidhan Parishad',
		'description' => 'Raised a strong voice in support of Hindi and demanded accountability on anti-Hindi positions in the legislature.',
		'status' => 'upcoming',
		'date_text' => '12 Days Left'
	],
	[
		'image' => 'assets/img/events/event2.jpg',
		'category' => 'Political Event',
		'title' => 'Press Conference - 8 Years of UP Government',
		'description' => 'Participated with senior ministers in a major briefing reviewing governance milestones and future plans.',
		'status' => 'upcoming',
		'date_text' => '18 Days Left'
	],
	[
		'image' => 'assets/img/events/event3.jpg',
		'category' => 'Public Transport',
		'title' => 'Electric Bus Launch - Mathura',
		'description' => 'Joined leaders to flag off modern electric buses, supporting cleaner and more accessible travel in the region.',
		'status' => 'upcoming',
		'date_text' => '22 Days Left'
	],
	[
		'image' => 'assets/img/events/event4.jpg',
		'category' => 'Environment',
		'title' => 'Tree Plantation Drive - Yamuna Riverbank',
		'description' => 'Worked with citizens to plant saplings and promote long-term environmental responsibility across local communities.',
		'status' => 'upcoming',
		'date_text' => '27 Days Left'
	],
	[
		'image' => 'assets/img/events/event5.jpg',
		'category' => 'Education',
		'title' => 'Tablet Distribution - Yuva Sashaktikaran',
		'description' => 'Distributed free tablets to students under the UP youth empowerment initiative for digital learning access.',
		'status' => 'upcoming',
		'date_text' => '31 Days Left'
	],
	[
		'image' => 'assets/img/events/event6.jpg',
		'category' => 'Skill Development',
		'title' => 'Skill India Mobile Van - Mant',
		'description' => 'Flagged off the mobile training van bringing skill programs to youth in rural villages.',
		'status' => 'upcoming',
		'date_text' => '36 Days Left'
	],
	[
		'image' => 'assets/img/events/event7.jpg',
		'category' => 'Youth Connect',
		'title' => 'Local Youth Dialogue Program',
		'description' => 'Hosted an open interaction with students and young professionals around jobs, skills, and governance participation.',
		'status' => 'upcoming',
		'date_text' => '43 Days Left'
	],
	[
		'image' => 'assets/img/events/event8.jpg',
		'category' => 'Relief Work',
		'title' => 'Ration and Essential Goods Distribution',
		'description' => 'Supervised welfare distribution to ensure vulnerable families received essential support without delay.',
		'status' => 'upcoming',
		'date_text' => '49 Days Left'
	],
	[
		'image' => 'assets/img/events/event9.jpg',
		'category' => 'Education',
		'title' => 'School Uniform and Stationery Distribution',
		'description' => 'Supported school-going girls with uniforms and study material through public welfare initiatives.',
		'status' => 'upcoming',
		'date_text' => '53 Days Left'
	],
	[
		'image' => 'assets/img/events/event10.jpg',
		'category' => 'Political Event',
		'title' => 'RLD Rashtriya Adhiveshan Rally - Kosi',
		'description' => 'Connected with workers and supporters during national convention preparations in Mathura district.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event11.jpg',
		'category' => 'Public Rally',
		'title' => 'RLD Vishal Mahasabha - Mass Gathering',
		'description' => 'Joined a landmark gathering with strong participation from grassroots workers and senior leadership.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event12.jpg',
		'category' => 'Sports',
		'title' => 'Dangal Award and Medal Ceremony',
		'description' => 'Honored wrestlers and celebrated local sports talent while encouraging youth participation in traditional games.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event13.jpg',
		'category' => 'Farmer Connect',
		'title' => 'Kisan Samvad Karyakram - Hasanpur',
		'description' => 'Interacted with farmers to understand crop, irrigation, and support issues directly at the grassroots level.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event14.jpg',
		'category' => 'Public Connect',
		'title' => 'Community Felicitation and Public Meeting',
		'description' => 'Met community members in a large gathering and discussed local priorities and development concerns.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event15.jpg',
		'category' => 'Sports',
		'title' => 'Traditional Dangal Championship',
		'description' => 'Presided over a traditional wrestling event promoting discipline, fitness, and cultural heritage.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
	[
		'image' => 'assets/img/events/event16.jpg',
		'category' => 'Festival',
		'title' => 'Braj Holi Milan Samaroh - Mathura',
		'description' => 'Participated in a major cultural celebration with local citizens and social leaders of the region.',
		'status' => 'past',
		'date_text' => 'Completed'
	],
];
?>

<main>
	<section class="breadcrumb-section">
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-xl-12 col-lg-12">
					<div class="breadcrumb-content">
						<div class="breadcrumb-nav" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<ul>
								<li><a href='index.php'>Home</a></li>
								<li><a href="#">Events</a></li>
							</ul>
						</div>
						<div class="breadcrumb-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
							<h2>Events</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services-section p-t-100 p-b-120 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row justify-content-center text-center m-b-40">
				<div class="col-xl-8">
					<div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<img alt="icon-1" src="assets/img/icons/icon-2.svg"> <span>Events and Activities</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<h2>From Villages to Vidhan Parishad</h2>
					</div>
				</div>
			</div>

			<div class="event-filter-wrap text-center m-b-40" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
				<button class="event-filter-btn active" type="button" data-filter="all">All Events</button>
				<button class="event-filter-btn" type="button" data-filter="upcoming">Upcoming Events</button>
				<button class="event-filter-btn" type="button" data-filter="past">Past Events</button>
			</div>

			<div class="row" id="eventsGrid" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<?php foreach ($events as $event): ?>
					<div class="col-xl-4 col-md-6 m-b-30 event-card-item" data-event-type="<?php echo $event['status']; ?>">
						<div class="camping-card">
							<div class="thumb">
								<img alt="event-thumb" src="<?php echo $event['image']; ?>">
								<div class="category">
									<a><?php echo htmlspecialchars($event['category']); ?></a>
								</div>
							</div>
							<div class="content">
								<div class="content-top">
									<div class="date">
										<img alt="calendar-icon" src="assets/img/icons/calendar.svg"> <span><?php echo htmlspecialchars($event['date_text']); ?></span>
									</div>
									<div class="title">
										<h3><a><?php echo htmlspecialchars($event['title']); ?></a></h3>
									</div>
									<div class="text">
										<p><?php echo htmlspecialchars($event['description']); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="row justify-content-center text-center m-t-20">
				<div class="col-xl-6">
					<div class="project-pagination" id="eventsPagination"></div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include 'components/footer.php'; ?>
<?php include 'components/script.php'; ?>

<script>
(function () {
	var cards = Array.prototype.slice.call(document.querySelectorAll('.event-card-item'));
	var filterButtons = Array.prototype.slice.call(document.querySelectorAll('.event-filter-btn'));
	var paginationWrap = document.getElementById('eventsPagination');
	var cardsPerPage = 9;
	var currentFilter = 'all';
	var currentPage = 1;

	function getFilteredCards() {
		if (currentFilter === 'all') {
			return cards;
		}
		return cards.filter(function (card) {
			return card.getAttribute('data-event-type') === currentFilter;
		});
	}

	function renderPagination(totalPages) {
		if (!paginationWrap) {
			return;
		}
		if (totalPages <= 1) {
			paginationWrap.innerHTML = '';
			return;
		}

		var html = '<ul>';
		for (var i = 1; i <= totalPages; i++) {
			html += '<li class="' + (i === currentPage ? 'active' : '') + '"><a href="#" data-page="' + i + '">' + (i < 10 ? '0' + i : i) + '</a></li>';
		}
		html += '</ul>';
		paginationWrap.innerHTML = html;
	}

	function renderCards() {
		var filtered = getFilteredCards();
		var totalPages = Math.max(1, Math.ceil(filtered.length / cardsPerPage));

		if (currentPage > totalPages) {
			currentPage = 1;
		}

		cards.forEach(function (card) {
			card.style.display = 'none';
		});

		var start = (currentPage - 1) * cardsPerPage;
		var end = start + cardsPerPage;
		filtered.slice(start, end).forEach(function (card) {
			card.style.display = '';
		});

		renderPagination(totalPages);
	}

	filterButtons.forEach(function (button) {
		button.addEventListener('click', function () {
			filterButtons.forEach(function (btn) {
				btn.classList.remove('active');
			});
			button.classList.add('active');
			currentFilter = button.getAttribute('data-filter') || 'all';
			currentPage = 1;
			renderCards();
		});
	});

	if (paginationWrap) {
		paginationWrap.addEventListener('click', function (event) {
			var pageLink = event.target.closest('a[data-page]');
			if (!pageLink) {
				return;
			}
			event.preventDefault();
			currentPage = parseInt(pageLink.getAttribute('data-page'), 10) || 1;
			renderCards();
		});
	}

	renderCards();
})();
</script>
</body>
</html>
