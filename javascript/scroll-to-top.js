/**
 * Scroll-to-top button with a circular progress ring that fills as the
 * page scrolls. Clicking the button smooth-scrolls back to the top.
 */
export function initScrollToTop() {
	const button = document.getElementById('scroll-to-top');
	const ring = document.getElementById('scroll-progress-ring');

	if (!button || !ring) return;

	const circumference = 2 * Math.PI * 25;

	const updateScrollProgress = function () {
		const scrollTop = window.scrollY;
		const docHeight = document.documentElement.scrollHeight - window.innerHeight;
		const progress = docHeight > 0 ? Math.min(scrollTop / docHeight, 1) : 0;

		ring.style.strokeDashoffset = String(circumference * (1 - progress));
		button.classList.toggle('opacity-0', scrollTop < 100);
		button.classList.toggle('pointer-events-none', scrollTop < 100);
	};

	updateScrollProgress();
	window.addEventListener('scroll', updateScrollProgress, { passive: true });
	window.addEventListener('resize', updateScrollProgress);

	button.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
}
