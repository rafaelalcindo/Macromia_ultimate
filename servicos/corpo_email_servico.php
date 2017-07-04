<?php

function corpoEmailServ($eventos, $email_cli){
	
	return $msg = "				
				<html>
				<head>
					<title>Corpo do Email</title>
					<meta http-equiv='Content-type' content='text/html; charset=UTF-8'/>
					<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
				</head>
				<body>
					<table align='center' border='1' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse;'>
						<tr>
							<td align='center' bgcolor='#70bbd9' style='padding: 40px 0 30px 0;'>
								<img src='http://www.muypymes.com/wp-content/uploads/2016/03/comercio_online.jpg' alt='Linha1' width='300' height='230' style='display: block;'>
							</td>
						</tr>
						<tr>
							<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px'>
								<table border='1' cellpadding='0' cellspacing='0' width='100%'>
									<tr>
										<td>
											O Cliente precisa de fotografo para o evento ".$eventos." seu email: ".$email_cli."
										</td>
									</tr>
									<tr>
										<td style='padding: 20px 0 30px 0;'>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
										</td>
									</tr>
									<tr>
										<td>
											<table border='1' cellpadding='0' cellspacing='0' width='100%'>
												<tr>
													<td width='260' valign='top'>
														<table>
															<tr>
																<td>
																	<img src='http://67.media.tumblr.com/6f0a643f707b3711f7bc0996ee0171ca/tumblr_mobggyr5dp1rmzrydo4_1280.png' width='100%' height='140' style='display: block;'>
																</td>
															</tr>
															<tr>
																<td style='padding: 25px 0 0 0;'>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
																</td>
															</tr>
														</table>
													</td>
													<td style='font-size: 0; line-height: 0;' width='20'>
														&nbsp;
													</td>
													<td width='260' valign='top'>
														<table border='1' cellpadding='0' cellspacing='0' width='100%'>
															<tr>
																<td>
																	<img src='http://www.burgerness.com/wp-content/uploads/2012/05/the-camera-collection-video-0.jpg' alt='' width='100%' height='140' style='display: block;'>
																</td>
															</tr>
															<tr>
																<td style='padding: 25px 0 0 0;'>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td bgcolor='#ee4c50'>
								<table border='1' cellpadding='0' cellspacing='0' width='100%'>
									<tr>
										<td width='75%'>
											&reg; Alguém, Algum lugar 2016<br/>
											Esse é um email de teste para o Sistema da Macromia, se você recebeu esse email, desconsidere.
										</td>
										<td align='right'>
											<table border='0' cellpadding='0' cellspacing='0'>
												<tr>
													<td>
														<a href='http://www.twitter.com/'>
															<img src='https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/twitter_letter-512.png' alt='Twitter' width='38' height='38' style='display: block;' border='0'>
														</a>
													</td>
													<td>
														<a href='http://www.facebook.com/'>
															<img src='http://img13.deviantart.net/93f2/i/2011/349/2/5/facebook_icon_by_sparkyemp-d4j7632.png' alt='Facebook' width='38' height='38' style='display: block;' border='0'>
														</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
				</html>";	
	
}