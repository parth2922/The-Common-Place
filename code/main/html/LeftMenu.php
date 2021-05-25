<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="../../index.php">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">THE COMMON PLACE</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span></span></li>
            <li class=" nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Risk-Management-Form.php' ? 'active' : ''; ?> "><a href="Create-Client.php"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Risk Management">Create Client</span></a>
            </li>
            <li class=" nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Client-Manager.php' ? 'active' : ''; ?>"><a href="Client-Manager.php"><i class="feather icon-layers"></i><span class="menu-title" data-i18n="Asset Management">Client Manager</span></a>
            </li>
            <li class=" nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'Standard-Library.php' ? 'active' : ''; ?>"><a href="Standard-Library.php"><i class="feather icon-layers"></i><span class="menu-title" data-i18n="Asset Management">Standard Library</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
