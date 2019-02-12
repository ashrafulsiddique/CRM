<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Dashboard / Universe Admin</title>
  <link rel="shortcut icon" href="/img/favicon.png">

  
<link rel="stylesheet" href="/fonts/open-sans/style.min.css"> <!-- common font  styles  -->
<link rel="stylesheet" href="/fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="/fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
<link rel="stylesheet" href="/fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet" href="/vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet" href="/vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet" href="/vendor/tagify/tagify.css"> <!-- styles for tags -->
<link rel="stylesheet" href="/vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet" href="/vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="/css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->

  

<script src="/js/ie.assign.fix.min.js"></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->



<div class="page-preloader js-page-preloader">
  <div class="page-preloader__logo">
    <img src="/img/logo-black-lg.png" alt="" class="page-preloader__logo-image">
  </div>
  <div class="page-preloader__desc">Pro Edition</div>
  <div class="page-preloader__loader">
    <div class="page-preloader__loader-heading">System Loading</div>
    <div class="page-preloader__loader-desc">Widgets update</div>
    <div class="progress progress-rounded page-preloader__loader-progress">
      <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <div class="page-preloader__copyright">ShinyGleam Software, @2019</div>
</div>



  <div class="navbar navbar-light navbar-expand-lg">
  <button class="sidebar-toggler" type="button">
    <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
    <span class="ua-icon-alert-close sidebar-toggler__close"></span>
  </button>

  <span class="navbar-brand">
    <a href="http://themesanytime.com/"><img src="/img/logo.png" alt="" class="navbar-brand__logo"></a>
    <span class="ua-icon-menu slide-nav-toggle"></span>
  </span>

  <span class="navbar-brand-sm">
    <a href="http://themesanytime.com/"><img src="/img/logo-sm.png" alt="" class="navbar-brand__logo"></a>
    <span class="ua-icon-menu slide-nav-toggle"></span>
  </span>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
    <span class="ua-icon-navbar-open navbar-toggler__open"></span>
    <span class="ua-icon-alert-close navbar-toggler__close"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-collapse">
    <div class="navbar__menu">
      <ul class="navbar-nav">
        <li class="nav-item navbar__menu-item" style="padding-top: 3px;">
          <a class="nav-link" href="{{ route('accounts.index')}}">Accounts</a>
        </li>
          <li class="nav-item navbar__menu-item" style="padding-top: 3px;">
          <a class="nav-link" href="#">Reports</a>
        </li>
       
         <li class="nav-item navbar__menu-item" style="padding-top: 3px;">
          <a class="nav-link" href="#">Comissions</a>
        </li>
        <li class="nav-item navbar__menu-item" style="padding-top: 3px;">
          <a class="nav-link" href="{{route('messages.index')}}">Messages</a>
        </li>
        <li class="nav-item navbar__menu-item" style="padding-top: 3px;">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <div class="navbar__menu-side">
        <div class="navbar-search navbar__menu-search">
          <div class="input-group input-group-icon iconfont icon-right">
            <input class="form-control navbar-search__input navbar__menu-search-input" type="text" placeholder="Search"/><span class="input-icon ua-icon-search"></span>
          </div>
        </div>
      </div>

    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
      <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="navbar-notify navbar-notify--notifications">
          <span>
            <span class="navbar-notify__icon mdi mdi-bell"></span>
            <span class="navbar-notify__text">Notifications</span>
          </span>
          <!--<span class="navbar-notify__amount">3</span>-->
          <!--<span class="navbar-notify__indicator"></span>-->
        </span>
    </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
        <div class="navbar-dropdown-notifications__header">
          <span>NOTIFICATIONS</span>
          <a href="#" class="navbar-dropdown-notifications__mark-read">
            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
          </a>
        </div>
        <div class="navbar-dropdown-notifications__body js-scrollable">
          <!--<div class="navbar-dropdown-notifications__body-empty"><img class="navbar-dropdown-notifications__body-empty-image" src="img/empty-notifications.png" alt=""/>
            <div class="navbar-dropdown-notifications__body-empty-text">You`re up to date!</div>
          </div>-->

          <div class="navbar-dropdown-notification is-new">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-4.png" alt="" width="40" height="40">
              <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-5.png" alt="" width="40" height="40">
              <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-6.png" alt="" width="40" height="40">
              <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-7.png" alt="" width="40" height="40">
              <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification__date-separator">Yesterday</div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-8.png" alt="" width="40" height="40">
              <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-9.png" alt="" width="40" height="40">
              <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
          <div class="navbar-dropdown-notification">
            <div class="navbar-dropdown-notification__user">
              <img class="navbar-dropdown-notification__avatar rounded-circle" src="/img/users/user-10.png" alt="" width="40" height="40">
              <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
            </div>
            <div class="navbar-dropdown-notification__content">
              <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
              <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
            </div>
            <span class="navbar-dropdown-notification__date">9:49 AM</span>
          </div>
        </div>
        <a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
      </div>
    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
      <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="navbar-notify">
          <span>
            <span class="navbar-notify__text">Messages</span>
          </span>
          <!--<span class="navbar-notify__amount">5</span>-->
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
        <div class="navbar-dropdown-notifications__header"><span>MESSAGES</span>
          <a href="#" class="navbar-dropdown-notifications__mark-read">
            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
          </a>
        </div>
        <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="/img/users/user-4.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-reply-to"></span>
                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="/img/users/user-5.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-comments"></span>
                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="/img/users/user-6.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-star"></span>
                <strong>Shawna Cohen</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="/img/users/user-7.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-download"></span>
                <strong>Jason Kendall</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
        </div><a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
      </div>
    </div>
    <div class="dropdown navbar-dropdown no-arrow navbar-help-dropdown navbar-notify-dropdown--help">
      <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="navbar-notify">
          <span>
            <span class="navbar-notify__icon mdi mdi-help-circle"></span>
            <span class="navbar-notify__text">Info</span>
          </span>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-center navbar-dropdown-menu">
        <h6 class="navbar-help-dropdown__heading">Need Help?</h6>
        <p class="navbar-help-dropdown__desc">
          Give us a call 888-898-8302 <br>
          send a email: <a href="#">info@example.com</a> <br>
          or
        </p>
        <div>
          <a href="help-center-submit-ticket.html" class="btn btn-info navbar-help-dropdown__submit">Submit a Ticket</a>
        </div>
      </div>
    </div>
    <div class="dropdown navbar-dropdown">
      <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
        <img src="/img/users/user-3.png" alt="" class="navbar-dropdown-toggle__user-avatar">
        <span class="navbar-dropdown__user-name">{{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
        <div class="navbar-dropdown-user-content">
          <div class="dropdown-user__avatar"><img src="/img/users/user-3.png" alt=""/></div>
          <div class="dropdown-info">
            <div class="dropdown-info__name">{{ Auth::user()->name }}</div>
            <div class="dropdown-info__job">@role('Admin')
                I am a super-admin!
            @elserole('customer')
                I am not a super-admin...
            @endrole</div>
            <div class="dropdown-info-buttons"><a class="dropdown-info__viewprofile" href="{{ route('users.show',Auth::user()->id) }}">View Profile</a><a class="dropdown-info__addaccount" href="{{ route('users.create') }}">Add account</a></div>
          </div>
        </div><a class="dropdown-item navbar-dropdown__item" href="{{ route('logout') }}">Sign Out</a>
      </div>
    </div>
  </div>
</div>




<div class="page-wrap">
  
    <div class="sidebar-section">
  <div class="sidebar-section__scroll">
    <!--<div class="sidebar-section__user has-background">
      <img src="img/users/user-19.png" alt="" class="sidebar-section__user-avatar rounded-circle">

      <div class="dropdown sidebar-section__user-dropdown">
        <a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Joyce Walsh
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Help</a>
          <a class="dropdown-item" href="#">Sign Out</a>
        </div>
      </div>
    </div>-->

    <div class="sidebar-user-a">
      <img src="/img/users/user-3.png" alt="" class="sidebar-user-a__avatar rounded-circle">
      <div class="sidebar-user-a__name">{{ Auth::user()->name }}</div>
      <div class="sidebar-user-a__desc">@role('Admin')
                I am a super-admin!
            @elserole('customer')
                I am not a super-admin...
            @endrole</div>

      <a href="{{ route('users.show',Auth::user()->id) }}" class="btn icon-left sidebar-user-a__link">
        Personal Account <span class="btn-icon ua-icon-user-solid"></span>
      </a>
    </div>

    <div>
      <div class="sidebar-section__separator">Main</div>
      <ul class="sidebar-section-nav">
        <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link sidebar-section-nav" href="{{ route('dashboard')}}">
            <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
            <span class="sidebar-section-nav__item-text">Dashboard</span>
          </a>
        </li>
         @can('User-list')
        <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('roles.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-account"></span>
            <span class="sidebar-section-nav__item-text">Department</span>
          </a>
        </li>
        @endcan
        @can('User-list')
        <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('users.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-account"></span>
            <span class="sidebar-section-nav__item-text">Users</span>
          </a>
        </li>
        @endcan
        @can('Lead-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('leads.index')}}">
            <span class="sidebar-section-nav__item-icon ua-icon-component"></span>
            <span class="sidebar-section-nav__item-text">Leads</span>
          </a>
        </li>
        @endcan
        @can('Invoice-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('invoices.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Invoices</span>
          </a>
        </li>
        @endcan
         @can('Product-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('products.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Products</span>
          </a>
        </li>
        @endcan
        @can('Order-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('orders.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Orders</span>
          </a>
        </li>
        @endcan
        @can('Expense-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('expenses.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Expenses</span>
          </a>
        </li>
        @endcan
        @can('Proposal-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('proposals.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Proposals</span>
          </a>
        </li>
        @endcan
        @can('Project-list')
          <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('projects.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Projects</span>
          </a>
        </li>
        @endcan
        @can('Ticket-list')
         <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('tickets.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Tickets</span>
          </a>
        </li>
        @endcan
        @can('Task-list')
        <li class="sidebar-section-nav__item">
          <a class="sidebar-section-nav__link" href="{{route('tasks.index')}}">
            <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
            <span class="sidebar-section-nav__item-text">Tasks</span>
          </a>
        </li>
        @endcan
      </ul>

  </div>

    <!--<div class="sidebar-section-nav__footer">
      <ul class="sidebar-section-nav">
        <li class="sidebar-section-nav__item sidebar-section-nav__item-btn mb-4">
          <a href="#" class="btn btn-info btn-block">Create project</a>
        </li>
      </ul>
      <div class="sidebar__collapse">
        <span class="icon ua-icon-collapse-left-arrows"></span>
      </div>
    </div>
  </div>
  -->
</div>



 </div>
   <div class="page-content" style="padding-left:5px;padding-top: 80px;padding-right: 5px; background: white;">
    @yield('content')
    </div>
</div>



<script src="/vendor/echarts/echarts.min.js"></script>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/popper/popper.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/select2/js/select2.full.min.js"></script>
<script src="/vendor/simplebar/simplebar.js"></script>
<script src="/vendor/text-avatar/jquery.textavatar.js"></script>
<script src="/vendor/tippyjs/tippy.all.min.js"></script>
<script src="/vendor/flatpickr/flatpickr.min.js"></script>
<script src="/vendor/wnumb/wNumb.js"></script>
<script src="/js/main.js"></script>


<script src="/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="/js/preview/default-dashboard.min.js"></script>


<div class="sidebar-mobile-overlay"></div>


  <div class="settings-panel">
  <div class="settings-panel__header">
    <span class="settings-panel__close ua-icon-modal-close"></span>

    <h5 class="settings-panel__heading">Theme Customizer</h5>
    <div class="settings-panel__desc">Customize & Preview In Real Time</div>
  </div>
  <div class="settings-panel__body">
    <div class="settings-panel__layout-options">
      <h6 class="settings-panel__block-heading">Layout Options</h6>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="collapse-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Collapse Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="hide-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Hide Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="full-height-sidebar">
              <span class="switch-slider"></span>
            </span>
          <span class="switch-inline__text">Full Height Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="rounded-form-controls">
              <span class="switch-slider"></span>
            </span>
          <span class="switch-inline__text">Rounded Form Controls</span>
        </label>
      </div>
    </div>
    <div class="settings-panel__theme-colors">
      <h6 class="settings-panel__block-heading">Theme Colors</h6>

      <ul class="list-unstyled">
        <!--<li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-a">
            <span class="color-radio__color"></span>
            <span class="color-radio__text">#1</span>
          </label>
        </li>-->
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-b">
            <span class="color-radio__color color-radio__color--deep-cerulean"></span>
            <span class="color-radio__text">#2</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color is-checked">
            <input type="radio" name="settings_color" data-style="style" checked>
            <span class="color-radio__color color-radio__color--river-bad"></span>
            <span class="color-radio__text">#3</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-d">
            <span class="color-radio__color color-radio__color--sun-juan"></span>
            <span class="color-radio__text">#4</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-e">
            <span class="color-radio__color color-radio__color--bermuda-gray"></span>
            <span class="color-radio__text">#5</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-f">
            <span class="color-radio__color color-radio__color--deep-sea"></span>
            <span class="color-radio__text">#6</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-i">
            <span class="color-radio__color color-radio__color--wine-berry"></span>
            <span class="color-radio__text">#7</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-g">
            <span class="color-radio__color  color-radio__color--big-stone"></span>
            <span class="color-radio__text">#8</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-j">
            <span class="color-radio__color color-radio__color--killarney"></span>
            <span class="color-radio__text">#9</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-h">
            <span class="color-radio__color color-radio__color--kabul"></span>
            <span class="color-radio__text">#10</span>
          </label>
        </li>
      </ul>
    </div>
  </div>
</div>

<span class="settings-panel-control">
  <span class="settings-panel-control__icon ua-icon-settings"></span>
</span>
<script src="/js/preview/settings-panel.min.js"></script>

</body>

</html>