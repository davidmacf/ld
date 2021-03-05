<?php
if ($client->variation('generate-report', $user, false)) {
  // application code to show the feature
  $generate_report_button = "<a href='#' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>Generate Report</a>";
} else {
  $generate_report_button = "<a href='#' class='btn btn-primary btn-sm disabled' role='button' aria-disabled='true'>Generate Report</a>";
}
echo $generate_report_button;
?>