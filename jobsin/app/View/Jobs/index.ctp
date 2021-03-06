<div id="jobs_image">
    <?php echo $this->Html->image('jobs_background.jpg', array('alt' => 'job-img', 'border' => '0')); ?>
</div>
<h3>Latest Job Listings</h3>
<ul id="listings">
    <?php foreach($jobs as $job) : ?>
    <li>
        <div class="type">
            <span style="background:<?php echo $job['Type']['color']; ?>"><?php echo $job['Type']['name']; ?></span>
        </div>
        <div class="description">
            <h5><?php echo $job['Job']['title']; ?> (<?php echo $job['Job']['city']; ?>, <?php echo $job['Job']['state']; ?>)</h5>
            <span id="list_date">
                <?php echo $this->Time->format('F jS, Y h:i A', $job['Job']['created']); ?>
            </span>
            <?php echo $this->Text->truncate($job['Job']['description'], 250, array('ellipsis' => '...', 'exact' => false)); ?>
            <?php echo $this->Html->link('Read More', array('controller' => 'jobs', 'action' => 'view', $job['Job']['id'])); ?>
        </div>
    </li>
    <?php endforeach; ?>
</ul>