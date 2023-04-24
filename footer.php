
</main>

<?php do_action( 'intergest_theme_content_end' ); ?>

</div>

<?php do_action( 'intergest_theme_content_after' ); ?>

<footer id="colophon" class="site-footer py-12" role="contentinfo">
	<?php do_action( 'intergest_theme_footer' ); ?>

	<div class="w-11/12 mx-auto flex flex-col-reverse md:flex-row">

		<div class="w-full md:w-2/5 md:px-14">

			<div class="flex gap-x-4 w-2/5 md:w-3/5 lg:w-2/5 mt-10 items-center md:mx-auto justify-around">

				<div class="">
					<?php if(get_theme_mod('intergest-theme-social-li')) { ?>
						<a href="<?php echo get_theme_mod('intergest-theme-social-li') ?>">
							<img src="<?php echo get_template_directory_uri() ?>/resources/images/social/li.svg" />
						</a>
					<?php } ?>
				</div>

				<div class="">
					<?php if(get_theme_mod('intergest-theme-social-yt')) { ?>
					<a href="<?php echo get_theme_mod('intergest-theme-social-yt') ?>">
						<img src="<?php echo get_template_directory_uri() ?>/resources/images/social/yt.svg" />
					</a>
					<?php } ?>
				</div>

				<div class="">
					<?php if(get_theme_mod('intergest-theme-social-it')) { ?>
						<a href="<?php echo get_theme_mod('intergest-theme-social-it') ?>">
							<img src="<?php echo get_template_directory_uri() ?>/resources/images/social/ig.svg" />
						</a>
					<?php } ?>
				</div>

			</div>

			<div class="w-3/5 md:w-4/5 lg:w-3/5 md:mx-auto mt-10">
				<?php if ( has_custom_logo() ) { ?>
					<?php the_custom_logo(); ?>
				<?php } else { ?>
					<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
						<?php echo get_bloginfo( 'name' ); ?>
					</a>

					<p class="text-sm font-light text-gray-600">
						<?php echo get_bloginfo( 'description' ); ?>
					</p>

				<?php } ?>
			</div>
		</div>


		<div class="w-full md:w-3/5 block md:flex md:justify-around">
			<div class="w-fit md:w-1/3">

				<p class="uppercase text-text2 font-extrabold text-2xl">Intergest</p>

				<div class="mt-5">
						<?php
						wp_nav_menu(
							array(
								'container_id'    => 'primary-menu',
								'container_class' => 'mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent',
								'menu_class'      => '-mx-3',
								'theme_location'  => 'primary',
								'li_class'        => 'lg:mx-3 text-base hover:text-primary hover:font-semibold',
								'fallback_cb'     => false,
							)
						);
						?>
				</div>
			</div>
			<div class="w-fit md:w-1/3">

				<p class="uppercase text-text2 font-extrabold text-2xl">
					<?php echo wp_get_nav_menu_name('services') ?>
				</p>

				<div class="mt-5">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'services',
							'container_id'    => 'footer-services',
							'container_class' => 'flex mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent',
							'menu_class'      => 'block gap-x-4 -mx-3',
							'theme_location'  => 'services',
							'li_class'        => 'lg:mx-3 text-base hover:text-primary',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>

			</div>
			<div class="w-fit md:w-1/3">
				<p class="uppercase text-text2 font-extrabold text-2xl">
					<?php echo wp_get_nav_menu_name('contact') ?>
				</p>

				<div class="mt-5">
					<?php if(get_theme_mod('intergest-theme-company-details-name')) { ?>
						<p class="">
							<?php echo get_theme_mod('intergest-theme-company-details-name') ?>
						</p>
					<?php } ?>

					<?php if(get_theme_mod('intergest-theme-company-details-address-1')) { ?>
						<p class="">
							<?php echo get_theme_mod('intergest-theme-company-details-address-1') ?>
						</p>
					<?php } ?>

					<?php if(get_theme_mod('intergest-theme-company-details-address-2')) { ?>
						<p class="">
							<?php echo get_theme_mod('intergest-theme-company-details-address-2') ?>
						</p>
					<?php } ?>

					<?php if(get_theme_mod('intergest-theme-company-details-tel')) { ?>
						<p class="">
							Tel.: <?php echo get_theme_mod('intergest-theme-company-details-tel') ?>
						</p>
					<?php } ?>

					<?php if(get_theme_mod('intergest-theme-company-details-fax')) { ?>
						<p class="">
							Fax.: <?php echo get_theme_mod('intergest-theme-company-details-fax') ?>
						</p>
					<?php } ?>

					<?php if(get_theme_mod('intergest-theme-company-details-mail')) { ?>
						<a class="" href="mailto:<?php echo get_theme_mod('intergest-theme-company-details-mail') ?>">
							<?php echo get_theme_mod('intergest-theme-company-details-mail') ?>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="md:w-11/12 mt-14 mx-auto flex justify-between">
		<div class="flex flex-col md:mx-0">
			<hr class="border-text1 border-[1px]" />
			<?php
				wp_nav_menu(
					array(
						'menu' => 'footer',
						'container_id'    => 'footer-nav',
						'container_class' => 'flex mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent',
						'menu_class'      => 'block md:flex gap-x-4 mt-3 lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-3 text-base hover:text-primary uppercase',
						'fallback_cb'     => false,
					)
				);
				?>
		</div>
		<!--
		<div class="">
			&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
		</div>
		-->
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
