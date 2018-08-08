    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-6">
            <a href="<?= URL; ?>posts/add" class="btn btn-primary pull-right">
                <i class="fa fa-pencil"></i> Add Post
            </a>
        </div>
    </div>

    <?php foreach($this->post as $item) : ?>
        <div class="card card-body mb-3">
            <h4 class="card-title"><?= $item->header; ?></h4>
            <div class="bg-light p-2 mb-3">
                Written by <?= $item->user_id ?> on <?= $item->timestamp;?>
            </div>

            <p class="card-text"><?= $item->content; ?></p>
            <a href="<?= URL; ?>posts/show/<?= $item->id; ?>" class="btn btn-dark">More</a>
        </div>
    <?php endforeach; ?>

