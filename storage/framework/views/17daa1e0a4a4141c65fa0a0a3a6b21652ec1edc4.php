<!-- Header -->
<header id="header">
					<h1 id="logo"><a href="pocetna"><img src="<?php echo url('/'); ?>/images/logo.png" alt="#" height="60px"></a></h1>
					<nav id="nav">
						<ul>
                            <li><a href="<?php echo url('/'); ?>/pocetna"><i class="fas fa-home"></i> Pocetna</a></li>
                            <li><a href="<?php echo url('/'); ?>/vijesti"><i class="fas fa-newspaper"></i> Vijesti</a></li>
							
							<?php if(auth()->guard()->guest()): ?>
							<li><a href="<?php echo url('/'); ?>/login" class="button primary"><i class="fas fa-sign-in-alt"></i> Prijava</a></li>
							<?php else: ?>
							<li><a style="color:#e44c65" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user"></i> <?php echo e(Auth::user()->name); ?>

                                </a>
                               <ul>
                            <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="<?php echo url('/'); ?>/profil"><i class="fas fa-user"></i> Profil</a></div></li>


<li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a href="<?php echo url('/'); ?>/slika_api" class="dropdown-item"><i class="fas fa-space-shuttle"></i> NASA slika dana</a></div></li>
                                            <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a href="<?php echo url('/'); ?>/isslokacija" class="dropdown-item"><i class="fas fa-globe-europe"></i> Gdje je ISS?</a></div></li>
                                            <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a href="<?php echo url('/'); ?>/galerija" class="dropdown-item"><i class="fas fa-images"></i> Galerija Slika</a></div></li>
                                            <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a href="<?php echo url('/'); ?>/literatura_korisnik" class="dropdown-item"><i class="fas fa-book-reader"></i> Preuzmi literaturu</a></div></li>

                                <li><div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i> <?php echo e(__('Odjava')); ?>

                                    </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div></li>

                            </ul>
                            </li>
							<?php endif; ?>
						</ul>
					</nav>
				</header><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\includes\header.blade.php ENDPATH**/ ?>