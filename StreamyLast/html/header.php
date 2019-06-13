<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item">
        <script src="./script.js"></script>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            <h2 class="is-3"><?= $_SESSION['user']?></h2>
          </a>
          <div class="navbar-dropdown">
            <a onclick='changePassword("<?=$_SESSION['user']?>")' class="navbar-item">
              Change Password
            </a>
            <a onclick='deleteAccount("<?=$_SESSION['user']?>")' class="navbar-item">
              Delete Account
            </a>
          </div>
        </div>
      </a>
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
      data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          PlayList
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item" href="watchLater.php">
            watch later
          </a>
          <a class="navbar-item" href="favorit.php">
            favorit
          </a>
        </div>
      </div>
      <a href="./upload.php" class="navbar-item">
        Add Video
      </a>
      <a href="./logout.php" class="navbar-item">
        Log Out
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <form action="./index.php" method="GET">
          <div class="field is-grouped">
            <p class="control ">
              <input class="input" type="text" name="search" placeholder="trouver une video...">
            </p>
            <p class="control">
              <input value="Search" type="submit" class="button is-white has-text-dark">
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</nav>
