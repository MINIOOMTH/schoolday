<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=home"><?PHP echo $data["title"] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "home") echo "active" ?>" aria-current="page" href="index.php?page=home"><?PHP echo $data['nav_menu']['1'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "personnel") echo "active" ?>" href="index.php?page=personnel"><?PHP echo $data['nav_menu']['2'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "information") echo "active" ?>" href="index.php?page=information"><?PHP echo $data['nav_menu']['3'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "") echo "active" ?>" href="index.php?page="><?PHP echo $data['nav_menu']['4'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "") echo "active" ?>" href="index.php?page="><?PHP echo $data['nav_menu']['5'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?PHP if ($_GET["page"] == "") echo "active" ?>" href="index.php?page="><?PHP echo $data['nav_menu']['6'] ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            เมนูอื่นๆ
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=test">Test</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <a href="<?PHP echo $data['link_facebook']; ?>" target="_blank" class="btn btn-primary me-5">facebook</a>
    </div>
  </div>
</nav>