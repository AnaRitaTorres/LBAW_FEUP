<li class="event {$zone} {$type} {$date} {$price}">
	<time>
		<span class="day">{$day}</span>
		<span class="month">{$month}</span>
		<span class="year">{$year}</span>
	</time>
	<a href={$link}><img alt="Logan" src={$event.picture} /></a>
	<div class="info">
		<h2 class="title"><a href={$link}>{$event.title}</a></h2>
		<p class="desc">{$event.type}</p>
		<p class="desc">{$event.district}</p>
		<p class="desc">{$time}</p>
	</div>
</li>
