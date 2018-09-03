<!doctype html>

<html lang="ru" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="ru" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

  <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

  <title><?= $title ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <script src="/assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '/'
      });
    </script>

  <!-- Dashboard Core -->
  <link href="/assets/css/dashboard.css" rel="stylesheet" />
  <script src="/assets/js/dashboard.js"></script>

  <!-- c3.js Charts Plugin -->
  <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
  <script src="/assets/plugins/charts-c3/plugin.js"></script>
  <!-- Google Maps Plugin -->
  <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
  <script src="/assets/plugins/maps-google/plugin.js"></script>
  <!-- Input Mask Plugin -->
  <script src="/assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <a class="header-brand" href="#">
              <span class="fa fa-twitter"></span>
              <span class="header-brand-img"><?= $mainTitle ?></span>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="dropdown d-none d-md-flex">
                <a class="nav-link icon" data-toggle="dropdown">
                  <i class="fe fe-bell"></i>
                  <span class="nav-unread"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(/uploads/faces/male/41.jpg)"></span>
                    <div>
                      <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                      <div class="small text-muted">10 minutes ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(/uploads/faces/female/1.jpg)"></span>
                    <div>
                      <strong>Alice</strong> started new task: Tabler UI design.
                      <div class="small text-muted">1 hour ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(/uploads/faces/female/18.jpg)"></span>
                    <div>
                      <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                      <div class="small text-muted">2 hours ago</div>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                </div>
              </div>
              <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                  <span class="avatar" style="background-image: url(/uploads/faces/female/25.jpg)"></span>
                  <span class="ml-2 d-none d-lg-block">
                    <span class="text-default"><?= $user['name'] ?></span>
                    <small class="text-muted d-block mt-1">user</small>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a class="dropdown-item" href="/profile/1">
                    <i class="dropdown-icon fe fe-user"></i> Профиль
                  </a>
                  <a class="dropdown-item" href="/settings/1">
                    <i class="dropdown-icon fe fe-settings"></i> Настройки
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                  </a>
                </div>
              </div>
            </div>

            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
              <span class="header-toggler-icon"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
              <form class="input-icon my-3 my-lg-0">
                <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                <div class="input-icon-addon">
                  <i class="fe fe-search"></i>
                </div>
              </form>
            </div>
            <div class="col-lg order-lg-first">
              <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                <li class="nav-item">
                  <a href="/profile/1" class="nav-link active"><i class="fe fe-home"></i> Моя страница</a>
                </li>
                <li class="nav-item">
                  <a href="/feed" class="nav-link"><i class="fe fe-file"></i>Лента сообщений</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="my-3 my-md-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url(/uploads/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
                <div class="card-body text-center">
                  <img class="card-profile-img" src="/uploads/faces/male/16.jpg">

                  <h3 class="mb-3">Peter Richards</h3>

                  <p class="mb-4">
                    Big belly rude boy, million dollar hustler. Unemployed.
                  </p>

                  <button class="btn btn-outline-primary btn-sm">
                    <span class="fa fa-twitter"></span> Follow
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                  <div class="card-body">
                    <h3 class="card-title">Edit Profile</h3>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Company</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" placeholder="Username" value="michael23">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" placeholder="Company" value="Chet">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="City" value="Melbourne">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Postal Code</label>
                          <input type="number" class="form-control" placeholder="ZIP Code">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Country</label>
                          <select class="form-control custom-select">
                            <option value="">Germany</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">About Me</label>
                          <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">First link</a></li>
                  <li><a href="#">Second link</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Third link</a></li>
                  <li><a href="#">Fourth link</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Fifth link</a></li>
                  <li><a href="#">Sixth link</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Other link</a></li>
                  <li><a href="#">Last link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>