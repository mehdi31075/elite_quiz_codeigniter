<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= lang('daily_leaderboard_details'); ?> | <?php echo (is_settings('app_name')) ? is_settings('app_name') : "" ?></title>

    <?php base_url() . include 'include.php'; ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php base_url() . include 'header.php'; ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= lang('daily_leaderboard_details'); ?> <small><?= lang('view_day_wise_leaderboard'); ?></small></h1>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table aria-describedby="mydesc" class='table-striped' id='daily_leaderboard' data-toggle="table" data-url="<?= base_url() . 'Table/daily_leaderboard' ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200, All]" data-search="true" data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-mobile-responsive="true" data-sort-name="user_rank" data-sort-order="asc" data-pagination-successively-size="3" data-maintain-selected="true" data-show-export="true" data-export-types='["csv","excel","pdf"]' data-export-options='{ "fileName": "leaderboard-list-<?= date('d-m-y') ?>" }' data-query-params="queryParams">
                                            <thead>
                                                <tr>
                                                    <th scope="col" data-field="id" data-sortable="true" data-align="center"><?= lang('id'); ?></th>
                                                    <th scope="col" data-field="user_id" data-sortable="true" data-visible="false"><?= lang('user_id'); ?></th>
                                                    <th scope="col" data-field="name" data-sortable="true"><?= lang('name'); ?></th>
                                                    <th scope="col" data-field="email" data-sortable="true"><?= lang('email'); ?></th>
                                                    <th scope="col" data-field="score" data-sortable="true"><?= lang('score'); ?></th>
                                                    <th scope="col" data-field="user_rank" data-sortable="true"><?= lang('rank'); ?></th>
                                                    <th scope="col" data-field="date_created" data-sortable="true"><?= lang('date_created'); ?></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <?php base_url() . include 'footer.php'; ?>

    <script type="text/javascript">
        window.actionEvents = {};
    </script>
    <script type="text/javascript">
        function queryParams(p) {
            return {
                sort: p.sort,
                order: p.order,
                offset: p.offset,
                limit: p.limit,
                search: p.search
            };
        }
    </script>

</body>

</html>