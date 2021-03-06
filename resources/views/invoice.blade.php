@extends('layouts.app')

@section('content')

<div class="container-fluid m-invoices">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Invoices</h2>
    </div>
  </div>
  <div class="main-container m-invoices__container">
    <div class="m-invoices__tables">
      <div class="table-header">
        <h4 class="table-header__heading">Open Invoices (4)</h4>
        <div class="table-header__controls">
          <div class="dropdown table-dropdown">
            <a class="btn btn-link dropdown-toggle" href="#" data-toggle="dropdown">
              <span class="table-dropdown__text">Sort by:</span> <span class="table-dropdown__value">Most Hours</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown table-dropdown">
            <a class="btn btn-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
              <span class="table-dropdown__text">Time line:</span> <span class="table-dropdown__value">Last 15 days</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <select class="form-control" data-placeholder="Bulk Actions">
            <option selected=""> </option>
            <option value="delete">Delete</option>
            <option value="send">Send</option>
          </select>
        </div>
      </div>
      <table class="table table-hover table__actions">
        <tbody>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-4.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 2 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr class="is-selected">
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-9.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 3 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="table-header">
        <h4 class="table-header__heading">Closed Invoices (10)</h4>
        <div class="table-header__controls">
          <div class="dropdown table-dropdown">
            <a class="btn btn-link dropdown-toggle" href="#" data-toggle="dropdown">
              <span class="table-dropdown__text">Sort by:</span> <span class="table-dropdown__value">Most Hours</span>
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown table-dropdown">
            <a class="btn btn-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
              <span class="table-dropdown__text">Time line:</span> <span class="table-dropdown__value">Last 15 days</span>
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

          <select class="form-control" data-placeholder="Bulk Actions">
            <option selected=""> </option>
            <option value="delete">Delete</option>
            <option value="send">Send</option>
          </select>
        </div>
      </div>
      <table class="table table-hover table__actions">
        <tbody>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-4.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 2 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-9.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 3 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-9.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-10.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 3 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-4.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 2 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">&nbsp;</td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-5.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--success table__tag--lg">Invoice Sent</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="table__cell-icon">
              <span class="ua-icon-warning-outline color-danger"></span>
            </td>
            <td class="table__checkbox table__cell-compact">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>
            <td class="table__avatar">
              <img src="img/users/user-9.png" alt="" width="34" height="34" class="rounded-circle">
              <span>Annie Cooper</span>
            </td>
            <td>Redesign Trackable</td>
            <td>04:25:30</td>
            <td>$ 12,650.00</td>
            <td>
              <span class="table__tag table__tag--danger table__tag--lg">Overdue: 3 days</span>
            </td>
            <td class="table__cell-actions">
              <div class="table__cell-actions-wrap">
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-send"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-remove"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-edit-outline"></span>
                </a>
                <a href="#" class="table__cell-actions-item table__cell-actions-icon">
                  <span class="ua-icon-print"></span>
                </a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="m-invoices__activity">
      <div class="m-invoices__activity-scroll js-scrollable" data-simplebar="init"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="top: 2px; height: 906px;"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
        <div class="m-invoices__activity-scrollpane">
          <h5 class="m-invoices__activity-heading">Recent Activity</h5>
          <div class="m-invoices__activity-items">
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-point"></div>
              <span class="m-invoices__activity-event m-invoices__activity-event-date">12, apr</span>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--purple">
                <span class="ua-icon-pause"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Stopped Timer for UX &amp; UI Redesign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--green">
                <span class="ua-icon-play"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Started Timer for UX &amp; UI Redisign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon">
                <span class="ua-icon-envelope"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Sent Invoice to Filip Justic</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--blue">
                <span class="ua-icon-select-check"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Started Timer for UX &amp; UI Redisign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--pink">
                <span class="ua-icon-exclamation"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Sent Invoice to Filip Justic</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-point"></div>
              <span class="m-invoices__activity-event m-invoices__activity-event-date">11, apr</span>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--purple">
                <span class="ua-icon-pause"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Stopped Timer for UX &amp; UI Redesign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--green">
                <span class="ua-icon-play"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Started Timer for UX &amp; UI Redisign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon">
                <span class="ua-icon-envelope"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Sent Invoice to Filip Justic</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--blue">
                <span class="ua-icon-select-check"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Started Timer for UX &amp; UI Redisign</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
            <div class="m-invoices__activity-item">
              <div class="m-invoices__activity-type m-invoices__activity-type-icon m-invoices__activity-type--pink">
                <span class="ua-icon-exclamation"></span>
              </div>
              <div class="m-invoices__activity-event m-invoices__activity-event-text">
                <div class="m-invoices__activity-event-text-name">Sent Invoice to Filip Justic</div>
                <span class="m-invoices__activity-event-text-date">12 minutes ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>





@endsection