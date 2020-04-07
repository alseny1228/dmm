<!-- start page sidebar -->
<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <span>Fabrex</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li>
                    <a href="<?= LINK ?>dashboard">
                        <i class="menu-icon icon-home4"></i><span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-flash_on"></i><span>Gestion clients</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?= LINK ?>client">Ajouter</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-flash_on"></i><span>Gestion véhicules</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?= LINK ?>vehicule">Ajouter un véhicule</a></li>
                        <!-- <li><a href="immatriculation">Immatriculation</a></li>
                        <li><a href="Typeoperation">Type d'operation</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-layers"></i><span>Devis et factures</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?= LINK ?>factures">Ajouter</a></li>
                        <li><a href="<?= LINK ?>historiques">Historique</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-code"></i><span>Employées</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?= LINK ?>employes">Ajouter </a></li>
                        <li><a href="<?= LINK ?>listemployes">Liste Employés </a></li>
                        <li><a href="<?= LINK ?>paiement">Paiement</a></li>
                    </ul>
                </li>
               
                <li class="menu-divider"></li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-public"></i><span>Utilisateurs</span></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end page sidebar -->