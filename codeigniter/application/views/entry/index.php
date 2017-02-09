<h2><?php echo $title; ?></h2>

<p><a href="<?php echo site_url('entry/create'); ?>">Create entry</a></p>

<?php foreach ($entries as $entry): ?>

    <h3><?php echo $entry['title']; ?></h3>
    <p><a href="<?php echo site_url('entry/'.$entry['id']); ?>">View</a></p>
    <p><a href="<?php echo site_url('entry/delete/'.$entry['id']); ?>">Delete</a></p>

<?php endforeach; ?>