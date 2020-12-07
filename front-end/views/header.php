<?php ob_start();?>
<?php session_start(); ?>
<head>
	<script type="text/javascript">
		function login()
		{
			window.location.replace("login-client-inter.php");
		}
	</script>
</head>
<body>
<!-- header-top-area-start -->
				<div class="header-top-area" id="sticky-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<!-- logo-area-start -->
								<div class="logo-area">
									<a href="index.php"><img src="img/logo/IDA-OPTIQUE.jpg" width="120" height="200" alt="logo" /></a>
								</div>
								<!-- logo-area-end -->
							</div>
							<div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
								<!-- menu-area-start -->
								<div class="menu-area">
									<nav>
										<ul>
											<li class="active"><a href="index.php">Accueil</a>
												<ul class="sub-menu">
													<li><a href="index-2.html">Home-2</a></li>
													<li><a href="index-3.html">Home-3</a></li>
													<li><a href="index-4.html">Home-4</a></li>
													<li><a href="index-5.html">Home-5</a></li>
													<li><a href="index-6.html">Home-6</a></li>
												</ul>
											</li>
											<li><a href="listeProduits.php?categorie=optique&page=1">Montures de vue</a>
												<ul class="sub-menu">
													<li><a>Filtre de prix</a>
														<ul class="sub-menu-2">
															<li><a href="listeProduits.php?filtre=1&categorie=optique&page=1">de 0 a 150</a></li>
															<li><a href="listeProduits.php?filtre=2&categorie=optique&page=1">de 151 a 300</a></li>
															<li><a href="listeProduits.php?filtre=3&categorie=optique&page=1">de 301 a 450</a></li>
															<li><a href="listeProduits.php?filtre=4&categorie=optique&page=1">de 451 a 600</a></li>
														</ul>
													</li>
													
												</ul>
											</li>
											<li><a href="listeProduits.php?categorie=solaire&page=1">Monture Solaire</a>
												<ul class="sub-menu">
													<li><a>Filtre de prix</a>
														<ul class="sub-menu-2">
															<li><a href="listeProduits.php?filtre=1&categorie=solaire&page=1">de 0 a 150</a></li>
															<li><a href="listeProduits.php?filtre=2&categorie=solaire&page=1">de 151 a 300</a></li>
															<li><a href="listeProduits.php?filtre=3&categorie=solaire&page=1">de 301 a 450</a></li>
															<li><a href="listeProduits.php?filtre=4&categorie=solaire&page=1">de 451 a 600</a></li>
														</ul>
													</li>
													
												</ul>
											</li>
											
											
												
											
											<li><a href="forum.php">Blog</a>
												<ul class="sub-menu">
													<li><a href="post.php">Ajouter un Post</a></li>
														<li><a href="forum.php">Afficher les Posts</a>
													</li>
													
												</ul>
											</li>
											<li>
												<a href="contact.php">Contactez Nous</a>
											
											</li>
											
												
									</nav>
								</div>
								<!-- menu-area-end -->
							</div>
							<div class="col-lg-3 col-md-3 com-sm-6 col-xs-6">
								<!-- header-right-area-start -->
								<div class="header-right-area">
									<ul>
										<li><a href="#" id="show-search"><i class="icon ion-ios-search-strong"></i></a>
											<div class="search-content" id="hide-search">
												<div class="search-text">
													<h1>Rechercher</h1>
													<form action="#">
														<input type="text" placeholder="Rechercher"/>
														<button class="btn" type="button">
															<i class="fa fa-search"></i>
														</button>
													</form>
												</div>
											</div>
										</li>
										<li><a href="afficherPanier.php"><i class="icon ion-bag"></i></a>
											<span><?php
											include_once '../core/panierC.php'; 
											$pan = new panierC();
											if (!isset($_SESSION['panier']))
											{
												$pan->creationPanier();
											}
											if (isset($_SESSION['id']))
											{

												echo $pan->calculPanier($_SESSION['id']);
												$nb = $pan->calculPanier($_SESSION['id']);
											}
											else if (!isset($_SESSION['panier']))
											{
												$pan->creationPanier();
												echo count($_SESSION['panier']['id_produit']);
												$nb = count($_SESSION['panier']['id_produit']);
											}
											else
											{
												echo count($_SESSION['panier']['id_produit']);
												$nb = count($_SESSION['panier']['id_produit']);
											}
											?>
											</span>
											<div class="mini-cart-sub">
												<div class="cart-product">
													<?php
													if ($nb>0){
													$total=0;
													if (isset($_SESSION['id']))
													{
														$listePanier=$pan->afficherPanier($_SESSION['id']);
														foreach($listePanier as $row){													
													?>
													<div class="single-cart">
														<div class="cart-img">
															<a href="#"><img src="<?php echo  "img/product/".$row['nom'] ?>" alt="book" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#"><?php echo $row['produit_nom'] ?></a></h5>
															<p><?php echo $row['qte'] ?> x <?php $total +=$row['qte']*$row['produit_prix']; echo $row['produit_prix']; ?> DT</p>
														</div>
													</div>
													<?php } ?>
													<?php }
														else if (count($_SESSION['panier']['id_produit'])>0) 
														{
															$nbArticles=count($_SESSION['panier']['id_produit']);
															for ($i=0 ;$i < $nbArticles ; $i++)
															{
																$listePanier=$pan->afficherPanierSession($_SESSION['panier']['id_produit'][$i]);
																foreach ($listePanier as $row) {?>
																	<div class="single-cart">
																	<div class="cart-img">
																	<a href="#"><img src="<?php echo  "img/product/".$row['nom'] ?>" alt="book" /></a>
																	</div>
																	<div class="cart-info">
																		<h5><a href="#"><?php echo $row['produit_nom'] ?></a></h5>
																		<p><?php echo $_SESSION['panier']['qte'][$i] ?> x <?php $total +=$_SESSION['panier']['qte'][$i]*$row['produit_prix']; echo $row['produit_prix']; ?> DT</p>
																	</div>
																</div>	
																<?php }
															?>
																
															<?php }
														}
													?>
												</div>
												<div class="cart-totals">
													<h5>Total <span><?php echo $total;?> DT</span></h5>
												</div>
													
												<div class="cart-bottom">
													<a href="passerCommande.php">Passer la commande</a>
												</div>
												<?php }
												else {
												?>
												<div class="cart-totals">
													<h5><center><b>Votre panier est vide</b></center></h5>
												</div>
												<?php } ?>
											</div>
										</li>
										<li id="show-cart"><a href="#"><i class="icon ion-drag"></i></a>
											<div class="shapping-area" id="hide-cart">
												<?php
														if(isset($_SESSION['id'])) { ?>
												<div class="single-shapping mb-20">
													<span>Reclamations</span>
													<ul>
														<li><a href="reclamation-affiche.php">Ajouter une reclamation</a></li>
														<li><a href="reclamation-affiche1.php">Mes reclamations</a></li>
													</ul>
												</div>
												<?php } ?>
												<div class="single-shapping">
													<span>Mon compte</span>
													<ul>
														<?php
														if(isset($_SESSION['id'])) { ?>
														<li><a href="afficherProfil.php?id=<?php echo $_SESSION['id']?>">Mon compte</a></li>
														<li><a href="listeCommandes.php">Mes commandes</a></li>
														<li><a href="afficherLivraison.php">Mes livraisons</a></li>
														<li><a href="afficherFavoris.php">Mes favoris</a></li>
														<li><a href="rendez-vous.php">Rendez-vous</a></li>
														<li><a href="logout-client.php">Déconnexion</a></li>
														<?php } else { ?>
														<li><a href="ajout-client1.php">Ajouter un compte</a></li>
														<li><a href="login-client-inter.php">Connexion</a></li>
														<?php } ?>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- header-right-area-end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top-area-end -->
				<!-- mobile-menu-area-start -->
				<div class="mobile-menu-area hidden-md hidden-lg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="mobile-menu">
									<nav id="mobile-menu-active">
										<ul id="nav">
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index-2.html">Home-2</a></li>
													<li><a href="index-3.html">Home-3</a></li>
													<li><a href="index-4.html">Home-4</a></li>
													<li><a href="index-5.html">Home-5</a></li>
													<li><a href="index-6.html">Home-6</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Men</a>
												<ul>
													<li><a href="shop.html">finibus iaculis</a></li>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">purus elittincidu</a></li>
													<li><a href="shop.html">tincidunt est</a></li>
													<li><a href="shop.html">Fusce eurhon</a></li>
													<li><a href="shop.html">iaculis ipsum</a></li>
													<li><a href="shop.html">ligula consectet</a></li>
													<li><a href="shop.html">vestibulum egest</a></li>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">ipsum ametus</a></li>
													<li><a href="shop.html">Morbi vitae</a></li>
													<li><a href="shop.html">semper vulputate</a></li>
													<li><a href="shop.html">Aliquam acsus</a></li>
													<li><a href="shop.html">Morbi amimi</a></li>
													<li><a href="shop.html">pretium metus</a></li>
													<li><a href="shop.html">suscipit felis</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Accessories</a>
												<ul>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">ipsum ametus</a></li>
													<li><a href="shop.html">Morbi vitae</a></li>
													<li><a href="shop.html">semper vulputate</a></li>
													<li><a href="shop.html">Aliquam acsus</a></li>
													<li><a href="shop.html">Morbi amimi</a></li>
													<li><a href="shop.html">pretium metus</a></li>
													<li><a href="shop.html">suscipit felis</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Women</a>
												<ul>
													<li><a href="shop.html">arcu dignissim</a></li>
													<li><a href="shop.html">congue quamm</a></li>
													<li><a href="shop.html">necfer mentuma</a></li>
													<li><a href="shop.html">ultricies volutpat</a></li>
													<li><a href="shop.html">acaliquet orci</a></li>
													<li><a href="shop.html">dignissim placera</a></li>
													<li><a href="shop.html">risussed trist</a></li>
													<li><a href="shop.html">Utsuscipit urna</a></li>
												</ul>
											</li>
											<li><a href="blog.html">blog</a>
												<ul>
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">blog details</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Pages</a>
												<ul>
													<li><a href="shop.html">Shop</a></li>
													<li><a href="product-details.html">product details</a></li>
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">blog details</a></li>
													<li><a href="about.html">About</a></li>
													<li><a href="contact.html">Contact</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="cart.html">Cart</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="register.html">Register</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="404.html">404 Page</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile-menu-area-end -->
</body>
<?php ob_end_flush();?>