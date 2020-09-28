<?php include('include/header.php'); ?>

<div class="uk-section">
  <div class="uk-container">
    <div class="uk-grid-large" data-uk-grid>
      <div class="sidebar-fixed-width uk-visible@m">
        <div class="sidebar-docs uk-position-fixed uk-margin-top">
          <h5>Commencer</h5>
          <ul class="uk-nav uk-nav-default doc-nav">
            <li><a href="doc.php">Accueil</a></li>
          </ul>
          <h5>Partie Employés</h5>
          <ul class="uk-nav uk-nav-default doc-nav">
            <li><a href="doc_emp.php">Espace employé</a></li>
            <li><a href="doc_conge.php">Demande de congés</a></li>
            <li><a href="#">Mon profil</a></li>
            <li><a href="#">Changer le mot de passe</a></li>
          </ul>
          <h5>Partie Admin</h5>
          <ul class="uk-nav uk-nav-default doc-nav">
            <li><a href="doc_admin.php">Dashboard</a></li>
            <li class="uk-active"><a href="doc_dep.php">Departements</a></li>
            <li><a href="doc_emp_admin.php">Employés</a></li>
            <li><a href="doc_type_conge.php">Types de congés</a></li>
            <li><a href="doc_ges_conge.php">Gestion des congés</a></li>
          </ul>
          <h5>Aide</h5>
          <ul class="uk-nav uk-nav-default doc-nav">
            <li><a href="doc.html">Contacting support</a></li>
          </ul>
        </div>
      </div>
      <div class="uk-width-1-1 uk-width-expand@m">
        <article class="uk-article">

        <div>
        <!-- <h2 id="image-lightbox-example">Espace employés Gestion RH</h2> -->
             <p>Dans le sous ménu de "DEPARTEMENT" se trouve l'option "Ajouter une fonction" , vous avez juste a remplir les champs et attribuer un code à cette fonction d'employé
          </p>
          <!-- <ul class="uk-list link-secondary">
              <li><a href="#">Employé Connexion</a></li>
              <li><a href="#">Admin Connexion</a></li>
            </ul> -->
            <figure data-uk-lightbox="animation: slide">
              <a class="uk-inline" href="images/rh-admin-ajout-fonction.jpg" data-caption="Image in lightbox">
                <img src="images/rh-admin-ajout-fonction.jpg" alt="Alt for image">
                <div class="uk-position-center">
                  <span data-uk-overlay-icon></span>
                </div>
              </a>
                  <!-- <p>Cette étape est très simple, il vous suffit de vous connectez avec vos identifiants
                    pour accéder à vous interface de travail.
                  </p> -->
            </figure>
      </div>

       <div>
        <!-- <h2 id="image-lightbox-example">Espace employés Gestion RH</h2> -->
             <p>Dans le sous ménu de "DEPARTEMENT" se trouve La liste de toutes les fonctions
          </p>
          <!-- <ul class="uk-list link-secondary">
              <li><a href="#">Employé Connexion</a></li>
              <li><a href="#">Admin Connexion</a></li>
            </ul> -->
            <figure data-uk-lightbox="animation: slide">
              <a class="uk-inline" href="images/rh-admin-fonction-list.jpg" data-caption="Image in lightbox">
                <img src="images/rh-admin-fonction-list.jpg" alt="Alt for image">
                <div class="uk-position-center">
                  <span data-uk-overlay-icon></span>
                </div>
              </a>
                  <!-- <p>Cette étape est très simple, il vous suffit de vous connectez avec vos identifiants
                    pour accéder à vous interface de travail.
                  </p> -->
            </figure>
      </div>

        </article>
      </div>
    </div>
  </div>
</div>

<div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <h5 class="uk-margin-top">Getting Started</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="doc.html">Template setup</a></li>
      <li><a href="doc.html">Basic theme setup</a></li>
      <li><a href="doc.html">Navigation bar</a></li>
      <li><a href="doc.html">Footer options</a></li>
      <li><a href="doc.html">Creating your first post</a></li>
      <li><a href="doc.html">Creating docs posts</a></li>
      <li><a href="doc.html">Enabling comments</a></li>
      <li><a href="doc.html">Google Analytics</a></li>
    </ul>
    <h5 class="uk-margin-top">Product Features</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Hero page header</a></li>
      <li><a href="doc.html">Category boxes section</a></li>
      <li><a href="doc.html">Fearured docs section</a></li>
      <li><a href="doc.html">Video lightbox boxes section</a></li>
      <li><a href="doc.html">Frequently asked questions section</a></li>
      <li><a href="doc.html">Team members section</a></li>
      <li><a href="doc.html">Call to action section</a></li>
      <li><a href="doc.html">Creating a changelog</a></li>
      <li><a href="doc.html">Contact form</a></li>
      <li><a href="doc.html">Adding media to post and doc content</a></li>
      <li><a href="doc.html">Adding table of contents to docs</a></li>
      <li><a href="doc.html">Adding alerts to content</a></li>
    </ul>
    <h5 class="uk-margin-top">Customization</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Translation</a></li>
      <li><a href="doc.html">Customization</a></li>
      <li><a href="doc.html">Development</a></li>
      <li><a href="doc.html">Sources and credits</a></li>
    </ul>
    <h5 class="uk-margin-top">Help</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Contacting support</a></li>
    </ul>
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Docs</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top">
      <li ><a href="index.html">Home</a></li>
      <li class="uk-active"><a href="doc.html">Docs</a></li>
      <li ><a href="blog.html">Blog</a></li>
      <li ><a href="contact.html">Contact</a></li>
      <li>
        <div class="uk-navbar-item"><a class="uk-button uk-button-success" href="contact.html">Contact</a></div>
      </li>
    </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('include/footer.php'); ?>
