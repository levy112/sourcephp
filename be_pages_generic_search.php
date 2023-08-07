<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
      <div class="flex-grow-1">
        <h1 class="h3 fw-bold mb-1">
          Search
        </h1>
        <h2 class="fs-base lh-base fw-medium text-muted mb-0">
          Vital page found in most web applications.
        </h2>
      </div>
      <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Generic</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
            Search
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Search -->
<div class="content">
  <form action="be_pages_generic_search.php" method="POST">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search..">
      <span class="input-group-text">
        <i class="fa fa-fw fa-search"></i>
      </span>
    </div>
  </form>
</div>
<!-- END Search -->

<!-- Page Content -->
<div class="content">
  <!-- Results -->
  <div class="block block-rounded overflow-hidden">
    <ul class="nav nav-tabs nav-tabs-block" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" id="search-projects-tab" data-bs-toggle="tab" data-bs-target="#search-projects" role="tab" aria-controls="search-projects" aria-selected="true">Projects</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-users-tab" data-bs-toggle="tab" data-bs-target="#search-users" role="tab" aria-controls="search-users" aria-selected="false">Users</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-classic-tab" data-bs-toggle="tab" data-bs-target="#search-classic" role="tab" aria-controls="search-classic" aria-selected="false">Classic</button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" id="search-photos-tab" data-bs-toggle="tab" data-bs-target="#search-photos" role="tab" aria-controls="search-photos" aria-selected="false">Photos</button>
      </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
      <!-- Projects -->
      <div class="tab-pane fade fade-up show active" id="search-projects" role="tabpanel" aria-labelledby="search-projects-tab" tabindex="0">
        <div class="fs-4 fw-semibold p-2 mb-4 border-start border-4 border-primary bg-body-light">
          <span class="text-primary fw-bold">6</span> projects found for <mark class="text-danger">HTML</mark>
        </div>
        <table class="table table-striped table-vcenter">
          <thead>
            <tr>
              <th style="width: 50%;">Project</th>
              <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Status</th>
              <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Sales</th>
              <th class="text-center" style="width: 20%;">Earnings</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">Web Application Framework</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center text-sm">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success fs-sm">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">1603</td>
              <td class="font-size-xl text-center fw-semibold">$ 35,287</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">Wordpress Theme</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning fs-sm">In Progress</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">1285</td>
              <td class="font-size-xl text-center fw-semibold">$ 16,250</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">Mobile Application</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success fs-sm">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">4850</td>
              <td class="font-size-xl text-center fw-semibold">$ 18,111</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">UI Kit</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success fs-sm">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">698</td>
              <td class="font-size-xl text-center fw-semibold">$ 9,200</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">Admin Template</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger fs-sm">Canceled</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">1693</td>
              <td class="font-size-xl text-center fw-semibold">$ 10,589</td>
            </tr>
            <tr>
              <td>
                <h4 class="h5 mt-3 mb-2">
                  <a href="javascript:void(0)">Flat Icon Set</a>
                </h4>
                <p class="d-none d-sm-block text-muted">
                  Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                </p>
              </td>
              <td class="d-none d-lg-table-cell text-center">
                <span class="fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success fs-sm">Completed</span>
              </td>
              <td class="d-none d-lg-table-cell font-size-xl text-center fw-semibold">1500</td>
              <td class="font-size-xl text-center fw-semibold">$ 19,670</td>
            </tr>
          </tbody>
        </table>
        <nav aria-label="Projects Search Navigation">
          <ul class="pagination pagination-sm">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- END Projects -->

      <!-- Users -->
      <div class="tab-pane fade fade-up" id="search-users" role="tabpanel" aria-labelledby="search-users-tab" tabindex="0">
        <div class="fs-4 fw-semibold p-2 mb-4 border-start border-4 border-primary bg-body-light">
          <span class="text-primary fw-bold">192</span> results found for <mark class="text-danger">client</mark>
        </div>
        <table class="table table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 70px;"><i class="si si-user"></i></th>
              <th>Name</th>
              <th class="d-none d-sm-table-cell">Email</th>
              <th class="d-none d-lg-table-cell" style="width: 15%;">Access</th>
              <th class="text-center" style="width: 80px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $gender = array('male', 'female');

            for ($i = 1; $i < 11; $i++) {
              $gender_random = $gender[rand(0, 1)];
              ?>
              <tr>
                <td class="text-center">
                  <?php $one->get_avatar(0, $gender_random, 48); ?>
                </td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)"><?php $one->get_name($gender_random); ?></a>
                </td>
                <td class="d-none d-sm-table-cell">
                  client<?php echo $i; ?>@example.com
                </td>
                <td class="d-none d-lg-table-cell">
                  <?php $one->get_tag(); ?>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit Client">
                      <i class="fa fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete Client">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <nav aria-label="Users Search Navigation">
          <ul class="pagination pagination-sm">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- END Users -->

      <!-- Classic -->
      <div class="tab-pane fade fade-up" id="search-classic" role="tabpanel" aria-labelledby="search-classic-tab" tabindex="0">
        <div class="fs-4 fw-semibold p-2 mb-4 border-start border-4 border-primary bg-body-light">
          <span class="text-primary fw-bold">280</span> websites found for <mark class="text-danger">OneUI</mark>
        </div>
        <div class="row py-3">
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <div class="col-lg-6">
              <h4 class="h5 mb-1">
                <a href="javascript:void(0)">OneUI - Bootstrap 5 UI Framework</a>
              </h4>
              <div class="fs-sm fw-medium text-success mb-1">https://pixelcave.com/</div>
              <p class="fs-sm text-muted">Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit.</p>
            </div>
            <div class="col-lg-6">
              <h4 class="h5 mb-1">
                <a href="javascript:void(0)">OneUI - Bootstrap 5 UI Framework</a>
              </h4>
              <div class="fs-sm fw-medium text-success mb-1">https://pixelcave.com/</div>
              <p class="fs-sm text-muted">Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit.</p>
            </div>
          <?php } ?>
        </div>
        <nav aria-label="Classic Search Navigation">
          <ul class="pagination pagination-sm">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- END Classic -->

      <!-- Photos -->
      <div class="tab-pane fade fade-up" id="search-photos" role="tabpanel" aria-labelledby="search-photos-tab" tabindex="0">
        <div class="fs-4 fw-semibold p-2 mb-4 border-start border-4 border-primary bg-body-light">
          <span class="text-primary fw-bold">85</span> photos found for <mark class="text-danger">wallpaper</mark>
        </div>
        <div class="row g-sm push">
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo1.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo2.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo6.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo21.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo22.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo9.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo23.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo24.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo25.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo27.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo28.jpg" alt="">
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 push">
            <img class="img-fluid" src="<?php echo $one->assets_folder; ?>/media/photos/photo30.jpg" alt="">
          </div>
        </div>
        <nav aria-label="Photos Search Navigation">
          <ul class="pagination pagination-sm">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- END Photos -->
    </div>
  </div>
  <!-- END Results -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
