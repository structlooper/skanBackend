@extends('admin.layouts.sideBar')
@section('adminTitle')
    Activity | Timeline
@endsection

@section('adminSide')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section-title">September 2018</h2>
        <div class="row">
          <div class="col-12">
            <div class="activities">
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-comment-alt"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job text-primary">2 min ago</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                </div>
              </div>
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-arrows-alt"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job">1 hour ago</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Moved the task "<a href="#">Fix some features that are bugs in the master module</a>" from
                    Progress to Finish.</p>
                </div>
              </div>
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-unlock"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job">4 hour ago</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Login to the system with ujang@maman.com email and location in Bogor.</p>
                </div>
              </div>
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job">12 hour ago</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Log out of the system after 6 hours using the system.</p>
                </div>
              </div>
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-trash"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job">Yesterday</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Removing task "Delete all unwanted selectors in CSS files".</p>
                </div>
              </div>
              <div class="activity">
                <div class="activity-icon bg-primary text-white">
                  <i class="fas fa-trash"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job">Yesterday</span>
                    <span class="bullet"></span>
                    <a class="text-job" href="#">View</a>
                    <div class="float-right dropdown">
                      <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                        <div class="dropdown-title">Options</div>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"
                          data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                          data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                      </div>
                    </div>
                  </div>
                  <p>Assign the task of "<a href="#">Redesigning website header and make it responsive AF</a>" to <a
                      href="#">Syahdan Ubaidilah</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="mini_sidebar_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="sticky_header_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection