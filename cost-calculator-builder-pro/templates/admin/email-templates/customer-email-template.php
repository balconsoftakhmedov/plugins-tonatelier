<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="x-apple-disable-message-reformatting">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="telephone=no" name="format-detection">
	<link rel="preconnect" href="https://stijndv.com">
	<link rel="stylesheet" href="https://stijndv.com/fonts/Eudoxus-Sans.css"> <?php // phpcs:ignore?>
	<title>Order</title>

	<style>
		h1, p, span {
			margin: 0;
			padding: 0;
		}

		.text-right {
			text-align: right;
		}

		.body {
			margin:0;
			font-family:-apple-system, 'Eudoxus Sans', Sans-serif;
			color: <?php echo esc_attr( $email_settings['main_text_color']['value'] ); ?>;
		}

		.wrapper-email {
			max-width: 800px;
			margin: 0 auto;
			background-color: <?php echo esc_attr( $email_settings['template_color']['value'] ); ?>;
		}

		.table-header {
			background-color: #fff;
		}

		.table-body {
			max-width: 600px;
			margin: 0px auto;
		}

		.table-body-row {
			max-width: 600px;
		}

		.table-body-wrapper {
			max-width: 600px;
			margin: 0 auto;
		}

		.header__logo {
			padding: 20px 0;
			margin: 0 auto;
			background-color: <?php echo esc_attr( $email_settings['content_bg']['value'] ); ?>;
		}

		.header__logo img {
			max-height: 150px;
		}

		.email-title {
			font-family: 'Eudoxus Sans', Sans-serif;
			font-style: normal;
			font-weight: 700;
			font-size: 24px;
			line-height: 30px;
			margin-top: 30px;
		}

		.order {
			width: 100%;
		}

		.order-item {
			width: 49%;
			font-weight: 500;
			font-size: 16px;
			display: inline-block;
			line-height: 20px;
		}

		.summary {
			margin: 0 auto;
			max-width: 600px;
			background: <?php echo esc_attr( $email_settings['content_bg']['value'] ); ?>;
			margin-top: 30px;
		}

		.summary-container {
			padding: 40px;
			margin-bottom: 20px;
		}

		.summary-title .date {
			font-style: normal;
			font-weight: 500;
			font-size: 16px;
			line-height: 20px;
			width: 24%;
			display: inline-block;
			text-align: right;
			float: right;
			margin-top: 6px;
		}

		.summary-title .title {
			font-weight: 700;
			font-size: 24px;
			line-height: 30px;
			width: 75%;
			display: inline-block;
		}

		.summary-list-item {
			padding: 15px 0;
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 18px;
			border-bottom: 1px solid  <?php echo esc_attr( $email_settings['border_color']['value'] ); ?>;
		}

		.summary-list-item:last-child {
			border-bottom: none;
		}

		.summary-list-item-name {
			width: 49%;
			display: inline-block;
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 18px;
		}

		.summary-list-item-value {
			width: 50%;
			display: inline-block;
			font-style: normal;
			font-weight: 700;
			font-size: 14px;
			line-height: 18px;
			text-align: right;
		}

		.summary-list-sub-items li::marker {
			color:  #00193180;
			opacity: 0.1;
		}

		.summary-list-sub-items li {
			margin-bottom: 10px;
		}

		.summary-total {
			max-width: 600px;
			padding: 7px 0;
			border-top: 2px solid  <?php echo esc_attr( $email_settings['border_color']['value'] ); ?>;
		}

		.summary-total-item {
			display: inline-block;
			font-style: normal;
			font-weight: 700;
			font-size: 18px;
			line-height: 23px;
		}

		.description {
			max-width: 600px;
			text-align: center;
			margin: 0px auto;
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 18px;
			margin-bottom: 50px;
		}

		.summary-files-list {
			list-style: none;
			margin: 20px 0;
			padding: 0;
		}

		.summary-files-list-item {
			padding: 3px 10px;
			border: 1px solid  <?php echo esc_attr( $email_settings['border_color']['value'] ); ?>;
			border-radius: 4px;
			margin-bottom: 10px;
		}

		.summary-files-icon {
			display: inline-block;
			margin-right: 15px;
		}

		.summary-files-icon img {
			margin-bottom: 3px;
		}

		.summary-files-info {
			display: inline-block;
		}

		.summary-files-info .title {
			display: inline-block;
			width: 100%;
			font-style: normal;
			font-weight: 700;
			font-size: 12px;
			line-height: 15px;
		}

		.summary-files-info .filename {
			display: inline-block;
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 18px;
		}

		.summary-files-link {
			background-color:  <?php echo esc_attr( $email_settings['button_color']['value'] ); ?>;
			padding: 9px 20px;
			border-radius: 4px;
			text-decoration: none;
			text-transform: none;
			font-style: normal;
			font-weight: 700;
			font-size: 14px;
			line-height: 18px;
			color: <?php echo esc_attr( $email_settings['main_text_color']['value'] ); ?>;
			transition: 300ms ease;
			float: right;
		}

		.summary-files-link:hover {
			background-color: #dbdbdb;
		}

		.footer {
			padding: 15px;
			border-top: 2px solid #DDDDDD;
			font-style: normal;
			font-weight: 500;
			font-size: 14px;
			line-height: 18px;
		}

		.footer span {
			vertical-align: text-bottom;
		}

		.footer-container {
			max-width: 600px;
			margin: 0 auto;
			text-align: center;
		}
		.footer-wrapper {
			display: inline-block;
		}

		.footer-wrapper img {
			max-height: 20px;
			margin-left: 5px;
			vertical-align: bottom;
		}

		@media screen and (max-width: 540px) {
			.email-title {
				font-size: 20px;
			}

			.order-item {
				font-size: 14px;
			}

			.summary-container {
				padding: 20px 10px;
			}

			.summary-title {
				font-size: 20px;
			}

			.summary-list-item {
				padding: 10px 0;
			}

			.summary-list-item-name {
				font-size: 12px;
				line-height: 14px;
				width: 48%;
			}

			.summary-list-item-value {
				font-size: 12px;
				line-height: 14px;
			}

			.summary-list-sub-items {
				padding: 0 0 0 28px;
				margin: 4px 0;
			}

			.summary-list-sub-items li {
				margin-bottom: 6px;
			}

			.summary-total-item {
				font-size: 16px;
			}

			.summary-files-link {
				display: block;
				float: none;
				text-align: center;
				margin-top: 10px;
			}

			.description {
				font-size: 12px;
			}

			.footer-wrapper span {
				font-size: 12px;
			}
		}

	</style>

</head>

<body width="100%" class="body">
	<div class="wrapper-email">
		<div class="table-header">
			<div class="header__logo">
				<img style="margin: 0px auto; display: inherit;" src="<?php echo esc_url( $email_settings['logo'] ); ?>" alt="Email Logo">
			</div>
		</div>
		<table width="100%">
			<tbody class="table-body">
			<tr class="table-body-row">
				<td>
					<div class="summary">
						<div class="summary-container">
							<div class="summary-title">
								<span class="title"><?php echo esc_html( $email_settings['title'] ); ?></span>
								<span class="date"><?php echo esc_html( date( 'F j Y' ) ); ?></span>
							</div>
							<div class="summary-list">
								<?php
								if ( isset( $fields ) && count( $fields ) > 0 ) {

									foreach ( $fields as $value ) {
										if ( 'tot	al' !== substr( $value['alias'], 0, 5 ) && 1 !== $value['hidden'] ) :
											?>
												<div class="summary-list-item">
													<div class="summary-list-item-name">
														<?php echo esc_html( ucfirst( $value['label'] ) ); ?>
													</div>
													<?php if ( isset( $value['summary_view'] ) && 'show_value' !== $value['summary_view'] ) : ?>
														<div class="summary-list-item-value">
															<?php echo esc_html( $value['extraView'] ); ?>
														</div>
													<?php else : ?>
														<div class="summary-list-item-value">
															<?php echo esc_html( $value['converted'] ); ?>
														</div>
													<?php endif; ?>

													<?php if ( isset( $value['has_options'] ) ) : ?>
														<ul class="summary-list-sub-items">
															<?php foreach ( $value['options'] as $option ) : ?>
																<li>
																	<div class="summary-list-item-name">
																		<?php echo esc_html( $option['label'] ); ?>
																	</div>
																	<?php
																	if ( isset( $value['summary_view'] ) && 'show_value' !== $value['summary_view'] ) :
																		?>
																			<div class="summary-list-item-value">
																				<?php echo esc_html( $option['label'] ); ?>
																			</div>
																		<?php else : ?>
																			<div class="summary-list-item-value">
																				<?php echo esc_html( $option['label'] ); ?>
																			</div>
																		<?php endif; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												</div>
											<?php
											endif;
									}
								}
								?>
							</div>

							<div class="summary-total">
								<?php if ( isset( $totals ) && count( $totals ) > 0 ) : ?>
									<?php foreach ( $totals as $total ) : ?>
										<div class="summary-total-item" style="width: 48%;">
											<?php echo esc_html( $total['title'] ); ?>
										</div>
										<div class="summary-total-item text-right" style="width: 51%;">
											<?php echo esc_html( $total['value'] ); ?>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $files ) ) : ?>
								<div class="summary-files">
									<ul class="summary-files-list">
										<?php foreach ( $files as $file ) : ?>
											<?php if ( ! empty( $file ) ) : ?>
												<?php foreach ( $file as $item ) : ?>
													<li class="summary-files-list-item">
														<div class="summary-files-icon">
															<img src="<?php echo esc_attr( CALC_URL . '/frontend/dist/img/file-text.png' ); ?> ?>" width="20" alt="Email icon">
														</div>
														<div class="summary-files-info">
															<span class="title">Attach file:</span>
															<span class="filename"><?php echo esc_html( $item['filename'] ); ?></span>
														</div>
														<a href="<?php echo esc_url( $item['url'] ); ?>" class="summary-files-link"><?php esc_html_e( 'Download', 'cost-calculator-builder-pro' ); ?></a>
													</li>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</td>
			</tr>
			<tr class="table-body-row">
				<td>
					<div class="description">
						<?php echo esc_html( $email_settings['description'] ); ?>
					</div>
				</td>
			</tr>
			<?php if ( $email_settings['footer'] ) : ?>
				<tr class="table-body-row">
					<td>
						<div class="footer">
							<div class="footer-container">
								<div class="footer-wrapper">
						<span>
							<?php esc_html_e( 'This service working on:', 'cost-calculator-builder' ); ?>
						</span>
									<a href="https://stylemixthemes.com/cost-calculator-plugin/">
										<img src="<?php echo esc_attr( CALC_URL . '/frontend/dist/img/email_footer_logo.png' ); ?>">
									</a>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
</body>

</html>
