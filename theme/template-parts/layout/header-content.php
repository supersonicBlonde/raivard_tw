<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raivard_tw
 */

?>
<header id="site-header" class="sticky top-0 left-0 w-full z-50 bg-dark max-w-[1780px] mx-auto transition-all duration-300 ease-in-out">
	<nav
		aria-label="Global"
		class="mx-auto flex items-center p-6 lg:px-12 transition-all duration-300 ease-in-out">
		<div class="flex">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5" aria-label="Accueil - Michael Raivard">
				<img src="<?php echo home_url('/wp-content/uploads/2026/06/logo_raivard_blanc.png') ?>" alt="Logo Raivard" height="104" width="260" class="w-[130px] h-auto lg:w-[260px] transition-all duration-300 ease-in-out">
			</a>
		</div>

		<!-- MOBILE MENU BUTTON -->
		<div class="flex gap-4 lg:hidden items-center ml-auto">
			<!-- 	<a
				href="#"
				class="flex items-center lang-switcher text-white underline"
				aria-label="Passer en anglais">EN
			</a> -->
			<button
				type="button"
				command="show-modal"
				commandfor="mobile-menu"
				class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5">
				<span class="sr-only">Ouvrir menu</span>
				<svg
					viewBox="0 0 24 24"
					fill="none"
					stroke="white"
					stroke-width="1.5"
					aria-hidden="true"
					class="size-6">
					<path
						d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
						stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</button>
		</div>

		<!-- DESKTOP MENU -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'items_wrap'     => '<ul class="hidden lg:flex lg:items-center lg:gap-x-6 ml-auto uppercase list-none" id="%1$s" class="%2$s">%3$s</ul>',
				'walker'         => new Split_Weight_Walker()
			)
		);
		?>

		<?php
		echo do_shortcode('[language-switcher]');
		?>

	</nav>

	<!-- MOBILE MENU -->
	<el-dialog>
		<dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
			<div tabindex="0" class="fixed inset-0 focus:outline-none">
				<div
					class="fixed inset-y-0 right-0 z-50 flex w-full flex-col overflow-y-auto bg-dark p-6">
					<div class="flex items-center justify-between">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5" aria-label="Accueil - Michael Raivard">
							<img src="<?php echo home_url('wp-content/uploads/2026/03/logo_raivard_blanc.png'); ?>" alt="Logo Raivard">
						</a>
						<button
							type="button"
							command="close"
							commandfor="mobile-menu"
							class="-m-2.5 rounded-md p-2.5 sm:ml-auto">
							<span class="sr-only">Fermer le menu</span>
							<svg
								viewBox="0 0 24 24"
								fill="none"
								stroke="white"
								stroke-width="1.5"
								aria-hidden="true"
								class="size-6 text-white">
								<path
									d="M6 18 18 6M6 6l12 12"
									stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</button>
					</div>

					<div class="flex flex-1 flex-col justify-center">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu-mobile',
								'container' => false,
								'items_wrap'     => '<ul class="space-y-2 py-6 text-center" id="%1$s" class="%2$s">%3$s</ul>',
								'walker'         => new Split_Weight_Walker()
							)
						);
						?>
					</div>
				</div>
			</div>
		</dialog>
	</el-dialog>
</header>
<!-- header -->