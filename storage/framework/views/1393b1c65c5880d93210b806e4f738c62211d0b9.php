<!-- Card -->
                    <div class="card card-bleed border-bottom border-bottom-md-0 shadow-light-lg">

                        <!-- Collapse -->
                        <div class="collapse d-md-block" id="sidenavCollapse">
                            <div class="card-body">

                                <!-- Heading -->
                                <h6 class="fw-bold text-uppercase mb-3">
                                    Account
                                </h6>

                                <!-- List -->
                                <ul class="card-list list text-gray-700 mb-6">
                                    <li class="list-item <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                                        <a class="list-link text-reset" href="<?php echo e(route('dashboard')); ?>">
                                            General
                                        </a>
                                    </li>
                                    <li class="list-item <?php echo e(request()->routeIs('password.edit') ? 'active' : ''); ?>">
                                        <a class="list-link text-reset" href="<?php echo e(route('password.edit')); ?>">
                                            Security
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="list-link text-reset" href="<?php echo e(route('application.edit')); ?>">
                                            My Application
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div><?php /**PATH /var/www/html/resources/views/components/sidebar-card.blade.php ENDPATH**/ ?>