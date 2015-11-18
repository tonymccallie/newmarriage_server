<?php //var_dump(array($user,$params)) ?>
<p><?php echo $user['User']['first_name'] ?>,</p>
<p>Email text about what you're reading should probably go here.</p>
<h3>Your Overall Score:</h3>
<h2><?php echo $params['data']['quiz']['physical']+$params['data']['quiz']['emotional']+$params['data']['quiz']['mental']+$params['data']['quiz']['spiritual'] ?></h2>
<h4>Notes on improvements for a better physical score</h4>
<p><?php echo $params['data']['quiz']['physical_notes'] ?></p>
<h4>Notes on improvements for a better emotional score</h4>
<p><?php echo $params['data']['quiz']['emotional_notes'] ?></p>
<h4>Notes on improvements for a better mental score</h4>
<p><?php echo $params['data']['quiz']['mental_notes'] ?></p>
<h4>Notes on improvements for a better spiritual score</h4>
<p><?php echo $params['data']['quiz']['spiritual_notes'] ?></p>