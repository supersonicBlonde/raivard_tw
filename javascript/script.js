/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// Default theme
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
	const loadMoreButton = document.getElementById('load-more-actus');
	const loadMoreLabel = document.getElementById('load-more-label');
	const loadMoreSpinner = document.getElementById('load-more-spinner');
	const postsGrid = document.getElementById('actus-posts-grid');

	if (!loadMoreButton || !postsGrid || typeof raivardTw === 'undefined') return;

	function appendCards(html) {
		const template = document.createElement('template');
		template.innerHTML = html.trim();
		const cards = Array.from(template.content.children);

		cards.forEach((card, index) => {
			card.classList.add('opacity-0', 'translate-y-4', 'transition-all', 'duration-500', 'ease-out');
			postsGrid.appendChild(card);

			window.setTimeout(() => {
				card.classList.remove('opacity-0', 'translate-y-4');
			}, 50 + index * 80);
		});
	}

	function setLoading(isLoading) {
		loadMoreButton.disabled = isLoading;
		loadMoreSpinner.classList.toggle('hidden', !isLoading);
		loadMoreLabel.classList.toggle('opacity-0', isLoading);
	}

	loadMoreButton.addEventListener('click', function () {
		const nextPage = parseInt(loadMoreButton.dataset.page, 10) + 1;
		const maxPages = parseInt(loadMoreButton.dataset.maxPages, 10);

		setLoading(true);

		const formData = new FormData();
		formData.append('action', 'raivard_tw_load_more_actus');
		formData.append('nonce', raivardTw.nonce);
		formData.append('page', nextPage);

		fetch(raivardTw.ajaxUrl, {
			method: 'POST',
			body: formData,
		})
			.then((response) => response.json())
			.then((response) => {
				if (!response.success) return;

				appendCards(response.data.html);
				loadMoreButton.dataset.page = nextPage;

				if (nextPage >= maxPages) {
					loadMoreButton.remove();
				}
			})
			.finally(() => {
				setLoading(false);
			});
	});
});
if (document.getElementById('slider1')) {
	new Splide('#slider1', {
		arrows: false,
		classes: {
			pagination: 'splide__pagination slide-pagination',
			page: 'splide__pagination__page slide-page',
		},
	}).mount();
}





document.addEventListener('DOMContentLoaded', function () {
	// Sticky header: toggle is-scrolled class for the smooth shrink/blur animation
	const siteHeader = document.getElementById('site-header');

	if (siteHeader) {
		const updateHeaderState = function () {
			siteHeader.classList.toggle('is-scrolled', window.scrollY > 20);
		};

		updateHeaderState();
		window.addEventListener('scroll', updateHeaderState, { passive: true });
	}

	// Mobile menu: add is-visible when dialog opens so CSS transition plays
	const dialog = document.getElementById('mobile-menu');
	const menu = document.getElementById('primary-menu-mobile');

	if (dialog && menu) {
		const observer = new MutationObserver(() => {
			if (dialog.hasAttribute('open')) {
				requestAnimationFrame(() => {
					menu.classList.add('is-visible');
				});
			} else {
				menu.classList.remove('is-visible');
			}
		});
		observer.observe(dialog, { attributes: true, attributeFilter: ['open'] });
	}

	// Video modal
	const modal = document.getElementById('video-modal');
	const source = document.getElementById('modal-video-source');
	const video = document.getElementById('modal-video');

	if (modal && source && video) {
		document.querySelectorAll('[data-video]').forEach(function (el) {
			el.addEventListener('click', function () {
				source.src = this.dataset.video;
				video.load();
				modal.classList.remove('hidden');
				modal.classList.add('flex');
			});
		});

		modal.addEventListener('click', function (event) {
			if (event.target !== this) return;
			video.pause();
			modal.classList.add('hidden');
			modal.classList.remove('flex');
		});

		const closeBtn = document.querySelector('#video-modal button');
		if (closeBtn) {
			closeBtn.addEventListener('click', function () {
				video.pause();
				modal.classList.add('hidden');
				modal.classList.remove('flex');
			});
		}
	}

	// Image modal
	const imageModal = document.getElementById('image-modal');
	const modalImage = document.getElementById('modal-image');

	if (imageModal && modalImage) {
		document.querySelectorAll('[data-image]').forEach(function (el) {
			el.addEventListener('click', function () {
				modalImage.src = this.dataset.image;
				imageModal.classList.remove('hidden');
				imageModal.classList.add('flex');
			});
		});

		imageModal.addEventListener('click', function (event) {
			if (event.target !== this) return;
			imageModal.classList.add('hidden');
			imageModal.classList.remove('flex');
		});

		const imageCloseBtn = document.querySelector('#image-modal button');
		if (imageCloseBtn) {
			imageCloseBtn.addEventListener('click', function () {
				imageModal.classList.add('hidden');
				imageModal.classList.remove('flex');
			});
		}
	}
});