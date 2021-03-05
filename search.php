<?php
// conditional statment to load the search functionality
if ($client->variation('search-bar', $user, false)) {
  // application code to show the feature
  require 'search.php';
} else {
  // the code to run if the feature is off
}
?>
