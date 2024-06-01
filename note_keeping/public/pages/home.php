      <section class="jumbotron">
        <h1> </h1>
        <p class="lead">Note Keeping is a service that allows you to store and keep track of your notes. You can write notes and export them as a .zip or .tar! </p>
        <p class="lead">The application is still under development, if you find bugs, please do not abuse them!</p>
        <?php if (!is_logged_in()) { ?>
        <a href="?page=login" class="btn btn-primary">Log in</a>
        <?php }; ?>
      </section>