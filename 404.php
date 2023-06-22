<? get_header(); ?>

<style>
  .error-404 .container {
      padding-top: 130px;
      padding-bottom: 130px;
      max-width: 924px;
      margin-left: auto;
      margin-right: auto;
  }

  .error-404 .title {
      margin-top: 30px;
  }

  .error-404 .content {
      margin-top: 30px;
  }

  .error-404 .content p {
      font-weight: 500;
  }

  .error-404 .action {
      margin-top: 20px;
  }

  .error-404 .action .btn {
      padding: 16px 30px 16px 30px;
  }

  @media (max-width: 767px) {
      .error-404 .container {
          padding: 30px 50px;
      }
      .error-404 .content p {
          font-size: 16px;
          font-weight: 400;
      }
      .error-404 .action .btn {
          width: 100%;
          padding: 16px;
      }
  }
</style>

<section class="error-404 page-hero">
  <div class="container text-center">
    <div class="title fadeInBottom-1">
      <h1 class="lg-title title-font">Page Not Found</h1>
    </div>
    <div class="content fadeInBottom-2">
      <p class="xg-content">The page you are looking for doesn't exist or has been moved</p>
    </div>
    <div class="action fadeInBottom-3">
      <a href="<?=get_full_url('/')?>" class="btn btn-blue blue-button-hover">Return to homepage</a>
    </div>
  </div>
</section>

<? get_footer();
