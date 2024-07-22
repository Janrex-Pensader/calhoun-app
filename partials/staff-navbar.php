<div class="row px-12" style="background-color: #2A2F42 !important">
  <a class="navbar-brand" href="./"><img src="../img/logo.png" height=45 class="mr-3"> Maryland Evictions Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff">
        <img id="nav-user-image" src="../img/default_user_image.png" style="width:35px; border-radius:50%;">
        <span class="ml-1"id="nav-user-name"></span>
      </a>
      <div class="dropdown-menu">
        <a id="nav-profile" class="dropdown-item" href="./profile.php"><i class="fas fa-user"></i> Profile</a>
        <a class="dropdown-item" href="https://c1abn983.caspio.com/folderlogout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
      </div>
    </li>
</ul>
</div>
<div class="row px-12">
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav">
        <li id="nav-dashboard" class="nav-item">
          <a class="nav-link" href="./index.php?cbResetParam=1"><i class="fas fa-address-card"></i> Dashboard</a>
        </li>
        <li id="nav-owners" class="nav-item">
          <a class="nav-link" href="./owners.php?cbResetParam=1"><i class="fas fa-users"></i> Owners</a>
        </li>
        <li id="nav-properties" class="nav-item">
          <a class="nav-link" href="./properties.php?Property_Status=1"><i class="fas fa-home"></i> Properties</a>
        </li>
        <li id="nav-tenants" class="nav-item">
          <a class="nav-link" href="./tenants.php?cbResetParam=1"><i class="fas fa-users"></i> Tenants</a>
        </li>
        <li id="nav-cases" class="nav-item">
          <a class="nav-link" href="./cases.php?cbResetParam=1&Case_Status_ID=1"><i class="fas fa-file"></i> Cases</a>
        </li>
        <li id="nav-tasks" class="nav-item">
          <a class="nav-link" href="./tasks.php?cbResetParam=1"><i class="fas fa-tasks"></i> Tasks</a>
        </li>
        <li id="nav-communications" class="nav-item">
          <a class="nav-link" href="./communications.php?cbResetParam=1"><i class="fas fa-phone"></i> Communications</a>
        </li>

        <li class="nav-item dropdown " id="nav-settings">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cogs"></i> Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a id="nav_user_screen" class="dropdown-item d-none" href="./user-screen.php">Manage Users</a>
            <a id="nav_property_manager" class="dropdown-item" href="./property-managers.php">Manage Property Manager</a>
            <a id="nav_export_data" class="dropdown-item" href="./export-data.php">Export Data</a>
            <a id="nav_reference_tables" class="dropdown-item d-none" href="./reference-tables.php">Reference Tables</a>
            <a id="nav_audit_log" class="dropdown-item" href="./audit-log.php">Audit Log</a>
            <a id="nav_backup" class="dropdown-item d-none" href="./backup.php">Backup</a>
          </div>
        </li>
        <li class="nav-item dropdown " id="nav-reports">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard-list"></i> Reports
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h6 class="dropdown-header">Eviction Reports</h6>
            <a id="nav_court_summary_report" class="dropdown-item" href="./court-summary-report.php">Court Summary Report</a>
            <a id="nav_active_cases_report" class="dropdown-item" href="./active_cases_report.php">Active Cases Report</a>
            <a id="nav_case_stage_report" class="dropdown-item" href="./case_stage_report.php">Case Stage Report</a>
            <a id="nav_in_house_case_report" class="dropdown-item" href="./in_house_case_report.php">In House Case Report</a>
            <a id="nav_eviction_summary_report" class="dropdown-item" href="./eviction-summary-report.php">Eviction Summary Report</a>
            <a id="nav_closed_case_report" class="dropdown-item" href="./closed_case_report.php">Closed Case Report</a>
            <a id="nav_case_by_plan_report" class="dropdown-item" href="./case_by_plan_report.php">Case By Plan Report</a>
            <a id="nav_cases_by_account" class="dropdown-item" href="./cases_by_account.php">Cases By Account</a>
            <a id="nav_virtual_folder_check_report" class="dropdown-item" href="./virtual_folder_check_report.php">Virtual Folder Check Report</a>
            <a id="nav_tho_pending_vacate" class="dropdown-item" href="./tho_pending_vacate.php">THO Pending Vacate</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Property Management Reports</h6>
            <a id="nav_message_summary_report" class="dropdown-item" href="./message_summary_report.php">Message Summary Report</a>
            <a id="nav_rental_license_expiration_report" class="dropdown-item" href="./rental_license_expiration_report.php">Rental License Expiration Report</a>
            <a id="nav_current_key_report" class="dropdown-item" href="./current_key_report.php">Current Key Report</a>
            <a id="nav_upcoming_property_inspection_report" class="dropdown-item" href="./active_managed_properties.php">Upcoming Property Inspection Report</a>
            <a id="nav_active_managed_properties" class="dropdown-item" href="./upcoming_property_inspection_report.php">Active managed Properties</a>
          </div>
        </li>
      </ul>
    </div>

    <div id="btn-submit-all" class="text-right hide-this mt-1">
      <script type="text/javascript" src="https://c1abn983.caspio.com/dp/ded080003041f19ec520437ca017/emb"></script>
    </div>



</div>

