<?php
// Get a global counter from server and update counter
$counter_file = "/tmp/dispatch-counter-ATI-atfu";
$counter_val = file_get_contents($counter_file);
file_put_contents($counter_file, $counter_val + 1);

// Possible redirections
$redirects = array("http://spellout.net/ibexexps/redudley/ATI-05/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-06/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-07/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-08/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-09/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-10/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-11/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-12/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-13/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-14/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-15/experiment.html",
                   "http://spellout.net/ibexexps/redudley/ATI-16/experiment.html",);
// Redirect user to the next link
header("Location: " . $redirects[$counter_val % count($redirects)]);
?>
