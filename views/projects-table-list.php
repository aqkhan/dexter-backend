<a href="<?php echo home_url(); ?>" class="pull-right btn-danger btn-lg">Add Projects</a>
<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            Project Name
        </th>
        <th>
            Project Link
        </th>
        <th>
            Project Type
        </th>
        <th>
            Project Location
        </th>
        <th>
            Project Rating
        </th>
        <th>
            Tags
        </th>
        <th>
            Description
        </th>
        <th>
            Client Name
        </th>
        <th>
            Project FeedBack
        </th>
        <th>
            Services we provided
        </th>
        <th>
            Preview
        </th><th>
            Logo
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'fields' => 'ids'
    );
    $projs = get_posts($args);
    $c = 1;
    foreach ($projs as $p) { $pd = getSingleProjectData($p); ?>
        <tr>
            <td>
                <?php echo $c; ?>
            </td>
            <td>
                <?php echo $pd['pName']; ?>
            </td>
            <td>
                <?php echo $pd['pLink']; ?>
            </td>
            <td>
                <?php echo $pd['pType']; ?>
            </td>
            <td>
                <?php echo $pd['pLocation']; ?>
            </td>
            <td>
                <?php echo $pd['pRating']; ?>
            </td>
            <td>
                <?php echo $pd['pTags']; ?>
            </td>
            <td>
                <?php echo $pd['pDescription']; ?>
            </td>
            <td>
                <?php echo $pd['cName']; ?>
            </td>
            <td>
                <?php echo $pd['pFeedback']; ?>
            </td>
            <td>
                <?php echo $pd['services']; ?>
            </td>
            <td>
                <a href="<?php echo $pd['pThumb']; ?>" target="_blank">View</a>
            </td>
            <td>
                <a href="<?php echo $pd['pLogo']; ?>" target="_blank">View</a>
            </td>
        </tr>
        <?php $c++;
    } ?>
    </tbody>
</table>