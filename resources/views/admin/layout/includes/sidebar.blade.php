
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src=" {{ asset('/asset/') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name')  }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=" {{ asset('/asset/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ url('/dashboard') }}" class="nav-link " id="dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>

          </li>

          <li class="nav-item ">
            <a href="{{ url('/user') }}" class="nav-link " id="user">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
        <li class="nav-item ">
            <a href="{{ url('/bank') }}" class="nav-link " id="teacher">
              <i class="nav-icon fas fa-university"></i>
              <p>Bank</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('/loan') }}" class="nav-link " id="student">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>Loan</p>
            </a>
          </li>

     {{--        <li class="nav-item has-treeview" id="systemSettings">
            <a href="#" class="nav-link">

                <i class="nav-icon fas fa-university"></i>
              <p>
                Academic
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ url('/student-session') }}" class="nav-link " id="session">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Session</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/student-class') }}" class="nav-link " id="class">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Class</p>
                    </a>
                  </li>
                <li class="nav-item ">
                    <a href="{{ url('/subject') }}" class="nav-link " id="subject">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Subject</p>
                    </a>
                  </li>

                  <li class="nav-item ">
                    <a href="{{ url('/grading-system') }}" class="nav-link " id="gradeSystem">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Grade System</p>
                    </a>
                  </li>
            </ul>
          </li>



          <li class="nav-item has-treeview" id="exam">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Exam
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ url('/examination') }}" class="nav-link " id="examination">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Exam</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ url('/exam-has-subject') }}" class="nav-link " id="examsubject">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Exam & Subject</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ url('/exam-registration') }}" class="nav-link " id="examRegistration">

                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Board Registration</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ url('/exam-center') }}" class="nav-link " id="examCenter">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Exam Center</p>
                    </a>
                </li>

            </ul>
          </li>


          <li class="nav-item has-treeview" id="issue">
            <a href="#" class="nav-link">

                <i class="nav-icon fas fa-id-card"></i>
              <p>
                Issue
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ url('issue-admit-card') }}" class="nav-link " id="issueAdmitCard">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Issue Admit Card</p>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="{{ url('issue-registration-card') }}" class="nav-link " id="issueRegistrationCard">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Issue Registration Card</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{ url('result') }}" class="nav-link " id="result">
              <i class="nav-icon fas fa-poll"></i>
              <p>Result</p>
            </a>
          </li>

          <li class="nav-item has-treeview" id="reports">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-line"></i>
              <p>
                  Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ url('report/student-report-exam') }}" class="nav-link " id="studentReport">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Report</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('report/student-report-center') }}" class="nav-link " id="CstudentReport">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Report Center wise</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('report/student-report-madrasa') }}" class="nav-link " id="MstudentReport">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Report Madrasa wise</p>
                    </a>
                </li>

            </ul>
          </li> --}}













        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
